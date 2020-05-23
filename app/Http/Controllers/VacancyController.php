<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Model\Vacancy\VacancyRepository;

class VacancyController extends Controller
{
    
    protected $vacancyRepository;

    public function __construct(VacancyRepository $vacancyRepository) {
        $this->vacancyRepository = $vacancyRepository;
    }

    public function list()
    {
        $vacancies = $this->vacancyRepository->list();
        return view('jobs', ['vacancies' => $vacancies]);
    }

}
