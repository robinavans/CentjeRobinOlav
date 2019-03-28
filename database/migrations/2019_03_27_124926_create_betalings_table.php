<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetalingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('betalings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Verzoekid');
            $table->string('Paymentstatus');
            $table->string('Paymentid');
            $table->string('Notities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('betalings');
    }
}
