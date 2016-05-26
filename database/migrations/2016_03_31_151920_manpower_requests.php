<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ManpowerRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('manpower_requests', function (Blueprint $table) {
           
        
         $table->increments('id');
            $table->bigInteger('organization_id');
            $table->string('event_name',100);
            $table->string('event_description',400);
            $table->date('event_date');
            $table->string('event_location',100);
            $table->double('lat',20,10);
            $table->double('lng',20,10);
            $table->time('event_time_from');
            $table->time('event_time_to');
            $table->bigInteger('volunteers_number');
            $table->string('volunteers_rules_event');
            $table->string('transportation_method');
            $table->string('contact_name');
            $table->string('contatct_position');
            $table->string('contact_email');
            $table->bigInteger('contact_number');
            $table->bigInteger('approved')->default(0);
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
    }
}
