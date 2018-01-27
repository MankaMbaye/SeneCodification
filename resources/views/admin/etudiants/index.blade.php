@extends('layouts.index')

 

@section('content')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Etudiants CRUD</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('etudiant.create') }}"> Create New Etudiant</a>

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

            <th>Nom </th>

            <th>Prenom </th>

            <th>Departement</th>

            <th>Action</th>

        </tr>

    @foreach ($etudiants as $etudiant)

    <tr>

        <td>{{ $etudiant->nom }}</td>

        <td>{{ $etudiant->prenom}}</td>

        <td>{{ $etudiant->departement_id }}</td>

        <td>

            <a class="btn btn-info" href="{{ route('etudiant.show',$etudiant->id) }}">Show</a>

            <a class="btn btn-primary" href="{{ route('etudiant.edit',$etudiant->id) }}">Edit</a>

            {!! Form::open(['method' => 'DELETE','route' => ['etudiant.destroy', $etudiant->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

        </td>

    </tr>

    @endforeach

    </table>


   


@endsection