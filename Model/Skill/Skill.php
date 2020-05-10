<?php

namespace Model\Skill;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'skills';

    /**
     * Primary key name
     *
     * @var string
     */
    protected $primaryKey = 'skill_id';



    /** Relations */
    public function candidate()
    {
        return $this->belongsTo('Model\Candidate\Candidate', 'candidate_id', 'candidate_id');
    }
}
