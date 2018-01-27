@extends('layouts.index')

@section('headtitle')
    <a class="navbar-brand" href="#"><i class="fa fa-home"></i> Accueil</a>
@endsection
@section('content')
   
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Batiment A [Nombre de chambres restantes]
    <span class="badge badge-primary badge-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
     Batiment B [Nombre de chambres restantes]
    <span class="badge badge-primary badge-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
     Batiment C [Nombre de chambres restantes]
    <span class="badge badge-primary badge-pill">1</span>
  </li>

  <li class="list-group-item d-flex justify-content-between align-items-center">
     Batiment F [Nombre de chambres restantes]
    <span class="badge badge-primary badge-pill">25</span>
  </li>


 </ul>

@endsection
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.link').removeClass('active');
    $('.home').addClass('active');
});
</script>
