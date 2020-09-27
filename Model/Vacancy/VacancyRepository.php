<?php namespace Model\Vacancy;

use Model\Vacancy\Vacancy;

class VacancyRepository {

    protected $model;

    public function __construct(Vacancy $model)
    {
        $this->model = $model;
    }

    public function list()
    {
        return $this->model->with(['company','hiring_type','profession','building'])->where('active', 1)->paginate(5);
    }

    public function getByCompanyId(int $company_id)
    {
        return $this->model
                ->with(['company','hiring_type','profession','building'])
                ->where('company_id', $company_id)
                ->where('active', 1)
                ->paginate(6);
    }

    public function getById(int $vacancy_id)
    {
        return $this->model->with(['company','hiring_type','profession','building'])->find($vacancy_id);
    }

    public function getByCandidateId(int $candidate_id)
    {

    }
}
