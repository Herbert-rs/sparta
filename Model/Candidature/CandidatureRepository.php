<?php namespace Model\Candidature;

use Carbon\Carbon;
use Model\Candidature\Candidature;

class CandidatureRepository {

    protected $model;

    public function __construct(Candidature $model)
    {
        $this->model = $model;
    }

    public function checkIfExists(int $vacancy_id, int $candidate_id)
    {
       $count = $this->model
                        ->where('vacancy_id', $vacancy_id)
                        ->where('candidate_id', $candidate_id)
                        ->count();
        return ($count > 0 ? true : false);
    }

    public function save(int $vacancy_id, int $candidate_id)
    {   
        $candidature = new Candidature();
        $data = [
            'candidate_id' => $candidate_id,
            'vacancy_id' => $vacancy_id,
            'expires_in' => Carbon::now()->addDays(7)
        ];
        $candidature->fill($data);
        $result = $candidature->save();
        return $result;
    }

    public function getByCandidateId(int $candidate_id)
    {
        return $this->model
                        ->with(['vacancy','vacancy.company','vacancy.hiring_type','vacancy.profession','vacancy.building'])
                        // ->with(['vacancy.company:company_id,name,avatar'])
                        ->where('candidate_id', $candidate_id)
                        ->paginate(6);
    }
}
