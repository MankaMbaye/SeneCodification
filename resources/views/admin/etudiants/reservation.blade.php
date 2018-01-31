@extends('layouts.index')


@section('content')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Réservation</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('etudiant.index') }}"> Retour</a>

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

                <strong>Pavillon:</strong>

                {!! Form::text('nom', null, array('placeholder' => 'Pavillon','class' => 'form-control')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Etage:</strong>

                {!! Form::text('Etage', null, array('placeholder' => 'Etage','class' => 'form-control')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Couloir:</strong>

                {!! Form::text('Couloir', null, array('placeholder' => 'couloir','class' => 'form-control')) !!}

            </div>

        </div>  

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Chambre:</strong>

                {!! Form::text('Chambre', null, array('placeholder' => 'chambre','class' => 'form-control')) !!}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Position:</strong>

                {!! Form::text('Position', null, array('placeholder' => 'position','class' => 'form-control')) !!}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Réserver</button>

        </div>


    </div>

    {!! Form::close() !!}


@endsection