@extends('layouts.homelayout')

 

@section('contenu')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Gestion des Chambres </h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('chambre.create') }}"> Ajouter une Chambre</a>

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

            <th> Contrainte Niveau </th>
            <th> Contrainte Formation </th>
            <th> Contrainte Sexe </th>


            <th width="33%">Action</th>

        </tr>

    @foreach ($chambres as $chambre)

    <tr>

        <td>{{ $chambre->numeroChambre }}</td>

        <td> {{ $chambre->capacite  }} </td>

        <td>{{ $chambre->batiment_nom }}</td>

        <td>{{ $chambre->etage_id }}</td>

        <td>{{$chambre->contrainte_valeur}} </td>
        <td>{{$chambre->contrainteformation_valeur}} </td>
        <td>{{$chambre->contraintesexe_valeur}} </td>

        <td>

            <a class="btn btn-info" href="{{ route('chambre.show',$chambre->id) }}">Afficher</a>

            <a class="btn btn-primary" href="{{ route('chambre.edit',$chambre->id) }}">Modifier</a>

            {!! Form::open(['method' => 'DELETE','route' => ['chambre.destroy', $chambre->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

        </td>

    </tr>

    @endforeach

    </table>


   


@endsection