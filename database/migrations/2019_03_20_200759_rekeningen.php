<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rekeningen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekeningen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rekeningnummer');
            $table->decimal('vermogen');
/*           $table->rememberToken();
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
        Schema::dropIfExists('rekeningen');

        //
    }
}
