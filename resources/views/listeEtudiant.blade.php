


@extends('layouts.index')

@section('content')

<div class="panel-body">
<table class="table">
<tr>
<th> Nom </th>
<th> Departement </th>
<th> Prenom </th>
<th> Date de naissance </th>
<th> Email </th>
</tr>
@foreach($etudiants as $etudiant)
 <tr>
    <td>{{$etudiant->nom}} </td>
    <td>{{$etudiant->departement}} </td>

    <td>{{$etudiant->prenom}} </td>
    <td>{{$etudiant->dateDeNaissance }} </td>
    <td>{{$etudiant->email}} </td>
    
 </tr>

@endforeach
{{ link_to_route('batiment.create', 'Add new batiment',null,['class'=>'btn btn-primary']) }}

</table>
 


</div>



@endsection
