<?php

namespace Model\Candidate;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'candidates';

    /**
     * Primary key name
     *
     * @var string
     */
    protected $primaryKey = 'candidate_id';



    /** Relations */
    public function user()
    {
        return $this->hasOne('App\User', 'user_id', 'user_id');
    }

    public function building()
    {
        return $this->hasOne('Model\Building\Building', 'building_id', 'building_id');
    }

    public function skill()
    {
        return $this->hasMany('Model\Skill\Skill', 'candidate_id', 'candidate_id');
    }
}
