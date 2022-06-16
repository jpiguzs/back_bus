<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes_data', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('route_id')->unsigned();
            $table->integer('calendar_id')->unsigned();
            $table->foreign("route_id")->references('id')->on("routes");
            $table->foreign("calendar_id")->references('id')->on("calendar");
            $table->string("vinculation_route")->nullable();
		    $table->boolean("route_circular");
            $table->timestamp("date_init");
            $table->timestamp("date_finish");
            $table->boolean("mon"); 
            $table->boolean("tue");
            $table->boolean("wed");
            $table->boolean("thu");
            $table->boolean("fri");
            $table->boolean("sat");
            $table->boolean("sun");     
	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes_data');
    }
}
