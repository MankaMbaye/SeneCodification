<!DOCTYPE html>
<html>
<head>
  <title> Qury Builder </title>
 
</head>

<body>
 <h1> View All </h1>

 <table>

 	<thead>

 		<tr>

 			<th>Nom </th>
 			<th> Prenom </th>
 			<th> Date de naissance</th>

 			<th> Lieu de naissance</th>
 			<th> Numero Telephone</th>
 			<th> Sexe</th>

 			<th> Numero carte etudiant</th>
 			<th> Departement</th>
 			<th>Annee d'etude </th>





 		</tr>





 	</thead>

 	<tbody>
 		
 		@foreach($datas as $data)
               
        <td>{{ $data->nom }}</td>

        <td>{{ $data->prenom}}</td>

        <td>{{ $data->dateDeNaissance }}</td>

        <td>{{ $data->lieuDeNaissance }} </td>

        <td> {{ $data->numtel }} </td>

        <td> {{ $data->sexe }}  </td>

        <td> {{ $data->numCarteEtudiant }}  </td>

        <td> {{ $data->departement_id }} </td>

        <td> {{ $data->anneeDetude }} </td>
 		@endforeach

 	</tbody>



 </table>

<p>max: {{$max}}</p>

<p>min: {{$min}}</p>



 <h1> View Sexe </h1>

 <table>

 	<thead>

 		<tr>

 			<th>Nom </th>
 			<th> Prenom </th>
 			<th> Date de naissance</th>

 			<th> Lieu de naissance</th>
 			<th> Numero Telephone</th>
 			<th> Sexe</th>

 			<th> Numero carte etudiant</th>
 			<th> Departement</th>
 			<th>Annee d'etude </th>





 		</tr>





 	</thead>

 	<tbody>
 		
 		@foreach($whereSexe as $data)
               
        <td>{{ $data->nom }}</td>

        <td>{{ $data->prenom}}</td>

        <td>{{ $data->dateDeNaissance }}</td>

        <td>{{ $data->lieuDeNaissance }} </td>

        <td> {{ $data->numtel }} </td>

        <td> {{ $data->sexe }}  </td>

        <td> {{ $data->numCarteEtudiant }}  </td>

        <td> {{ $data->departement_id }} </td>

        <td> {{ $data->anneeDetude }} </td>
 		@endforeach

 	</tbody>



 </table>









 <h1> View Niveau </h1>

 <table>

 	<thead>

 		<tr>

 			<th>Nom </th>
 			<th> Prenom </th>
 			<th> Date de naissance</th>

 			<th> Lieu de naissance</th>
 			<th> Numero Telephone</th>
 			<th> Sexe</th>

 			<th> Numero carte etudiant</th>
 			<th> Departement</th>
 			<th>Annee d'etude </th>





 		</tr>





 	</thead>

 	<tbody>
 		
 		@foreach($whereNiveau as $data)
               
        <td>{{ $data->nom }}</td>

        <td>{{ $data->prenom}}</td>

        <td>{{ $data->dateDeNaissance }}</td>

        <td>{{ $data->lieuDeNaissance }} </td>

        <td> {{ $data->numtel }} </td>

        <td> {{ $data->sexe }}  </td>

        <td> {{ $data->numCarteEtudiant }}  </td>

        <td> {{ $data->departement_id }} </td>

        <td> {{ $data->anneeDetude }} </td>

 		@endforeach


 	</tbody>



 </table>



 <h1> View Departement </h1>

 <table>

 	<thead>

 		<tr>

 			<th>Nom </th>
 			<th> Prenom </th>
 			<th> Date de naissance</th>

 			<th> Lieu de naissance</th>
 			<th> Numero Telephone</th>
 			<th> Sexe</th>

 			<th> Numero carte etudiant</th>
 			<th> Departement</th>
 			<th>Annee d'etude </th>





 		</tr>





 	</thead>

 	<tbody>
 		
 		@foreach($whereDept as $data)
               
        <td>{{ $data->nom }}</td>

        <td>{{ $data->prenom}}</td>

        <td>{{ $data->dateDeNaissance }}</td>

        <td>{{ $data->lieuDeNaissance }} </td>

        <td> {{ $data->numtel }} </td>

        <td> {{ $data->sexe }}  </td>

        <td> {{ $data->numCarteEtudiant }}  </td>

        <td> {{ $data->departement_id }} </td>

        <td> {{ $data->anneeDetude }} </td>

 		@endforeach


 	</tbody>



 </table>

























 <h1> where </h1>

 <p>{{ $where->nom  }}  </p>

 <p> {{ $where->prenom  }} </p>

  <p>{{ $where->dateDeNaissance }}</p>

        <p>{{ $where->lieuDeNaissance }} </p>

        <p> {{ $where->numtel }} </p>

        <p> {{ $where->sexe }}  </p>

        <p> {{ $where->numCarteEtudiant }}  </p>

        <p> {{ $where->departement_id }} </p>

        <p> {{ $where->anneeDetude }} </p>










</body>
</html>

