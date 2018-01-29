@extends('layouts.homelayout')

 

@section('contenu')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Positions CRUD</h2>

            </div>

            <div class="pull-right">
               
                <a class="btn btn-success" class="fa fa-plus" href="{{ route('position.create') }}"> 
                Create New Position
            </a>

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

            <th>Numero Position</th>

            <th>Nom Batiment</th>

            <th>Numero Etage</th>

            <th>Numero Chambre </th>

            <th> Contrainte Niveau </th>
        
            <th> Contrainte Formation </th>

            <th width="33%">Action</th>

        </tr>

    @foreach ($positions as $position)

    <tr>

        <td>{{ $position->numPosition }}</td>

        <td>{{ $position->batiment_nom }}</td>

        <td>{{ $position->etage_id }}</td>

        <td>{{ $position->chambre_id }}</td>

        <td>{{$position->contrainte_valeur}} </td>

        <td>{{$position->contrainteformation_valeur}} </td>


        <td>

            <a class="btn btn-info" href="{{ route('position.show',$position->id) }}">Show</a>

            <a class="btn btn-primary" href="{{ route('position.edit',$position->id) }}">Edit</a>

            {!! Form::open(['method' => 'DELETE','route' => ['position.destroy', $position->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

        </td>

    </tr>

    @endforeach

    </table>


   


@endsection