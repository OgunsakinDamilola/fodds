<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferenceInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reference_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('financial_aid_id');
            $table->string('name');
            $table->longText('address');
            $table->string('phone_number');
            $table->string('email');
            $table->string('profession');
            $table->longText('office_address');
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
        Schema::dropIfExists('reference_informations');
    }
}
