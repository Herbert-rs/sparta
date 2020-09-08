<?php namespace Model\Candidate;

use Model\Candidate\Candidate;

class CandidateRepository {

    protected $model;

    public function __construct(Candidate $model)
    {
        $this->model = $model;
    }



    public function save($data)
    {
        $candidate = new Candidate();
        $candidate->fill($data);
        $result = $candidate->save();

        return $result;
    }

}
