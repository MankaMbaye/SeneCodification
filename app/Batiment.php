<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batiment extends Model
{
    protected $fillable=['nom','datecreation','contraintesexe_id','contrainteniveau_id','contrainteformation_id','nbrePlaceRestantes'];
}
