@extends('layouts.homelayout')

 

@section('contenu')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit New Etage</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('etage.index') }}"> Back</a>

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


    {!! Form::model($etage, ['method' => 'PATCH','route' => ['etage.update', $etage->id]]) !!}

    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Numero Etage:</strong>

                {!! Form::text('numeroEtage', null, array('placeholder' => 'Numero Etage','class' => 'form-control')) !!}

            </div>

        </div>


         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nom Batiment:</strong>

                 <select class="form-control m-bot15" name="batiment_id">
                        @if($batiments->count() > 0)
                          @foreach($batiments as $batiment)
                          <option value="{{$batiment->id}}">{{$batiment->nom}}</option>
                         @endforeach
                        @else
                          No Record Found
                        @endif   
                </select>

            </div>

        </div>


         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nombre chambres:</strong>

                {!! Form::text('nbreChambres', null, array('placeholder' => 'Nombre chambres','class' => 'form-control')) !!}

            </div>

        </div>


         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Sexe:</strong>

                 
                

                       <select class="form-control m-bot15" name="contraintesexe_id">
                        @if($contraintesexes->count() > 0)
                          @foreach($contraintesexes as $contraintesexe)
                          <option value="{{$contraintesexe->id}}">{{$contraintesexe->valeur}}</option>
                         @endForeach
                        @else
                          No Record Found
                        @endif   
                    </select>
            

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Niveau:</strong>

                 
                

                       <select class="form-control m-bot15" name="contrainteniveau_id">
                        @if($contraintes->count() > 0)
                          @foreach($contraintes as $contrainte)
                          <option value="{{$contrainte->id}}">{{$contrainte->valeur}}</option>
                         @endForeach
                        @else
                          No Record Found
                        @endif   
                    </select>
            

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contrainte Formations:</strong>

                 
                

                       <select class="form-control m-bot15" name="contrainteformation_id">
                        @if($contrainteformations->count() > 0)
                          @foreach($contrainteformations as $contrainteformation)
                          <option value="{{$contrainteformation->id}}">{{$contrainteformation->valeur}}</option>
                         @endForeach
                        @else
                          No Record Found
                        @endif   
                    </select>
            

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>


    </div>

    {!! Form::close() !!}


@endsection