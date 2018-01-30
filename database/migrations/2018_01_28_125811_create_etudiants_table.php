<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->date('dateDeNaissance');
            $table->string('lieuDeNaissance');
            $table->string('numtel');
            $table->string('sexe');
            $table->string('adresse');
            $table->string('numCarteEtudiant')->unique();
            $table->integer('departement_id')->unsigned();
            $table->foreign('departement_id')->references('id')->on('departements')->onDelete('cascade');
            $table->string('niveau');
            $table->string('anneeDetude');
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
        Schema::dropIfExists('etudiants');
    }
}
