<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Position extends Model

{


    protected $fillable = ['numPosition','batiment_id','etage_id','chambre_id','nbrePlaceRestantes','contrainteniveau_id','couloir_id','contrainteformation_id'];


}