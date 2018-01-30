
@extends('layouts.index')


@section('content')

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




























