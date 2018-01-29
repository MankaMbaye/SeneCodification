@extends('layouts.homelayout')

 

@section('contenu')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Etages CRUD</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('etage.create') }}"> Create New Etage</a>

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

            <th>Numero Etage</th>

            <th>Nom Batiment</th>

            <th>Nombre de chambres</th>

         <th> Contrainte Niveau </th>
        
          <th> Contrainte Formation </th>

          <th> Contrainte Sexe </th>


            <th width="33%">Action</th>

        </tr>

    @foreach ($etages as $etage)

    <tr>

        <td>{{ $etage->numeroEtage }}</td>

        <td>{{ $etage->batiment_nom }}</td>

        <td>{{ $etage->nbreChambres }}</td>
        <td>{{$etage->contrainte_valeur}} </td>
        <td>{{$etage->contrainteformation_valeur}} </td>
       <td>{{$etage->contraintesexe_valeur}} </td>

        <td>

            <a class="btn btn-info" href="{{ route('etage.show',$etage->id) }}">Show</a>

            <a class="btn btn-primary" href="{{ route('etage.edit',$etage->id) }}">Edit</a>

            {!! Form::open(['method' => 'DELETE','route' => ['etage.destroy', $etage->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

        </td>

    </tr>

    @endforeach

    </table>


   


@endsection