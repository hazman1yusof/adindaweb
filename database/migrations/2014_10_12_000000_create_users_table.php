<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('idno');
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('Address1')->nullable();
            $table->string('Address2')->nullable();
            $table->string('Address3')->nullable();
            $table->string('Postcode')->nullable();
            $table->string('telh')->nullable();
            $table->string('telhp')->nullable();
            $table->rememberToken();

            /////////////////basic kena ada setiap table///////////////
            $table->string('adduser')->nullable();
            $table->dateTime('adddate')->nullable();
            $table->string('upduser')->nullable();
            $table->dateTime('upddate')->nullable();
            $table->string('deluser')->nullable();
            $table->dateTime('deldate')->nullable();
            $table->string('recstatus')->nullable();
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
