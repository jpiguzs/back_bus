<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string("external_id");
            $table->string("external_budget_id");
            $table->string('external_route_id');
            $table->foreign("external_route_id")->references('external_id')->on("routes");
            $table->string('track_id')->nullable();
            $table->string("name")->nullable();
            $table->string("notes")->nullable();
            $table->timestamp("timestamp");
		    $table->string("arrival_address");
		    $table->timestamp("arrival_timestamp");
            $table->string("departure_address");
            $table->timestamp("departure_timestamp");
            $table->integer("capacity");
            $table->integer("confirmed_pax_count");
		    $table->timestamp("reported_departure_timestamp")->nullable();
            $table->double("reported_departure_kms")->nullable();
            $table->timestamp("reported_arrival_timestamp")->nullable();
		    $table->double("reported_arrival_kms")->nullable();
            $table->string("reported_vehicle_plate_number")->nullable();
		    $table->integer("status");
            $table->string("status_info");
            $table->integer("reprocess_status");
            $table->integer("return");
            $table->timestamp("created");
            $table->timestamp("modified");
            $table->string("synchronized_downstream")->nullable();
            $table->string("synchronized_upstream")->nullable();
            $table->integer("province_id");
            $table->integer("sale_tickets_drivers");
            $table->string("notes_drivers")->nullable();
            $table->longText("itinerary_drivers");
            $table->integer("cost_if_externalized")->nullable();
            $table->timestamps();
		
	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
