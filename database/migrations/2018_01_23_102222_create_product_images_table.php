<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->increments('idno');
            $table->string('itemcode',20)->nullable();
            $table->string('image_url',20)->nullable();

             /////////////////basic kena ada setiap table///////////////
            $table->string('adduser',22)->nullable();
            $table->dateTime('adddate')->nullable();
            $table->string('upduser',22)->nullable();
            $table->dateTime('upddate')->nullable();
            $table->string('deluser',22)->nullable();
            $table->dateTime('deldate')->nullable();
            $table->string('recstatus',10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_images');
    }
}
