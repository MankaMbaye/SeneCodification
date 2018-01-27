@extends('layouts.homelayout')

@section('headtitle')
    <a class="navbar-brand" href="#"><i class="fa fa-edit"></i> Dévis</a>
@endsection

@section('contenu')

    <a href="/creerdevis">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="purple">
                    <i class="fa fa-edit"></i>
                </div>
                <div class="card-content">
                    {{-- <p class="category">Used Space</p> --}}
                    <h3 class="title">Créer un nouveau dévis</h3>
                </div>
                <div class="card-footer">
                    {{-- <div class="stats">
                    <i class="material-icons text-danger">warning</i> <a href="#pablo">Get More Space...</a>
                </div> --}}
                </div>
            </div>
        </div>
    </a>
    <a href="/genererfacture">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="blue">
                    <i class="fa fa-clone"></i>
                </div>
                <div class="card-content">
                    {{-- <p class="category">Used Space</p> --}}
                    <h3 class="title">Facture à partir d'un dévis</h3>
                </div>
                <div class="card-footer">
                    {{-- <div class="stats">
                    <i class="material-icons text-danger">warning</i> <a href="#pablo">Get More Space...</a>
                </div> --}}
                </div>
            </div>
        </div>
    </a>
    <a href="/voirdevis">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="orange">
                    <i class="fa fa-eye"></i>
                </div>
                <div class="card-content">
                    {{-- <p class="category">Used Space</p> --}}
                    <h3 class="title">Afficher vos dévis</h3>
                </div>
                <div class="card-footer">
                    {{-- <div class="stats">
                    <i class="material-icons text-danger">warning</i> <a href="#pablo">Get More Space...</a>
                </div> --}}
                </div>
            </div>
        </div>
    </a>
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.link').removeClass('active');
        $('.devis').addClass('active');
    });
    </script>

@endsection
