@extends('layouts.index')

 

@section('content')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Etudiant</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('etudiant.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nom:</strong>

                {{ $etudiant->nom }}

            </div>

        </div>


         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Prenom:</strong>

                {{ $etudiant->prenom }}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>NumTEl:</strong>

                {{ $etudiant->numtel }}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Sexe:</strong>

                {{ $etudiant->sexe }}

            </div>

        </div>


      


    </div>


@endsection