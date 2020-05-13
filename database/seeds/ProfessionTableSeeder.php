<?php

use Illuminate\Database\Seeder;

class ProfessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Model\Profession\Profession::class, 30)->create()->each(function ($profession) {
            $profession->save();
        });
    }
}
