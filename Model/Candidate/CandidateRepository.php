<?php namespace Model\Candidate;

use Model\Candidate\Candidate;

class CandidateRepository
{

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
            'tax_id' => $data['tax_id'],
            'mobile' => $data['mobile'],
            'description' => $data['description'],
            'cid' => $data['cid']
        ];

        if (isset($data['avatar'])) {
            $candidate_data['avatar'] = $data['avatar'];
        }

        if (isset($data['curriculum'])) {
            $candidate_data['curriculum'] = $data['curriculum'];
        }

        $this->model
            ->where('user_id', \Auth::user()->user_id)
            ->update($candidate_data);
    }

    public function save($data)
    {
        $candidate = new Candidate();
        $candidate->fill($data);
        $result = $candidate->save();

        return $result;
    }

    public function changeStatus($candidateId, $status)
    {
        $this->model->where('candidate_id', $candidateId)->update(['active' => $status]);
    }

}
