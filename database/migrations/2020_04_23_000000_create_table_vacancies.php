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
            $table->bigIncrements('vacancies_id');
            $table->string('user_id')->nullable();
//            $table->foreign('user_id')->references('user_id')->on('users');
            $table->string('building_id')->nullable();
            $table->string('hiring_id')->nullable();
            $table->string('profession_id')->nullable();
            $table->string('description')->unique();
            $table->float('salary')->nullable();
            $table->boolean('active');
            $table->timestamp('timestamp')->useCurrent();
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
