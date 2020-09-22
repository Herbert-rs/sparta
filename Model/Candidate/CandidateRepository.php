<?php namespace Model\Candidate;

use Model\Candidate\Candidate;

class CandidateRepository {

    protected $model;

    public function __construct(Candidate $model)
    {
        $this->model = $model;
    }

    public function getByUserId(int $user_id)
    {
        return $this->model->where('user_id', $user_id)->first();
    }

    public function save($data)
    {
        $candidate = new Candidate();
        $candidate->fill($data);
        $result = $candidate->save();

        return $result;
    }

}
