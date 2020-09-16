<?php

namespace Model\Candidature;

use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'candidatures';

    /**
     * Primary key name
     *
     * @var string
     */
    protected $primaryKey = 'candidature_id';

    /**
     * @var string[]
     */
    protected $guarded = [
        'candidature_id'
    ];

    /** Relations */
    public function candidate()
    {
        return $this->hasOne('Model\Candidate\Candidate', 'candidate_id', 'candidate_id');
    }

    public function vacancy()
    {
        return $this->hasOne('Model\Vacancy\Vacancy', 'vacancy_id', 'vacancy_id');
    }
}
