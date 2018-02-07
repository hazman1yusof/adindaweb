<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavouritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favourites', function (Blueprint $table) {
            $table->increments('idno');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('product_id')->unsigned()->nullable();
            
            /////////////////basic kena ada setiap table///////////////
            $table->string('adduser',22)->nullable();
            $table->dateTime('adddate')->nullable();
            $table->string('upduser',22)->nullable();
            $table->dateTime('upddate')->nullable();
            $table->string('deluser',22)->nullable();
            $table->dateTime('deldate')->nullable();
            $table->string('recstatus',10)->nullable();

            //////////////foreign key kalu rajin//////////////////////
            $table->foreign('product_id')->references('idno')->on('product');
            $table->foreign('user_id')->references('idno')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favourites');
    }
}
