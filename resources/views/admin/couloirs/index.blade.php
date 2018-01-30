@extends('layouts.homelayout')

 

@section('contenu')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Gestion des couloirs </h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('couloir.create') }}"> Create New Couloir</a>

            </div>

        </div>

    </div>


    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif


    <table class="table table-bordered">

        <tr>

            <th>Couloir</th>

            <th> Nombre de chambres </th>

            <th>Nom Batiment</th>

            <th>Numero Etage</th>

            <th> Contrainte Niveau </th>

            <th> Contrainte Formation </th>
           


            <th width="33%">Action</th>

        </tr>

    @foreach ($couloirs as $couloir)

    <tr>

        <td>{{ $couloir->valcouloir_valeur }}</td>

        <td> {{ $couloir->nbreChambres  }} </td>

        <td>{{ $couloir->batiment_nom }}</td>

        <td>{{ $couloir->etage_id }}</td>

        <td>{{ $couloir->contrainte_valeur }} </td>
        
        <td>{{ $couloir->contrainteformation_valeur }} </td>
        

        <td>

          <!--  <a class="btn btn-info" href="{{ route('couloir.show',$couloir->id) }}">Show</a> -->

            <a class="btn btn-primary" href="{{ route('couloir.edit',$couloir->id) }}">Edit</a>

            {!! Form::open(['method' => 'DELETE','route' => ['couloir.destroy', $couloir->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

        </td>

    </tr>

    @endforeach

    </table>


   


@endsection