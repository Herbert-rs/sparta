<?php

use Illuminate\Database\Seeder;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Model\Skill\Skill::class, 100)->create()->each(function ($skill) {
            $skill->save();
        });
    }
}
