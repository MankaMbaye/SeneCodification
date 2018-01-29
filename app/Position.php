<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Position extends Model

{


    public $fillable = ['numPosition','batiment_id','etage_id','chambre_id'];


}