@extends('app')

@section('htmlheader_title')
    Inicio
@endsection

@section('contentheader_title')
@endsection

@section('main-content')

<div class="row">

  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>Completado<sup style="font-size: 20px"></sup></h3>
        <p>Actividades Completadas</p>
      </div>
      <div class="icon">
        <i class="fa fa-check"></i>
      </div>
      <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->
  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>Pendiente</h3>
        <p>Actividades Pendientes</p>
      </div>
      <div class="icon">
        <i class="fa  fa-clock-o"></i>
      </div>
      <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->
</div>

<div class="row">
  <div class="col-lg-6 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>Proyecto</h3>
          <p>Nombre</p>
        </div>
        <div class="icon">
          <i class="fa fa-pencil"></i>
        </div>
        <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->

  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3>Urgente</h3>
        <p>Actividades urgentes</p>
      </div>
      <div class="icon">
        <i class="fa fa-warning"></i>
      </div>
      <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->

</div><!-- /.row -->


<div class="row">
<div class="col-lg-12">


    <div class="box-body">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="hover">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="/img/downloads-bg.jpg" alt="First slide">
            <div class="carousel-caption">
              <h1> Bienvenido a {{ $name }} </h1>
              <h1> Una materia que sigue el sistema EIDIS</h1>
              <h1> De la Facultad de Ingeniería de la ULA</h1>

            </div>
          </div>
          <div class="item">
            <img src="/img/downloads-bg.jpg" alt="Second slide">
            <div class="carousel-caption">
              <h1> En el panel de la izquierda encontrarás</h1>
              <h1> el contenido teórico de la materia</h1>
              <h1> Puedes adelantar si lo deseas.</h1>
            </div>
          </div>
          <div class="item">
            <img src="/img/downloads-bg.jpg" alt="Third slide">
            <div class="carousel-caption">
              <h1> La evaluación, se realiza por diversos métodos:</h1>
              <h1> - Un cuestionario de selección simple</h1>
              <h1> Así probamos los conocimientos básicos sobre el tema.</h1>
            </div>
          </div>
          <div class="item">
            <img src="/img/downloads-bg.jpg" alt="Fourth slide">
            <div class="carousel-caption">
              <h1> - Escritos cortos, como informes ó documentos.</h1>
              <h1> - Diversas actividades prácticas dependientes del tema.</h1>
              <h1> </h1>
            </div>
          </div>
          <div class="item">
            <img src="/img/downloads-bg.jpg" alt="Fift slide">
            <div class="carousel-caption">
              <h1> - Proyectos, los cuales son evaluaciones extensas</h1>
              <h1> con diversos objetivos y actividades</h1>
              <h1> que se extienden durante varios temas</h1>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="fa fa-angle-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="fa fa-angle-right"></span>
        </a>
      </div>
    </div><!-- /.box-body -->

</div><!-- /.col -->
</div><!-- /.row -->




@endsection
