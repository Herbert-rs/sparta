<?php

namespace Model\Vacancy;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'vacancies';

    /**
     * Primary key name
     *
     * @var string
     */
    protected $primaryKey = 'vacancy_id';



    /** Relations */
    public function company()
    {
        return $this->hasOne('Model\Company\Company', 'company_id', 'company_id');
    }

    public function building()
    {
        return $this->hasOne('Model\Building\Building', 'building_id', 'building');
    }

    public function hiring_type()
    {
        return $this->hasOne('Model\HiringType\HiringType', 'hiring_type_id', 'hiring_type_id');
    }

    public function profession()
    {
        return $this->hasOne('Model\Profession\Profession', 'profession_id', 'profession_id');
    }
}
