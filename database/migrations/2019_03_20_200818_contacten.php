<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contacten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacten', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('rekeningnummer');
            $table->decimal('bedrag');
/*            $table->rememberToken();
            $table->timestamps();*/
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacten');

        //
    }
}
