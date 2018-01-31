@extends('layouts.index')

 

@section('content')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Reservations</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('reservation.create') }}"> Faire une reservation </a>

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
<th> Nom Batiment </th>
<th> Numero Etage </th>
<th> Couloir </th>
<th> Numero Chambre </th>
<th> Position </th>
<th width="33%"> Etudiants deja reserves </th>
<th width="33%"> Action </th>
</tr>
@foreach($reservations as $reservation)
 <tr>
    <td>{{$reservation->batiment_nom}}</td>
    <td>{{$reservation->etage_id}} </td>
    <td>{{$reservation->valcouloir_valeur}} </td>
    <td>{{$reservation->chambre_numeroChambre}} </td>
    <td>{{$reservation->position_id}}</td>


    <td> 
        <ol>
    	<li>{{$reservation->etudiant_prenom}} {{$reservation->etudiant_nom}}</li>

        </ol> 



    </td>

    <td>

        <a class="btn btn-info" href="{{ route('reservation.edit',$reservation->id) }}">Confirmer</a>

        {!! Form::open(['method' => 'DELETE','route' => ['reservation.destroy', $reservation->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Annuler', ['class' => 'btn btn-danger']) !!}

        {!! Form::close() !!}



    </td>
 </tr>

@endforeach



</table>
 

@endsection
