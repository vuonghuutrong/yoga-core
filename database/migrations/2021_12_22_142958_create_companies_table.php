<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('site_code')->nullable();
            $table->string('site_name')->nullable();
            $table->integer('terminal_number')->nullable();
            $table->integer('terminals_used_number')->nullable();
            $table->float('company_purchase_rate')->nullable();
            $table->string('initial_cost')->nullable();
            $table->string('monthly_cost')->nullable();
            $table->string('settlement_fee')->nullable();
            $table->string('sales_processing_fee')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('fax')->nullable();
            $table->string('representative')->nullable();
            $table->string('representative_birthday')->nullable();
            $table->string('person_in_charge')->nullable();
            $table->string('person_in_charge_contact')->nullable();
            $table->string('person_in_charge_email')->nullable();
            $table->string('sales_contact')->nullable();
            $table->string('sales_email')->nullable();
            $table->string('usage_start_date')->nullable();
            $table->string('updated')->nullable();
            $table->unsignedBigInteger('last_updated_person')->nullable();
            $table->foreign('last_updated_person')->references('id')->on('users');
            $table->string('cancellation_date')->nullable();
            $table->string('status')->nullable();
            $table->string('permanent_store')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
