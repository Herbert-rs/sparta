<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HiringTypeTableSeeder::class);
        $this->call(BuildingTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ProfessionTableSeeder::class);
        
        $this->call(CandidateTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(SkillTableSeeder::class);

        $this->call(VacancyTableSeeder::class);
    }
}
