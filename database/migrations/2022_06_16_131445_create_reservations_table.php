<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_plan_id')->unsigned();
            $table->integer('route_id')->unsigned();
            $table->foreign('user_plan_id')->references('id')->on('user_plans');
            $table->foreign("route_id")->references('id')->on('routes');
            $table->integer('track_id')->nullable();
            $table->timestamp('reservation_start')->nullable();
            $table->timestamp('reservation_end')->nullable();
            $table->integer("route_stop_origin_id");
            $table->integer('route_stop_destination_id');
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
        Schema::dropIfExists('reservations');
    }
}
