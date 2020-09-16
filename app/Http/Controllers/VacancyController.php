<?php

namespace App\Http\Controllers;

use Model\Candidature\CandidatureRepository;
use Model\Vacancy\VacancyRepository;
use Auth;

class VacancyController extends Controller
{
    
    protected $vacancyRepository;
    protected $candidatureRepository;

    public function __construct(VacancyRepository $vacancyRepository, CandidatureRepository $candidatureRepository) {
        $this->vacancyRepository = $vacancyRepository;
        $this->candidatureRepository = $candidatureRepository;
    }

    public function list()
    {
        $vacancies = $this->vacancyRepository->list();
        return view('vacancy.list', ['vacancies' => $vacancies]);
    }

    public function setCandidature(int $vacancy_id)
    {

        if(Auth::user()->corporate){
            return json_encode([
                'status' => 422,
                'message' => 'Ops! Empresas não podem se candidatar a vagas'
            ]);
        }

        try{

            $exists = $this->candidatureRepository->checkIfExists($vacancy_id, Auth::user()->candidate->candidate_id);

            if($exists) {
                return json_encode([
                    'status' => 422,
                    'message' => 'Você já se candidatou a essa vaga'
                ]);
            }

            $this->candidatureRepository->save($vacancy_id, Auth::user()->candidate->candidate_id);
    
            return json_encode([
                'status' => 200,
                'message' => 'Sucesso ao enviar candidatura'
            ]);
        }
        catch(\Exception $e){
            return json_encode([
                'status' => 500,
                'message' => $e->getMessage()
            ]);
        }
    }
}
