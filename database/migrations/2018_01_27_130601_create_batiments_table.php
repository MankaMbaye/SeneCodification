<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batiments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');

            
            $table->date('datecreation');
           
            $table->integer('contraintesexe_id')->unsigned();
            $table->foreign('contraintesexe_id')->references('id')->on('contraintesexes')->onDelete('cascade');

            $table->integer('nbrePlaceRestantes');

            $table->integer('contrainteformation_id')->unsigned();
            $table->foreign('contrainteformation_id')->references('id')->on('contrainteformations')->onDelete('cascade');

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
        Schema::dropIfExists('batiments');
    }
}
