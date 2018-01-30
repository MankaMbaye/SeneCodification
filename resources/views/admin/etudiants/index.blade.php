@extends('layouts.index')

 

@section('content')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Liste des etudiants qui se sont inscrits</h2>

                <hr>

            </div>

           

        </div>

    </div>

   <hr>
    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif


    <table class="table table-bordered">

        <tr>

            <th>Nom </th>

            <th>Prenom </th>

            <th>Numero Carte Etudiant</th>

            <th> Departement </th>

            <th>Propositions</th>

        </tr>

    @foreach ($etudiants as $etudiant)

    <tr>

        <td>{{ $etudiant->nom }}</td>

        <td>{{ $etudiant->prenom}}</td>

        <td>{{ $etudiant->numCarteEtudiant }}</td>

        <td>    {{ $etudiant->departement_nom }}                       </td>

        <td>

            <a class="btn btn-info" href="{{ route('etudiant.show',$etudiant->id) }}">Voir Propositions</a>

           
        </td>

    </tr>

    @endforeach

    </table>


   


@endsection