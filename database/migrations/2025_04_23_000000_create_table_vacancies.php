<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateTableVacancies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->bigIncrements('vacancy_id');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('company_id')->on('companies');

            $table->unsignedBigInteger('building_id');
            $table->foreign('building_id')->references('building_id')->on('building');
            
            $table->boolean('building_remote');

            $table->unsignedBigInteger('hiring_type_id');
            $table->foreign('hiring_type_id')->references('hiring_type_id')->on('hiring_type');
            
            $table->unsignedBigInteger('profession_id');
            $table->foreign('profession_id')->references('profession_id')->on('professions');

            $table->string('description')->unique();
            $table->float('salary')->nullable();
            $table->boolean('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}
