@extends('layouts.homelayout')

 

@section('contenu')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Etage</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('etage.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Numero Etage:</strong>

                {{ $etage->numeroEtage }}

            </div>

        </div>



       >


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nom Batiment:</strong>

                {{ $etage->batiment_nom }}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nombre Chambres:</strong>

                {{ $etage->nbreChambres }}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nombre PLaces Restantes:</strong>

                {{ $etage->nbrePlaceRestantes }}

            </div>

        </div>


         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Formation:</strong>

                {{ $etage->contrainteformation_id }}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Sexe:</strong>

                {{ $etage->contraintesexe_id }}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Niveau:</strong>

                {{ $etage->contrainteniveau_id }}

            </div>

        </div>


    </div>


@endsection