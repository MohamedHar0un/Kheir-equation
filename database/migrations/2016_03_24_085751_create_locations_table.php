<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //migration...
        Schema::create('locations',function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->double('lat',20,10);
            $table->double('lng',20,10);
            $table->timestamps();
            $table->string('_token',50);            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('locations');
    }
}
