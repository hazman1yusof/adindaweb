<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('idno');
            $table->string('compcode',20)->nullable();
            $table->string('itemcode',20)->nullable();
            $table->string('itemname',20)->nullable();
            $table->text('description')->nullable();
            $table->string('uomcode',20)->nullable();
            $table->string('groupcode',20)->nullable();
            $table->string('productcat',20)->nullable();
            $table->string('suppcode',20)->nullable();
            $table->decimal('avgcost',15,2)->nullable();
            $table->decimal('actavgcost',15,2)->nullable();
            $table->decimal('currprice',15,2)->nullable();
            $table->smallInteger('qtyonhand')->nullable();
            $table->decimal('bonqty',12,2)->nullable();
            $table->smallInteger('rpkitem')->nullable();
            $table->smallInteger('miqty')->nullable();
            $table->smallInteger('maxqty')->nullable();
            $table->smallInteger('reordlevel')->nullable();
            $table->smallInteger('reordqty')->nullable();
            $table->string('mstore',10)->nullable();
            $table->char('expdtflg',5)->nullable();

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
        Schema::dropIfExists('product');
    }
}
