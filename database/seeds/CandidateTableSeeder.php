<?php

use Illuminate\Database\Seeder;

class CandidateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Model\Candidate\Candidate::class, 20)->create()->each(function ($candidate) {
            $candidate->save();
        });
    }
}
