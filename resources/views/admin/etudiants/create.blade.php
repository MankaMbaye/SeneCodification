@extends('layouts.index')


@section('content')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Create New Etudiant</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('etudiant.index') }}"> Back</a>

            </div>

        </div>

    </div>


    @if (count($errors) > 0)

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    {!! Form::open(array('route' => 'etudiant.store','method'=>'POST')) !!}

    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nom:</strong>

                {!! Form::text('nom', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Prenom:</strong>

                {!! Form::text('prenom', null, array('placeholder' => 'Prenom','class' => 'form-control')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Prenom:</strong>

                {!! Form::text('numtel', null, array('placeholder' => 'Telephone','class' => 'form-control')) !!}

            </div>

        </div>  



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Date de naissance:</strong>

                {!! Form::date('dateDeNaissance', null, array('placeholder' => 'Date de naissance','class' => 'form-control')) !!}

            </div>

        </div>  

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Lieu de naissance:</strong>

                {!! Form::text('lieuDeNaissance', null, array('placeholder' => 'Lieu de naissance','class' => 'form-control')) !!}

            </div>

        </div> 



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Sexe:</strong>

                {!! Form::text('sexe', null, array('placeholder' => 'sexe','class' => 'form-control')) !!}

            </div>

        </div> 

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Numero carte etudiant:</strong>

                {!! Form::text('numCarteEtudiant', null, array('placeholder' => 'Numero carte etudiant','class' => 'form-control')) !!}

            </div>

        </div> 

         


      
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nom Departement:</strong>

                 
                

                       <select class="form-control m-bot15" name="departement_id">
                        @if($departements->count() > 0)
                          @foreach($departements as $departement)
                          <option value="{{$departement->id}}">{{$departement->id}}</option>
                         @endForeach
                        @else
                          No Record Found
                        @endif   
                    </select>
            

            </div>

        </div>


         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Annee d'etude:</strong>

                {!! Form::text('anneeDetude', null, array('placeholder' => 'Annee Etude','class' => 'form-control')) !!}

            </div>

        </div> 


       


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>


    </div>

    {!! Form::close() !!}


@endsection