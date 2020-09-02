<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {

            $table->bigIncrements('company_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->string('name');
            $table->string('avatar')->nullable();
            $table->longText('description')->nullable(); //Descrição do perfil da empresa
            $table->string('email')->unique();
            $table->string('manager'); //Contato responsável da empresa
            $table->string('tax_id',30); //CPF/CNPJ
            $table->unsignedBigInteger('building_id')->nullable();
            $table->foreign('building_id')->references('building_id')->on('building');
            $table->string('phone',10)->nullable();
            $table->string('mobile',11)->nullable();
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('companies');
    }
}
