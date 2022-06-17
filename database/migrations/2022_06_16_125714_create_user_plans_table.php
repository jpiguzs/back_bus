<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('currency_id');
            $table->integer('next_user_plan_id')->nullable();
            $table->timestamp('start_timestamp')->nullable();
            $table->timestamp('end_timestamp')->nullable();
            $table->timestamp("renewal_timestamp")->nullable();
            $table->double('renewal_price');
            $table->boolean('requires_invoice');
            $table->integer('status');
            $table->timestamp('created')->nullable();
            $table->timestamp('modified')->nullable();
            $table->integer('financiation');
            $table->integer('status_financiation');
            $table->string('language');
		    $table->string('nif')->nullable();
            $table->string('business_name')->nullable();
            $table->boolean('pending_payment');
            $table->date('date_max_payment')->nullable();
            $table->timestamp('proxim_start_timestamp')->nullable();
            $table->timestamp("proxim_end_timestamp")->nullable();
            $table->timestamp("proxim_renewal_timestamp")->nullable();
            $table->double('proxim_renewal_price')->nullable();
            $table->double('credits_return')->nullable();
            $table->integer('company_id');
            $table->boolean('cancel_employee');
            $table->boolean('force_renovation');
            $table->date('date_canceled')->nullable();
            $table->double('amount_confirm_canceled')->nullable();
            $table->double('credit_confirm_canceled')->nullable();
            $table->integer('cost_center_id');
		
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_plans');
    }
}
