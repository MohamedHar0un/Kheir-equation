<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->text('bio')->nullable();
            $table->string('slogan', 50)->nullable();
            $table->string('phone', 11)->nullable();
            $table->string('location', 100)->nullable();
<<<<<<< HEAD
            $table->double('rate', 15, 8)->nullable();
            $table->string('organization_img', 100)->nullable();
=======
            $table->double('rating', 15, 8)->nullable();
>>>>>>> 84b4cc714923c0d8f93c4b39193932af3b0bec56
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('organizations');
    }
}
