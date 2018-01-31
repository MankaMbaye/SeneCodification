<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable=['batiment_id','etage_id','couloir_id','position_id','chambre_id','etudiant_id'];
}
