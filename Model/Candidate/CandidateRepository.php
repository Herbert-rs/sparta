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

    public function update(array $data)
    {
        $candidate_data = [
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'tax_id' => $data['tax_id']
        ];

        $this->model
            ->where('user_id',  \Auth::user()->user_id)
            ->update($candidate_data);
    }
    public function save($data)
    {
        $candidate = new Candidate();
        $candidate->fill($data);
        $result = $candidate->save();

        return $result;
    }

}
