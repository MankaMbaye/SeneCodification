<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numeroEtage')->unique();
            $table->integer('nbreChambres');

            

            $table->integer('nbrePlaceRestantes');

            $table->integer('batiment_id')->unsigned();
            $table->foreign('batiment_id')->references('id')->on('batiments')->onDelete('cascade');


            $table->integer('contrainteformation_id')->unsigned();
            $table->foreign('contrainteformation_id')->references('id')->on('contrainteformations')->onDelete('cascade');

            $table->integer('contraintesexe_id')->unsigned();
            $table->foreign('contraintesexe_id')->references('id')->on('contraintesexes')->onDelete('cascade');


            $table->integer('contrainteniveau_id')->unsigned();
            $table->foreign('contrainteniveau_id')->references('id')->on('contraintes')->onDelete('cascade');
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
        Schema::dropIfExists('etages');
    }
}
