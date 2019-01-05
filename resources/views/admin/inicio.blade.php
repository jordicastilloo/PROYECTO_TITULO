@extends('admin.layout')

@section('content')
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Escritorio
            <small>Inicio</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Escritorio</li>
          </ol>
        </section>
<h1>Bienvenido</h1>
<h3>¿Qué desea hacer?</h3>
  <br>
<!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Inscribir</h3>

              <p>Inscribir nuevo socio</p>
            </div>
            <div class="icon">
              <i class="fas fa-user"></i>
            </div>
            <a href="#" data-toggle="modal" data-target="#myModal" title="Inscribir"  class="small-box-footer">Inscribir <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          @include('admin.inscripcion.inscripcionmodal')
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Planes</h3>
              <p>Ingresar/Modificar</p>
            </div>
            <div class="icon">
              <i class="fas fa-clipboard"></i>
            </div>
            <a href="/planes" class="small-box-footer">Listar <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Implementos </h3>
              <p>Registrar/Listar</p>
            </div>
            <div class="icon">
              <i class="fas fa-dumbbell"></i>
            </div>
            <a href="/implementos" class="small-box-footer">Listar <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Progreso </h3>
              <p>Registrar evaluación física</p>
            </div>
            <div class="icon">
              <i class="fas fa-walking"></i>
            </div>
            <a href="#" data-toggle="modal" data-target="#Modal1" title="Ingresar"  class="small-box-footer">Ingresar <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          @include('admin.progreso.progresomodal')
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->


<!--
<select class="js-example-basic-single" name="state">
  <option value="AL">Alabama</option>
    ...
  <option value="WY">Wyoming</option>
</select>
<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="..." alt="...">
       Clientes
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="..." alt="...">
      Staff
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="..." alt="...">
      Planes
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="..." alt="...">
      Rutinas
    </a>
  </div>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>

-->
@endsection