<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('name',30);
            $table->boolean('corporate');
            $table->string('avatar');
            $table->string('description');
            $table->string('tax_id',30); //CPF/CNPJ
            $table->string('building_id');
            $table->string('phone',10);
            $table->string('mobile',11);
            $table->string('email')->unique();
            $table->dateTime('birthdate')->nullable();
            $table->string('password');
            $table->string('token',50);
            $table->string('cid')->nullable();
            $table->string('curriculum')->nullable();
            $table->boolean('active');
            $table->timestamp('timestamp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
