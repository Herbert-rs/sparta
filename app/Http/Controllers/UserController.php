<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Model\Candidate\CandidateRepository;
use Model\Company\CompanyRepository;
use Model\Vacancy\VacancyRepository;


class UserController extends Controller
{

    protected $vacancyRepo;
    protected $companyRepo;
    protected $candidateRepo;

    public function __construct(VacancyRepository $vacancyRepo, CompanyRepository $companyRepo, CandidateRepository $candidateRepo) {
        $this->vacancyRepo = $vacancyRepo;
        $this->companyRepo = $companyRepo;
        $this->candidateRepo = $candidateRepo;
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

        return view('user.candidate.vacancy');
    }

    public function profile()
    {
        if( auth()->user()->corporate ){
            return view('user.company.profile');
        }
        return view('user.candidate.profile');
    }
}
