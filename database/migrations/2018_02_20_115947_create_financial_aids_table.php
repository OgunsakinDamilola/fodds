<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialAidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_aids', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('financial_aid_type_id')->nullable();
            $table->string('amount_requested')->nullable();
            $table->integer('term')->nullable();
            $table->text('purpose_of_financing')->nullable();
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
        Schema::dropIfExists('financial_aids');
    }
}
