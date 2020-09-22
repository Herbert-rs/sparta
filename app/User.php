<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast to native types.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    protected $guarded = ['user_id'];

    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Primary key name
     *
     * @var string
     */
    protected $primaryKey = 'user_id';

    /** Relations */
    public function candidate()
    {
        return $this->hasOne('Model\Candidate\Candidate', 'user_id', 'user_id');
    }

    public function company()
    {
        return $this->hasOne('Model\Company\Company', 'company_id', 'company_id');
    }
}
