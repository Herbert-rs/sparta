<?php

namespace Model\HiringType;

use Illuminate\Database\Eloquent\Model;

class HiringType extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'hiring_type';

    /**
     * Primary key name
     *
     * @var string
     */
    protected $primaryKey = 'hiring_type_id';

    /**
     * Check if this table will use timestamps
     *
     * @var bool
     */
    public $timestamps = false;
}
