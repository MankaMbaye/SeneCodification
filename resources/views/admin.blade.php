@extends('layouts.homelayout')

@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                    You are logged in as <strong>ADMIN</strong>
                </div>
            </div>
        </div>
    </div>
</div>

   <a href="{{url('admin/batiment')}}">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="purple">
                    <i class="fa fa-edit"></i>
                </div>
                <div class="card-content">
                    {{-- <p class="category">Used Space</p> --}}
                    <h3 class="title">Créer un nouveau batiment</h3>
                </div>
                <div class="card-footer">
                    {{-- <div class="stats">
                    <i class="material-icons text-danger">warning</i> <a href="#pablo">Get More Space...</a>
                </div> --}}
                </div>
            </div>
        </div>
    </a>


     <a href="{{url('admin/etage')}}">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="purple">
                    <i class="fa fa-edit"></i>
                </div>
                <div class="card-content">
                    {{-- <p class="category">Used Space</p> --}}
                    <h3 class="title">Créer une nouvelle etage</h3>
                </div>
                <div class="card-footer">
                    {{-- <div class="stats">
                    <i class="material-icons text-danger">warning</i> <a href="#pablo">Get More Space...</a>
                </div> --}}
                </div>
            </div>
        </div>
    </a>

     <a href="{{url('admin/couloir')}}">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="purple">
                    <i class="fa fa-edit"></i>
                </div>
                <div class="card-content">
                    {{-- <p class="category">Used Space</p> --}}
                    <h3 class="title">Créer un nouveau couloir</h3>
                </div>
                <div class="card-footer">
                    {{-- <div class="stats">
                    <i class="material-icons text-danger">warning</i> <a href="#pablo">Get More Space...</a>
                </div> --}}
                </div>
            </div>
        </div>
    </a>


     <a href="{{url('admin/chambre')}}">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="purple">
                    <i class="fa fa-edit"></i>
                </div>
                <div class="card-content">
                    {{-- <p class="category">Used Space</p> --}}
                    <h3 class="title">Créer une  nouvelle chambre</h3>
                </div>
                <div class="card-footer">
                    {{-- <div class="stats">
                    <i class="material-icons text-danger">warning</i> <a href="#pablo">Get More Space...</a>
                </div> --}}
                </div>
            </div>
        </div>
    </a>


     <a href="{{url('admin/position')}}">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="purple">
                    <i class="fa fa-edit"></i>
                </div>
                <div class="card-content">
                    {{-- <p class="category">Used Space</p> --}}
                    <h3 class="title">Créer une  nouvelle position</h3>
                </div>
                <div class="card-footer">
                    {{-- <div class="stats">
                    <i class="material-icons text-danger">warning</i> <a href="#pablo">Get More Space...</a>
                </div> --}}
                </div>
            </div>
        </div>
    </a>


     <a href="{{url('admin/opencodif')}}">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="purple">
                    <i class="fa fa-edit"></i>
                </div>
                <div class="card-content">
                    {{-- <p class="category">Used Space</p> --}}
                    <h3 class="title">Ouvrir / Fermer Codification</h3>
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
        $('.accueil').addClass('active');
    });
    </script>

@endsection