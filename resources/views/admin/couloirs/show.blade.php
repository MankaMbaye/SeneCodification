@extends('layouts.homelayout')

 

@section('contenu')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Afficher couloir</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('couloir.index') }}"> Retour</a>

            </div>

        </div>

    </div>


    <div class="row">
        
        @foreach($couloirCompts as $couloirCompt)

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Couloir:</strong>

                {{ $couloirCompt->valcouloir_valeur }}

            </div>

        </div>


         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nombre de chambres:</strong>

                {{ $couloirCompt->nbreChambres }}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">


               
                <strong>Nom Batiment:</strong>

                {{ $couloirCompt->batiment_nom }}

            </div>

        </div>






         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Numero Etage:</strong>

                {{ $couloirCompt->etage_numeroEtage }}

            </div>

        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Formation:</strong>

                {{$couloirCompt->contrainteformation_valeur}}

            </div>

        </div>




        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Niveau:</strong>

                {{$couloirCompt->contrainte_valeur}} 

            </div>

        </div>


      
@endforeach

    </div>


@endsection