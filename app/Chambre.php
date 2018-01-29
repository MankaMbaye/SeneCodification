<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    protected $fillable=['numeroChambre','capacite','batiment_id','etage_id','contrainte_id','contrainteformation_id','contraintesexe_id'];
}
