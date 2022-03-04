<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('numReserve')->unique();
            $table->integer('user_id')->unsigned();
            $table->string('immatriculation');
            $table->string('type_reservation');
            $table->string('date_depart');
            $table->string('date-retour');
            $table->timestamps();
        });

       Schema::table('reservations', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('immatriculation')->references('immatriculation')->on('voitures');
       });

    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
