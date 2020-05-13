<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Model\Company\Company::class, 10)->create()->each(function ($company) {
            $company->save();
        });
    }
}
