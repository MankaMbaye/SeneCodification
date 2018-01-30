@extends('layouts.homelayout')

 

@section('contenu')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Changer l'Etat de la Codification</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('opencodif.index') }}"> Retour </a>

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


    {!! Form::model($opencodif, ['method' => 'PATCH','route' => ['opencodif.update', $opencodif->id]]) !!}

    <div class="row">




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


    {!! Form::open(array('route' => 'opencodif.store','method'=>'POST')) !!}

    <div class="row">




      <div class="col-md-4">

            <div class="form-group">

                <strong>Annee en cours: </strong>

                {!! Form::text('annee', null, array('placeholder' => 'Annee courante','class' => 'form-control','style'=>'height:100px')) !!}

            </div>

      </div>


       <div class="col-md-4">

            <div class="form-group">

                <strong>Date d'ouverture: </strong>

                {!! Form::date('dateouverture', null, array('placeholder' => 'Date Ouverture','class' => 'form-control','style'=>'height:100px')) !!}

            </div>

        </div>

      <div class="col-md-4">

            <div class="form-group">

                <strong>Date de fermeture:</strong>

                {!! Form::date('datefermeture', null, array('placeholder' => 'Date Fermeture','class' => 'form-control','style'=>'height:100px')) !!}

            </div>

      </div>


        

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>


    </div>

    {!! Form::close() !!}


@endsection