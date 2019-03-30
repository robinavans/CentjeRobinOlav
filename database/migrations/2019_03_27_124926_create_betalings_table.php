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
            $table->integer('Verzoekid')->nullable();
            $table->integer('Personid')->nullable();
            $table->string('Paymentstatus')->nullable();
            $table->string('Paymentid')->nullable();
            $table->string('Notities')->nullable();
            $table->date('Datum')->nullable();        });
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
