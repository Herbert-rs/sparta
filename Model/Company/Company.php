<?php

namespace Model\Company;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'companies';

    /**
     * Primary key name
     *
     * @var string
     */
    protected $primaryKey = 'company_id';


    
    /** Relations */
    public function user()
    {
        return $this->hasOne('App\User', 'user_id', 'user_id');
    }

    public function building()
    {
        return $this->hasOne('Model\Building\Building', 'building_id', 'building_id');
    }
}
