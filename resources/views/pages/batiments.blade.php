@extends('layouts.homelayout')

@section('headtitle')
    <a class="navbar-brand" href="#"><i class="fa fa-users"></i> Batiments</a>
@endsection

@section('contenu')

    <h3>Gérer vos batiments</h3>

    <div class="col-md-12" id="clients">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Liste des batiments</h4>
                <p class="category">Tableau de gestion des batiments</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table">
                    <thead class="text-primary">
                    	<tr>
                            <th>Nom Batiment</th>
                        	<th>Nombre de chambres</th>
                        	<th>Nombre de couloirs</th>
    						<th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        	<td><input type="text" name="nomBatiment" class="form-control" value="" v-model="input.nomBatiment" ref="edit" placeholder="Nom Batiment"></td>
                        	<td><input type="number" name="nbChambres" class="form-control" value="" v-model="input.nbChambres" placeholder="Nombre Chambres"></td>
                        	<td><input type="number" name="nbCouloirs" class="form-control" value="" v-model="input.nbCouloirs" placeholder="Nombre de couloirs"></td>
							<td><button type="button" name="choicebtn" @click="addBatiment()" class="btn btn-info btn-sm"><i class="fa fa-plus-circle"></i></button></td>
                        </tr>
                        <tr v-for="(batiment, index) in batiments">
                        	<td>@{{ batiment.nomBatiment }}</td>
                        	<td>@{{ batiment.nbChambres }}</td>
                        	<td>@{{ batiment.nbCouloirs }}</td>
							<td><button type="button" name="choicebtn" @click="edit(index)" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></td>
							<td><button type="button" name="choicebtn" @click="del(index)" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./js/vue.js"></script>
    <script type="text/javascript" src="./js/jquery.min.js"></script>

    <script type="text/javascript">
    var vm = new Vue({
        el: '#clients',
        data: {
            batiments: [
                { nomBatiment: "A", nbChambres: "25", nbCouloirs: '3' },
                { nomBatiment: "B", nbChambres: "28", nbCouloirs: '4' },
                { nomBatiment: "A", nbChambres: "23", nbCouloirs: '6' },
                { nomBatiment: "C", nbChambres: "28", nbCouloirs: '8' }
            ],
            input: {nomBatiment: "", nbChambres: "", nbCouloirs: ""}
        },
        methods: {
            addBatiment: function() {
                if (this.input.nomBatiment == "" || this.input.nbChambres == "") {

                }else {
                    if (this.input.nbCouloirs == "") {
                        this.input.nbCouloirs = "Veuillez entrer le nombre de couloirs";
                    }
                    this.batiments.push(this.input);
                    this.input = {nomBatiment: "", nbChambres: "", nbCouloirs: ""};
                    this.batiments.sort(order);
                }
            },
            edit: function(index) {
                this.input = this.batiments[index];
                this.batiments.splice(index,1);
                this.$refs.edit.focus();
                this.batiments.sort(order);
            },
            del: function(index) {
                this.batiments.splice(index,1);
                this.batiments.sort(order);
            }
        }
    });
    var order = function (a, b) {
        return (a.nom.toUpperCase() > b.nom.toUpperCase())
    };

    $(document).ready(function() {
        $('.link').removeClass('active');
        $('.batiments').addClass('active');
    });
    </script>
@endsection
