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
        
        @foreach($chambreCompts as $chambreCompt)

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Numero Chambre:</strong>

                {{ $chambreCompt->numeroChambre }}

            </div>

        </div>


         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Capacite:</strong>

                {{ $chambreCompt->capacite }}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">


               
                <strong>Nom Batiment:</strong>

                {{ $chambreCompt->batiment_nom }}

            </div>

        </div>






         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Numero Etage:</strong>

                {{ $chambreCompt->etage_numeroEtage }}

            </div>

        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Formation:</strong>

                {{$chambreCompt->contrainteformation_valeur}}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Sexe:</strong>

                {{$chambreCompt->contraintesexe_valeur}}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Niveau:</strong>

                {{$chambreCompt->contrainte_valeur}} 

            </div>

        </div>


      
@endforeach

    </div>


@endsection