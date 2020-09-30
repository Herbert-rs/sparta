<?php

namespace App\Http\Controllers;

use App\UserRepository;
use Illuminate\Http\Request;
use Model\Candidate\CandidateRepository;
use Model\Candidature\CandidatureRepository;
use Model\Company\CompanyRepository;
use Model\Vacancy\VacancyRepository;

class UserController extends Controller
{

    protected $vacancyRepo;
    protected $companyRepo;
    protected $candidateRepo;
    protected $candidatureRepo;
    protected $userRepo;

    public function __construct(VacancyRepository $vacancyRepo, CompanyRepository $companyRepo, CandidateRepository $candidateRepo, CandidatureRepository $candidatureRepo, UserRepository $userRepo) {
        $this->vacancyRepo = $vacancyRepo;
        $this->companyRepo = $companyRepo;
        $this->candidateRepo = $candidateRepo;
        $this->candidatureRepo = $candidatureRepo;
        $this->userRepo = $userRepo;
    }

    public function index()
    {
        if( auth()->user()->corporate ){
            return view('user.company.dashboard');
        }
        return view('user.candidate.dashboard');
    }

    public function vacancy()
    {
        if( auth()->user()->corporate ){
            $company = $this->companyRepo->getByUserId(auth()->user()->user_id);
            $vacancies = $this->vacancyRepo->getByCompanyId( $company->company_id );
            return view('user.company.vacancy', ['vacancies' => $vacancies]);
        }

        $candidate = $this->candidateRepo->getByUserId(auth()->user()->user_id);
        $candidatures = $this->candidatureRepo->getByCandidateId( $candidate->candidate_id );
        return view('user.candidate.vacancy', ['candidatures' => $candidatures]);
    }

    public function vacancyCandidates($vacancy_id)
    {
        if( auth()->user()->corporate ){

            $company = $this->companyRepo->getByUserId(auth()->user()->user_id);
            $vacancy = $this->vacancyRepo->getById($vacancy_id);
            
            if($company->company_id != $vacancy->company_id){

                toastr()->warning('Você não possui acesso a essa página');
                return view('errors.authorization');
            }

            return view('user.company.vacancy_candidate', ['vacancy' => $vacancy]);
        }

        toastr()->warning('Você não possui acesso a essa página');
        return view('errors.authorization');
    }

    public function profile()
    {
        if( auth()->user()->corporate ){

            $data = auth()->user()->company;
            return view('user.company.profile', ['data' => $data]);
        }

        $data = auth()->user()->candidate;
        return view('user.candidate.profile', ['data' => $data]);
    }

    public function profileUpdate(Request $request)
    {
        $data = $request->all();

        if( $data['password'] != null){
            $this->userRepo->updatePassword($data['password']);
        }
        unset($data['password']);

        if($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar');
            $avatarName = time() . '.' . $avatarPath->getClientOriginalExtension();
            $path = $request->file('avatar')->storeAs('avatars/'. auth()->user()->user_id, $avatarName, 'public' );
            $data['avatar'] = $path;
        }

        if($request->hasFile('curriculum')) {
            $curriculumPath = $request->file('curriculum');
            $curriculumName = time() . '.' . $curriculumPath->getClientOriginalExtension();
            $path = $request->file('curriculum')->storeAs('curriculum/'. auth()->user()->user_id, $curriculumName, 'public' );
            $data['curriculum'] = $path;
        }

        if( auth()->user()->corporate ){

            $this->companyRepo->update($data);
            toastr()->success('Perfil atualizado com sucesso');
            return redirect()->route('user.profile');
        }

        $this->candidateRepo->update($data);
        toastr()->success('Perfil atualizado com sucesso');
        return redirect()->route('user.profile');

    }
}
