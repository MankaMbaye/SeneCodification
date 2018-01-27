@extends('layouts.homelayout')

 

@section('contenu')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit New Chambre</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('chambre.index') }}"> Back</a>

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


    {!! Form::model($chambre, ['method' => 'PATCH','route' => ['chambre.update', $chambre->id]]) !!}

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Numero Chambre:</strong>

                {!! Form::text('numeroChambre', null, array('placeholder' => 'Numero Chambre','class' => 'form-control')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Capacite:</strong>

                {!! Form::text('capacite', null, array('placeholder' => 'Capacite','class' => 'form-control')) !!}

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

                <strong>Numero Etage:</strong>

                 
                

                       <select class="form-control m-bot15" name="etage_id">
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


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>


    </div>

    {!! Form::close() !!}


@endsection