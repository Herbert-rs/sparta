<?php

namespace Model\Profession;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'professions';

    /**
     * Primary key name
     *
     * @var string
     */
    protected $primaryKey = 'profession_id';

}
