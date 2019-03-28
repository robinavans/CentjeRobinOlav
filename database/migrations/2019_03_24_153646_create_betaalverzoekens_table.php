<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetaalverzoekensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('betaal_verzoekens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Userid');
            $table->integer('Rekeningid');
            $table->string('name');
            $table->string('description');
            $table->integer('amount');
            $table->integer('amountpaid');
            $table->string('valuta');
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
        Schema::dropIfExists('betaal_verzoekens');
    }
}
