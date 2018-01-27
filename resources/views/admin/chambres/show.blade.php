@extends('layouts.homelayout')

 

@section('contenu')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Chambre</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('chambre.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Numero Chambre:</strong>

                {{ $chambre->numeroChambre }}

            </div>

        </div>


         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Capacite:</strong>

                {{ $chambre->capacite }}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nom Batiment:</strong>

                {{ $chambre->batiment_id }}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Numero Etage:</strong>

                {{ $chambre->etage_id }}

            </div>

        </div>


      


    </div>


@endsection