<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etage extends Model
{
    protected $fillable=['numeroEtage','batiment_id','nbreChambres','contraintesexe_id','contrainteniveau_id','contrainteformation_id','nbrePlaceRestantes'];
}
