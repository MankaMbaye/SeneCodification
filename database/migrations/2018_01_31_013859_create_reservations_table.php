<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('chambre_id')->unsigned();
            $table->foreign('chambre_id')->references('id')->on('chambres')->onDelete('cascade');
            $table->integer('etage_id')->unsigned();
            $table->foreign('etage_id')->references('id')->on('etages')->onDelete('cascade');
            $table->integer('batiment_id')->unsigned();
            $table->foreign('batiment_id')->references('id')->on('batiments')->onDelete('cascade');
            $table->integer('couloir_id')->unsigned();
            $table->foreign('couloir_id')->references('id')->on('couloirs')->onDelete('cascade');
            $table->integer('position_id')->unsigned();
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');
            $table->integer('etudiant_id')->unsigned();
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');



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
        Schema::dropIfExists('reservations');
    }
}
