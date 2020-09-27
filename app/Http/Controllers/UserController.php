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
