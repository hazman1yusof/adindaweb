<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('idno');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('email')->unique();
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('postcode')->nullable();
            $table->string('mobile_nm')->nullable();
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
        Schema::dropIfExists('admins');
    }
}
