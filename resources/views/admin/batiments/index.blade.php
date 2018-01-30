@extends('layouts.homelayout')

 

@section('contenu')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Gestion des batiments</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('batiment.create') }}"> Create New Batiment</a>

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
<th> Nom </th>
<th> Date de creation </th>
<th> Contrainte Niveau </th>
<th> Contrainte Formation </th>
<th> Contrainte Sexe </th>
<th width="33%"> Actions </th>
</tr>
@foreach($batiments as $batiment)
 <tr>
    <td>{{$batiment->nom}} </td>
    <td>{{$batiment->datecreation}} </td>
    <td>{{$batiment->contrainte_valeur}} </td>
    <td>{{$batiment->contrainteformation_valeur}} </td>
    <td>{{$batiment->contraintesexe_valeur}} </td>


    <td> 

    	<a class="btn btn-info" href="{{ route('batiment.show',$batiment->id) }}">Show</a>

        <a class="btn btn-primary" href="{{ route('batiment.edit',$batiment->id) }}">Edit</a>

            {!! Form::open(['method' => 'DELETE','route' => ['batiment.destroy', $batiment->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}



    </td>
 </tr>

@endforeach



</table>
 

@endsection
