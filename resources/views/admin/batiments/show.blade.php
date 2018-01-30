@extends('layouts.homelayout')

 

@section('contenu')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Afficher Batiment</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('batiment.index') }}"> Retour</a>

            </div>

        </div>

    </div>


    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nom:</strong>

                {{ $batiment->nom }}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Date de creation:</strong>

                {{ $batiment->datecreation }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Formation:</strong>

                {{$batiment->contrainteformation_valeur}}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Sexe:</strong>

                {{$batiment->contraintesexe_valeur}}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Niveau:</strong>

                {{$batiment->contrainte_valeur}} 

            </div>

        </div>


    </div>


@endsection