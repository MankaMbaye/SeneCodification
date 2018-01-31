@extends('layouts.homelayout')

 

@section('contenu')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Gestion Codification</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('opencodif.create') }}"> Ouvrir Codification</a>

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

            <th>Annee</th>

            <th> Date d'ouverture </th>

            <th> Date de fermeture </th>

            <th>Action</th>

        </tr>

    @foreach ($opencodifs as $opencodif)

    <tr>

        <td>{{ $opencodif->annee }}</td>

        <td> {{ $opencodif->dateouverture  }} </td>

        <td>{{ $opencodif-> datefermeture }}</td>


        <td>

            <a class="btn btn-info" href="{{ route('opencodif.show',$opencodif->id) }}">Afficher</a>

            <a class="btn btn-primary" href="{{ route('opencodif.edit',$opencodif->id) }}">Modifier</a>

            {!! Form::open(['method' => 'DELETE','route' => ['opencodif.destroy', $opencodif->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

        </td>

    </tr>

    @endforeach

    </table>


   


@endsection