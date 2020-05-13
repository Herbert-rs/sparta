<?php

use Illuminate\Database\Seeder;

class BuildingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Model\Building\Building::class, 50)->create()->each(function ($building) {
            $building->save();
        });
    }
}
