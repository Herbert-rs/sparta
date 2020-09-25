<?php namespace App;

use App\User;
use Illuminate\Support\Str;

class UserRepository {

    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function save($data)
    {
        $user = new User();

        $data['token'] = Str::random(10);
        $data['active'] = true;
        $data['password'] = bcrypt($data['password']);

        $user->fill($data);
        $user->save();

        return $user;
    }

}
