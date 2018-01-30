<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouloirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couloirs', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('valeur');
            $table->integer('nbreChambres');

            $table->integer('contrainteformation_id')->unsigned();
            $table->foreign('contrainteformation_id')->references('id')->on('contrainteformations')->onDelete('cascade');

            $table->integer('contrainteniveau_id')->unsigned();
            $table->foreign('contrainteniveau_id')->references('id')->on('contraintes')->onDelete('cascade');

            $table->integer('batiment_id')->unsigned();
            $table->foreign('batiment_id')->references('id')->on('batiments')->onDelete('cascade');

            $table->integer('etage_id')->unsigned();
            $table->foreign('etage_id')->references('id')->on('etages')->onDelete('cascade');


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
        Schema::dropIfExists('couloirs');
    }
}
