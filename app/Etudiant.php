<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public  $fillable=['nom','prenom','dateDeNaissance','lieuDeNaissance','numtel','numCarteEtudiant','email','sexe','departement_id','anneeDetude','adresse','niveau'];


}
