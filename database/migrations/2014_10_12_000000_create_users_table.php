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
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->string("first_name");
            $table->string("last_name")->nullable();
            $table->string("phone_number")->nullable();
            $table->string("picture")->nullable();
            $table->timestamp('last_online')->nullable();
            $table->string("verification_code")->nullable();
            $table->string("new_email")->nullable();
            $table->integer("status");
            $table->boolean('first');
            $table->timestamp('last_accept_date')->nullable();
            $table->timestamp('created')->nullable();
            $table->timestamp('modified')->nullable();
            $table->string('company_contact')->nullable();
            $table->double('credits')->nullable();
            $table->boolean('first_trip');
            $table->boolean('incomplete_profile');
		    $table->boolean('phone_verify');
            $table->string('token_auto_login')->nullable();
            $table->string('user_vertical')->nullable();
		    $table->integer("language_id")->nullable();
            $table->boolean('no_registered');
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
        Schema::dropIfExists('users');
    }
}
