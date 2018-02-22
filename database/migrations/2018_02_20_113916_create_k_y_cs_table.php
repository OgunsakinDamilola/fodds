<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKYCsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k_y_cs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('financial_aid_id');
            $table->integer('title_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('address');
            $table->integer('designation_id');
            $table->string('date_of_birth');
            $table->integer('tax_identification_number')->nullable();
            $table->string('residential_address');
            $table->string('phone');
            $table->string('email');
            $table->integer('identity_type_id');
            $table->string('identity_number');
            $table->string('issue_date');
            $table->string('expiry_date');
            $table->string('passport_photo_path');
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
        Schema::dropIfExists('k_y_cs');
    }
}
