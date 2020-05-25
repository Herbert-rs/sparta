<?php

namespace Model\Building;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'building';

    /**
     * Primary key name
     *
     * @var string
     */
    protected $primaryKey = 'building_id';

    /**
     * Check if this table will use timestamps
     *
     * @var bool
     */
    public $timestamps = false;


    public function vacancy()
    {
        return $this->belongsToMany('Model\Vacancy\Vacancy', 'building_id', 'building_id');
    }    
}
