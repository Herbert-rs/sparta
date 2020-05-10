<?php

use Illuminate\Database\Seeder;
use Model\HiringType\HiringType;

class HiringTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HiringType::create(['description' => 'CLT']);
        HiringType::create(['description' => 'PJ']);
        HiringType::create(['description' => 'Estágio']);
        HiringType::create(['description' => 'Trainee']);
        HiringType::create(['description' => 'Temporário']);

    }
}
