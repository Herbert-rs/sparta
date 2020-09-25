<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Model\Vacancy\Vacancy;
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
        return view('vacancy.list', ['vacancies' => $vacancies]);
    }



    public function show(Request $request)
    {
        $id = $request->input('id');
        $jobs = Vacancy::where('vacancy_id', $id)->get();
        return view('jobs.description', ['jobs' => $jobs]);
    }

}
