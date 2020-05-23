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
        return $this->model->with(['company','hiring_type','profession'])->paginate(5);
    }
}
