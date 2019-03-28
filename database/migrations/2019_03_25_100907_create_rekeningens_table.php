<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekeningensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekeningens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Userid');
            $table->string('Name');
            $table->string('rekeningnummer');
            $table->decimal('vermogen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekeningens');
    }
}
