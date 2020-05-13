<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\User;
use Model\Building\Building;
use Model\Candidate\Candidate;
use Model\Company\Company;
use Model\HiringType\HiringType;
use Model\Profession\Profession;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

#BUILDING
$factory->define(\Model\Building\Building::class, function (Faker $faker) {
    
    $types = array('Av', 'Rua', 'Rodovia');

    $mail_code    = $faker->postcode;
    $type         = $types[array_rand($types)];
    $name         = $faker->streetName;
    $number       = $faker->buildingNumber;
    $state        = $faker->state;
    $city         = $faker->city;
    $full_address = $type.' '.$name.' '.$number.', '.$city.' - '.$state.', '.$mail_code;
    $district     = null;

    return [
        'mail_code' => $mail_code,
        'type' => $type,
        'name' => $name,
        'number' => $number,
        'state' => $state,
        'city' => $city,
        'full_address' => $full_address,
        'district' => $district,
    ];

});

#USER
$factory->define(\App\User::class, function (Faker $faker) {

    return [
        'corporate' => $faker->boolean(35),
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('password'),
        'token' => Str::random(10),
        'active' => $faker->boolean(80)
    ];

});

#PROFESSION
$factory->define(\Model\Profession\Profession::class, function (Faker $faker) {

    $levels = ['Estágio', 'Assistente', 'Analista', 'Coordenação', 'Gerência', 'Supervisor'];
    $names = ['Compras', 'RH', 'Suporte', 'Sistemas', 'Vendas', 'Finanças', 'Departamento Pessoal', 'Marketing'];

    $level = $levels[array_rand($levels)];
    $name  = $names[array_rand($names)];

    return [
        'level' => $level,
        'name' => $name,
        'description' => $faker->sentence(8),
        'title' => "{$level} de {$name}"
    ];

});

#CANDIDATES (Pegar CID no JSON e montar Path de curriculum)
$factory->define(\Model\Candidate\Candidate::class, function (Faker $faker) {

    $cid_path = storage_path().'/cid/'.'cid10.json';
    $cid_json = json_decode(file_get_contents($cid_path)); 
    $cid_random = $cid_json[rand(0, count($cid_json) - 1)];

    $avatars = array('01.png', '02.png', '03.png');

    $user_id = null;
    while( $user_id == null) {

        $user_id = User::all()->random()->user_id;
        $exists_candidate = Candidate::where('user_id', $user_id)->count();
        $exists_company = Company::where('user_id', $user_id)->count();
        if($exists_company <= 0 && $exists_candidate <= 0){
            $user_id = $user_id;
            break;
        }

        $user_id = null;
    }

    return [
        'user_id' => $user_id,
        'name' => $faker->name,
        'avatar' => $avatars[array_rand($avatars)],
        'goal' => $faker->sentence(),
        'description' => $faker->sentence(15),
        'email' => $faker->unique()->safeEmail,
        'tax_id' => $faker->unique()->numberBetween($min = 11111111111, $max = 99999999999),
        'building_id' => Building::all()->random()->building_id,
        'phone' => $faker->unique()->numberBetween('1111111111', '9999999999'),
        'mobile' => $faker->unique()->numberBetween('11111111111', '99999999999'),
        'birthdate' => $faker->date(),
        'cid' => $cid_random->codigo,
        'curriculum' => 'cid/curriculum-base.txt',
        'active' => $faker->boolean(80)
    ];

});

#COMPANYS
$factory->define(\Model\Company\Company::class, function (Faker $faker) {

    $avatars = array('04.png', '05.png', '06.png');

    $user_id = null;
    while( $user_id == null) {

        $user_id = User::all()->random()->user_id;
        $exists_candidate = Candidate::where('user_id', $user_id)->count();
        $exists_company = Company::where('user_id', $user_id)->count();
        if($exists_company <= 0 && $exists_candidate <= 0){
            $user_id = $user_id;
            break;
        }

        $user_id = null;
    }
    
    return [
        'user_id' => $user_id,
        'name' => $faker->company,
        'avatar' => $avatars[array_rand($avatars)],
        'description' => $faker->sentence(15),
        'email' => $faker->unique()->safeEmail,
        'manager' => $faker->name,
        'tax_id' => $faker->unique()->numberBetween($min = 11111111111, $max = 99999999999),
        'building_id' => Building::all()->random()->building_id,
        'phone' => $faker->unique()->numberBetween('1111111111', '9999999999'),
        'mobile' => $faker->unique()->numberBetween('11111111111', '99999999999'),
        'active' => $faker->boolean(80)
    ];

});

#SKILLS (Talvez pensar em ícones para essas skills)
$factory->define(\Model\Skill\Skill::class, function (Faker $faker) {

    return [
        'candidate_id' => Candidate::all()->random()->candidate_id,
        'description' => $faker->sentence(5)
    ];

});

#VACANCIES
$factory->define(\Model\Vacancy\Vacancy::class, function (Faker $faker) {

    $company_id = Company::all()->random()->company_id;
    
    $hiring_type_id = HiringType::all()->random()->hiring_type_id;

    $profession_id = Profession::all()->random()->profession_id;

    $building_id = null;
    while( $building_id == null) {

        $building_id = Building::all()->random()->building_id;
        $exists_building = Candidate::where('user_id', $building_id)->count();
        if($exists_building <= 0){
            $building_id = $building_id;
            break;
        }

        $building_id = null;
    }

    return [
        'company_id' => $company_id,
        'building_id' => $building_id,
        'building_remote' => $faker->boolean(20),
        'hiring_type_id' => $hiring_type_id,
        'profession_id' => $profession_id,
        'description' => $faker->sentence(20),
        'salary' => $faker->randomFloat(NULL, $min = 1200, $max = 9999),
        'active' => $faker->boolean(80),
    ];

});