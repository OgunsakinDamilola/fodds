<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('financial_aid_id');
            $table->string('name_of_business');
            $table->string('business_type');
            $table->string('certificate_of_registration_number');
            $table->string('date_of_registration');
            $table->integer('number_of_year_in_existence');
            $table->integer('tax_identification_number');
            $table->string('nature_of_business');
            $table->longText('business_address');
            $table->string('phone_number');
            $table->string('email_address');
            $table->integer('number_of_staff');
            $table->integer('owner_partner');
            $table->integer('number_of_official_equipment_with_value_above_100000');
            $table->integer('total_sum_of_official_equipment_with_value_above_100000');
            $table->bigInteger('last_financial_year_turn_over');
            $table->bigInteger('last_financial_year_profit');
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
        Schema::dropIfExists('business_details');
    }
}
