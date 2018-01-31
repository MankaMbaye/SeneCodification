@extends('layouts.index')

 

@section('content')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Confirmation reservation</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('reservation.index') }}"> Retour</a>

            </div>

        </div>

    </div>

   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif


    {!! Form::model($reservation, ['method' => 'PATCH','route' => ['reservation.update', $reservation->id]]) !!}

      <div class="row">





        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nom Batiment:</strong>

                 
                

                       <select class="form-control m-bot15" name="batiment_id" disabled="true">
                        @if($batiments->count() > 0)
                          @foreach($batiments as $batiment)
                          <option value="{{$batiment->id}}">{{$batiment->nom}}</option>
                         @endForeach
                        @else
                          No Record Found
                        @endif   
                    </select>
            

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Numero Etage:</strong>

                 
                

                       <select class="form-control m-bot15" name="etage_id" disabled="true">
                        @if($etages->count() > 0)
                          @foreach($etages as $etage)
                          <option value="{{$etage->id}}">{{$etage->numeroEtage}}</option>
                         @endForeach
                        @else
                          No Record Found
                        @endif   
                    </select>
            

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Couloir: </strong>

                       <select class="form-control m-bot15" name="couloir_id" disabled="true">
                        @if($valcouloirs->count() > 0)
                          @foreach($valcouloirs as $valcouloir)
                          <option value="{{$valcouloir->id}}">{{$valcouloir->valeur}}</option>
                         @endForeach
                        @else
                          No Record Found
                        @endif   
                    </select>
            

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Numero Chambre:</strong>

                    <select class="form-control m-bot15" name="chambre_id" disabled="true">
                        @if($chambres->count() > 0)
                          @foreach($chambres as $chambre)
                          <option value="{{$chambre->id}}">{{$chambre->numeroChambre}}</option>
                         @endForeach
                        @else
                          No Record Found
                        @endif   
                    </select>
            

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Numero Position:</strong>

                    <select class="form-control m-bot15" name="position_id" disabled="true">
                        @if($positions->count() > 0)
                          @foreach($positions as $position)
                          <option value="{{$position->id}}">{{$position->numPosition}}</option>
                         @endForeach
                        @else
                          No Record Found
                        @endif   
                    </select>
            

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Numero carte etudiant:</strong>

                {!! Form::text('etudiant_id', null, array('placeholder' => 'Numero carte etudiant','class' => 'form-control','disabled'=>'true')) !!}

            </div>

        </div>
       


    
   

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Confirmer</button>

        </div>


    </div>

    {!! Form::close() !!}


@endsection