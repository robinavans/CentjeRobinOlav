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
        Schema::create('betaalverzoekens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Userid');
            $table->string('name');
            $table->string('description');
            $table->integer('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('betaalverzoekens');
    }
}
