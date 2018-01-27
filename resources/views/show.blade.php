<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<link rel="stylessheet" href="#">
	<title> Blog </title>
</head>

<body>

<div class="container">
	<h1> Affichage Etudiant </h1>

<div class="panel panel-default">

	<div class="panel-heading">
<h4> {{ $etudiant->nom }} </h4>

<div class="panel-body">


{{ $etudiant->departement }}

{{  $etudiant->prenom }}

{{ $etudiant->dateDeNaissance }}

{{ $etudiant->email }}

</div>



</div>
</body>
</html>