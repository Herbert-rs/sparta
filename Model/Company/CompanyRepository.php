<?php namespace Model\Company;

use Model\Company\Company;

class CompanyRepository {

    protected $model;
    CONST DEFAULT_AVATAR = '04.jpg';

    public function __construct(Company $model)
    {
        $this->model = $model;
    }

    public function getByUserId(int $user_id)
    {
        return $this->model->where('user_id', $user_id)->first();
    }

    public function update(array $data)
    {
        $company_data = [
            'name'    => $data['name'],
            'manager' => $data['manager'],
            'tax_id'  => $data['tax_id'],
            'avatar' => isset($data['avatar']) ? $data['avatar'] : $this::DEFAULT_AVATAR,
            'description' => $data['description'],
            'phone' => $data['phone'],
            'mobile' => $data['mobile'],
        ];

        $this->model
            ->where('user_id',  \Auth::user()->user_id)
            ->update($company_data);
    }

    public function save($data)
    {
        $company = new Company();
        $company->fill($data);
        $result = $company->save();

        return $result;
    }

}
