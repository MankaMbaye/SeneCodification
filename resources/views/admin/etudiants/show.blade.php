@extends('layouts.index')

 

@section('content')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Propositions </h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('etudiant.index') }}"> Back</a>

            </div>

        </div>

    </div>


    


    <table class="table table-bordered">

        <tr>

            <th>Nom </th>

            <th>Prenom </th>

            <th>Departement</th>

         

        </tr>

    @foreach ($etuDepts as $etuDept)

    <tr>

        <td>{{ $etuDept->nom }}</td>

        <td>{{ $etuDept->prenom}}</td>

        <td>{{ $etuDept->adresse }}</td>


    </tr>

    @endforeach

    </table>


@endsection