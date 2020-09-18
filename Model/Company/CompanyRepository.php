<?php namespace Model\Company;

use Model\Company\Company;

class CompanyRepository {

    protected $model;

    public function __construct(Company $model)
    {
        $this->model = $model;
    }

    public function save($data)
    {
        $company = new Company();
        $company->fill($data);
        $result = $company->save();

        return $result;
    }

}
