@extends('layouts.homelayout')

 

@section('contenu')



    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Batiment</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('batiment.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="row">

         @foreach($batiCompts as $batiCompt)
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nom:</strong>

                {{ $batiCompt->nom }}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Date de creation:</strong>

                {{ $batiCompt->datecreation }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Formation:</strong>

                {{$batiCompt->contrainteformation_valeur}}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Sexe:</strong>

                {{$batiCompt->contraintesexe_valeur}}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Niveau:</strong>

                {{$batiCompt->contrainte_valeur}} 

            </div>

        </div>
@endforeach

    </div>


@endsection