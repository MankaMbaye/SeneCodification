@extends('layouts.homelayout')

@section('headtitle')
    <a class="navbar-brand" href="#"><i class="fa fa-users"></i> Chambres</a>
@endsection

@section('contenu')

    <h3>Gérer vos chambres</h3>

    <div class="col-md-12" id="clients">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Liste des chambres</h4>
                <p class="category">Tableau de gestion des chambres</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <tr>
                            <th>Numero Chambre</th>
                            <th>Nom Pavillon</th>
                            <th>Site</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="numChambre" class="form-control" value="" v-model="input.numChambre" ref="edit" placeholder="Numero Chambre"></td>
                            <td><input type="text" name="nomBatiment" class="form-control" value="" v-model="input.nomBatiment" placeholder="Nom Batiment"></td>
                            <td><input type="text" name="site" class="form-control" value="" v-model="input.site" placeholder="Site"></td>
                            <td><button type="button" name="choicebtn" @click="addChambre()" class="btn btn-info btn-sm"><i class="fa fa-plus-circle"></i></button></td>
                        </tr>
                        <tr v-for="(chambre, index) in chambres">
                            <td>@{{ chambre.numChambre }}</td>
                            <td>@{{ chambre.nomBatiment }}</td>
                            <td>@{{ chambre.site }}</td>
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
            chambres: [
                { numChambre: "42", nomBatiment: "C", site: 'ESP' },
                { numChambre: "50", nomBatiment: "A", site: 'UCAD' },
                { numChambre: "37", nomBatiment: "F", site: 'ESP' },
                { numChambre: "50", nomBatiment: "B", site: 'UCAD' }
            ],
            input: {numChambre: "", nomBatiment: "", site: ""}
        },
        methods: {
            addChambre: function() {
                if (this.input.numChambre == "" || this.input.nomBatiment == "") {

                }else {
                    if (this.input.site == "") {
                        this.input.site = "Veuillez entrer un site";
                    }
                    this.chambres.push(this.input);
                    this.input = {numChambre: "", nomBatiment: "", site: ""};
                    this.chambres.sort(order);
                }
            },
            edit: function(index) {
                this.input = this.chambres[index];
                this.chambres.splice(index,1);
                this.$refs.edit.focus();
                this.chambres.sort(order);
            },
            del: function(index) {
                this.chambres.splice(index,1);
                this.chambres.sort(order);
            }
        }
    });
    var order = function (a, b) {
        return (a.nom.toUpperCase() > b.nom.toUpperCase())
    };

    $(document).ready(function() {
        $('.link').removeClass('active');
        $('.chambres').addClass('active');
    });
    </script>
@endsection





