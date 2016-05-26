<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FundraisingRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('fundraising_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('oranization_id');
            $table->string('project_name',100);
            $table->string('project_description',400);
            $table->string('project_location',100);
            $table->double('lat',20,10);
            $table->double('lng',20,10);
            $table->date('project_date');
            $table->time('project_time_from');
            $table->time('project_time_to');
            $table->bigInteger('individuals_effected_number');
            $table->bigInteger('budget_required');
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
