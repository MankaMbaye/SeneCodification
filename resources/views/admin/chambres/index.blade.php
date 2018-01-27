@extends('layouts.homelayout')

 

@section('contenu')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Chambres CRUD</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('chambre.create') }}"> Create New Chambre</a>

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

            <th>Numero Chambre</th>

            <th> Capacite </th>

            <th>Nom Batiment</th>

            <th>Numero Etage</th>

            <th>Action</th>

        </tr>

    @foreach ($chambres as $chambre)

    <tr>

        <td>{{ $chambre->numeroChambre }}</td>

        <td> {{ $chambre->capacite  }} </td>

        <td>{{ $chambre->batiment_id }}</td>

        <td>{{ $chambre->etage_id }}</td>

        <td>

            <a class="btn btn-info" href="{{ route('chambre.show',$chambre->id) }}">Show</a>

            <a class="btn btn-primary" href="{{ route('chambre.edit',$chambre->id) }}">Edit</a>

            {!! Form::open(['method' => 'DELETE','route' => ['chambre.destroy', $chambre->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

        </td>

    </tr>

    @endforeach

    </table>


   


@endsection