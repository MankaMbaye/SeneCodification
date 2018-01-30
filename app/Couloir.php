<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Couloir extends Model
{
    protected $fillable=['valeur','nbreChambres','batiment_id','etage_id','contrainteniveau_id','contrainteformation_id'];
}
