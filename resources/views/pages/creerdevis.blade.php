@extends('layouts.homelayout')
@section('headtitle')
    <a class="navbar-brand" href="#"><i class="fa fa-edit"></i> Dévis</a>
@endsection
@section('content')
    <h3>Création de dévis</h3>
    <div id="appdevis">
        <div class="col-md-12 devis-form hidden">
            <div class="card">
                <div class="card-header" data-background-color="green">
                    <button type="button" name="button" class="btn btn-primary pull-right" @click="backToListOfClients">Liste des Clients</button>
                    <h4 class="title">Dévis</h4>
                    <p class="category">Veuillez éditer votre dévis !</p>
                </div>
                <div class="card-content table-responsive">
                    <div class="col-md-7">
                        <b>Emetteur</b><br>
                        Prénom et nom : @if(!Auth::guest()) {{ Auth::user()->name}}<br>
                        Email :  {{Auth::user()->email}} @endif<br>
                        N° Téléphone: 77 770 70 70
                    </div>
                    <div class="col-md-5">
                        <b>Destinataire</b><br>
                        Prénom et nom :  @{{ selected.nom }} <br>
                        Email : @{{ selected.email }}  <br>
                        N° Téléphone: @{{ selected.phone }}
                    </div>
                    <div class="col-md-4 col-md-offset-5">
                        <h3>Devis N° @{{ numdevis }}</h3>
                    </div>
                    <table class="table">
                        <thead class="text-primary">
                          <!-- // Type Produit/Service","Description", "Prix unitaire", "Quantite","TVA", "Action" -->
                            <tr>
                                <th>Produit/Service</th>
                                <th>Description</th>
                                <th>Prix unitaire</th>
                                <th>Quantite</th>
                                <th>TVA</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="" class="form-control" v-model="inputDevis.libelleType" placeholder="Service ou produit" value=""></td>
                                <td><input type="text" name="" class="form-control" v-model="inputDevis.description" placeholder="Description" value=""></td>
                                <td><input type="number" name="" class="form-control" v-model="inputDevis.prixUnitaire" placeholder="Prix unitaire" value=""></td>
                                <td><input type="number" name="" class="form-control" v-model="inputDevis.quantite" placeholder="Quantite"value=""></td>
                                <td><input type="number" name="" class="form-control" v-model="inputDevis.tva" placeholder="TVA" value=""></td>
                                <td><button type="button" class="btn btn-sm btn-success" @click="addDevisItem"name="button"><i class="fa fa-plus-circle"></i></button></td>
                            </tr>
                            <tr v-for="(item, index) in devisItems" v-if="item.quantite != 0">
                                <td>@{{ item.description }}</td>
                                <td>@{{ item.prixUnitaire }}</td>
                                <td>@{{ item.quantite }}</td>
                                <td>@{{ item.tva }}</td>
                            </tr>
                            <tr>
                                <td colspan="5"></td>
                                <td><button type="button" class="btn btn-success" @click="pdf()" name="button"><i class="material-icons">save</i> Enregistrer</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12 client">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Liste de clients</h4>
                    <p class="category">Veuillez selectionner un client pour le dévis !</p>
                </div>
                <div class="card-content table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <tr>
                                <th>Prénom et Nom</th>
                                <th>Adresse email</th>
                                <th>Numéro de téléphone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="nom" class="form-control" value="" v-model="inputClient.nom" ref="edit" placeholder="Prénom et Nom"></td>
                                <td><input type="email" name="email" class="form-control" value="" v-model="inputClient.email" placeholder="Adresse email"></td>
                                <td><input type="text" name="phone" class="form-control" value="" v-model="inputClient.phone" placeholder="N° Téléphone"></td>
                                <td><button type="button" name="choicebtn" @click="addClient()" class="btn btn-info btn-sm"><i class="fa fa-plus-circle"></i></button></td>
                            </tr>
                            <tr v-for="(client, index) in clients">
                                <td>@{{ client.nom }}</td>
                                <td>@{{ client.email }}</td>
                                <td>@{{ client.phone }}</td>
                                <td><button type="button" name="choicebtn" @click="select(index)" class="btn btn-success btn-sm"><i class="fa fa-check"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./js/vue.js"></script>
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
    <Script src = " https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.2/jspdf.plugin.autotable.js " > </script >
    <script type="text/javascript">
    var vm = new Vue({
        el: '#appdevis',
        data: {
            clients: [
                { nom: "Djiby Djeng", email: "djiby.djeng@gmail.com", phone: '76 745 77 91' },
                { nom: "Ababacar Haidara", email: "ababacar@gmail.com", phone: '77 803 54 23' },
                { nom: "Omar NIANG", email: "omzodollar@gmail.com", phone: '78 966 73 12' },
                { nom: "Papa Manka MBAYE", email: "ledeveloppeur@gmail.com", phone: '77 701 65 21' }
            ],
            inputClient: {nom: "", email: "", phone: ""},
            selected: { nom: "", email: "", phone: '' },
            devisItems: [
                    { libelleType: "", description: "", prixUnitaire: 0, quantite: 0, tva: 0 }
            ],
            inputDevis: {libelleType: "", description: "", prixUnitaire: 0, quantite: 0, tva: 0},
            numdevis: "AJ10001",
        },
        methods: {
            addClient: function() {
                if (this.input.nom == "" || this.input.email == "") {

                }else {
                    if (this.input.phone == "") {
                        this.input.phone = "Pas de numéro";
                    }
                    this.clients.push(this.input);
                    this.input = {nom: "", email: "", phone: ""};
                    this.clients.sort(order);
                }
            },
            select: function(index) {
                this.selected = this.clients[index];
                toggleFormDevis();
                toggleList();
            },
            addDevisItem : function() {
                if (this.inputDevis.libelleType == "" || this.inputDevis.quantite == 0 ) {

                }else {
                    this.devisItems.push(this.inputDevis);
                    this.inputDevis = {libelleType: "", description: "", prixUnitaire: 0, quantite: 0, tva: 0};
                }
            },
            backToListOfClients: function() {
                toggleFormDevis();
                toggleList();
            },
          pdf: function () {
            var columns = [ "Type Produit/Service","Description", "Prix unitaire", "Quantite","TVA"];
            var rows =[
                    [this.inputDevis.libelleType,this.inputDevis.description,this.inputDevis.prixUnitaire,this.inputDevis.quantite,this.inputDevis.tva],
            ];
 // Only pt supported (not mm or in)
            var doc = new jsPDF('p', 'pt');
            //la Date
          //  var date = new Date(year, month, day, hour, minutes, seconds, milliseconds);
            var today = new Date();
            doc.setFontSize(18);
            doc.setFontType("bold");
            doc.text(300, 20, "SenFacturation", 'center');
            doc.setFontSize(11);
            doc.text(35, 90, 'Devis: '+this.numdevis, null, null);
            doc.text(35, 150, 'Emetteur: ', null, null );
            doc.text(325, 150, 'Destinataire', null, null);
            //doc.text(35, 550, 'Conditions: ', null, null);
            doc.text(420, 380, 'Total HT: ', null, null);
            doc.text(420, 400, 'TVA(%) : '+this.inputDevis.tva, null, null );
            doc.text(420, 420, 'Total TC: ', null, null);
            //var imgData =
            doc.setFontSize(11);
            doc.setFont("courier");
            doc.setFontStyle("normal");
            doc.text(35, 110, 'Date: '+today.toLocaleString(), null, null);
            doc.text(35, 170, 'Société: MADE', null, null);
            doc.text(35, 190, 'Nom: ', null, null);
            doc.text(35, 210, 'Adresse: ', null, null);
            doc.text(35, 230, 'N°telephone: ', null, null);
            doc.text(35, 250, 'Adresse mail: ', null, null);
            doc.setFont("courier");
            doc.setFontStyle("normal");
            doc.text(325, 170, 'Nom: ', null, null );
            doc.text(325, 190, 'Adresse: ', null, null);
            doc.text(325, 210, 'N°telephone: ', null, null);
            doc.text(325, 230, 'Adresse mail: ', null, null);
            //doc.addImage(imgData, 'JPEG', 530, 5, 50, 50);
            doc.autoTable(columns, rows, {
                margin : {top : 300 }

            });

            doc.setFontSize(11);
            doc.setFont("courier");
            doc.setFontStyle("normal");
            doc.setFontType("bold");
            //doc.text(35, 570, 'Condition de jugement: ', null, null );
            doc.text(35, 480, 'Mode de réglement: ', null, null);
            doc.setFontStyle("normal");
            doc.text(180, 480, 'Espèces', null, null);
            doc.save('table.pdf');
            this.inputDevis = {libelleType: "", description: "", prixUnitaire: 0, quantite: 0, tva: 0};

              }
        }

    });
    var order = function (a, b) {
        return (a.nom.toUpperCase() > b.nom.toUpperCase())
    };
    $(document).ready(function() {
        $('.link').removeClass('active');
        $('.devis').addClass('active');
    });
    function toggleFormDevis() {
        $('.devis-form').toggleClass('hidden');
    }
    function toggleList() {
        $('.client').toggleClass('hidden');
    }

    </script>
@endsection
