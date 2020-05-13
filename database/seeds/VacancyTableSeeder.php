<?php

use Illuminate\Database\Seeder;

class VacancyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Model\Vacancy\Vacancy::class, 100)->create()->each(function ($vacancy) {
            $vacancy->save();
        });
    }
}
