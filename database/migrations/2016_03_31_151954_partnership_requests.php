<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PartnershipRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('partnership_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('oranization_id');
            $table->string('project_name',100);
            $table->string('partnership_project',400);
            $table->string('project_location',100);
            $table->double('lat',20,10);
            $table->double('lng',20,10);
            $table->string('project_description',100);
            $table->bigInteger('individuals_effected_number');
            $table->string('area_of_partnership',100);
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
