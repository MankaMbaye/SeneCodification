@extends('layouts.homelayout')

@section('contenu')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Consulter </h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('opencodif.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Annee:</strong>

                {{ $opencodif->annee }}

            </div>

        </div>


          <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Date d'ouverture:</strong>

                {{ $opencodif->dateouverture }}

            </div>

          </div>

          <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Date de Fermeture:</strong>

                {{ $opencodif->datefermeture }}

            </div>

          </div>



      


    </div>


@endsection