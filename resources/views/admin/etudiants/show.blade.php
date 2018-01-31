@extends('layouts.index')

 

@section('content')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Propositions </h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('etudiant.index') }}">Retour</a>

            </div>

        </div>

    </div>


    


    <table class="table table-bordered">

        <tr>

            <th>Nom </th>

            <th>Prenom </th>

            <th>Departement</th>

            <th> Reservation </th>

         

        </tr>

    @foreach ($etuDepts as $etuDept)

    <tr>

        <td>{{ $etuDept->nom }}</td>

        <td>{{ $etuDept->prenom}}</td>

        <td>{{ $etuDept->adresse }}</td>

         <td>

            <a class="btn btn-info" href="{{ route('reservation.create',$etudiant->id) }}">Reserver avec lui</a>

           
        </td>


    </tr>

    @endforeach

    </table>



    <script type="text/javascript">
   <!--
        function traductionElements()
        {
        popup = window.open('', 'popup', 'height=400, width=400');
        popup.document.write('<form action="?" method="post">');
        popup.document.write('<label for="nom">Nom: </label>')
        popup.document.write('<input type="text" placeholder="Nom">');
        popup.document.write('<div><input type="submit" value="Valider" /></div>');
        popup.document.write('</form>');
        }

         titre=document.createElement("h1");
     titre.appendChild(document.createTextNode("formulaire"));
     traduction=document.createElement("input");
     traduction.setAttribute("type", "text");
     traduction.setAttribute("name", "traduction");
     traduction.setAttribute("value", "...");
     envoyer=document.createElement("input");
     envoyer.setAttribute("type", "submit");
     envoyer.setAttribute("name", "submit");
     envoyer.setAttribute("value", "Submit");    
     form=document.createElement("form");
     form.setAttribute("name", "TraductionElementForm");
     form.setAttribute("method", "POST");
     form.setAttribute("action", "/TraductionElement.do");
     form.appendChild(titre);
     form.appendChild(traduction);
     form.appendChild(envoyer);
     div=document.createElement("div");
     div.appendChild(form);
     document.getElementById("test").appendChild(div);
        
        </script>

        <a href="javascript:traductionElements();">Cliquez ici</a>


@endsection