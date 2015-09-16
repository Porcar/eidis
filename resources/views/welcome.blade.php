<html lang="en">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Sistema EIDIS</title>

    <!-- Bootstrap Core CSS -->

    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/grayscale.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Inicio</span> Sistema EIDIS
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Sobre</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Clases</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contactos</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav btn2 btn-default2">
                <li>
                    <a class="page-scroll" href="{{ route('home.index') }}">Entrar</a>
                </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Sistema EIDIS</h1>
                        <p class="intro-text">Bienvenido al Sistema EIDIS<br>de La Facultad de Ingenería en Universidad de Los Andes.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
      <div class="container">
      @foreach( $subjects as $subject )
        <div class="row carousel-row">
              <div class="col-xs-12 slide-row">
                  <div id="carousel-1" class="carousel slide slide-carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                          <img src="http://lorempixel.com/150/150?rand=1" alt="Image">
                      </div>
                    </div>
                  </div>
                  <div class="slide-content">
                      <h4>{{ $subject->name }}</h4>
                      <p>
                          {{ $subject->description }}
                      </p>
                  </div>
                  <div class="slide-footer">
                      <span class="pull-right buttons">


                          {!! Form::open(['class' => 'form-inline', 'method' => 'DELETE', 'route'=>['subjects.destroy', $subject->id]]) !!}
                          <a href="{{route('subjects.show',$subject->id)}}" class="btn btn-sm btn-default"><i class="fa fa-fw fa-eye"></i> Ver</a>
                          {!! Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) !!}
                          {!! Form::close() !!}
                      </span>
                  </div>
              </div>
        </div>
        @endforeach
        <div class="col-xs-12 col-xs-offset-5">
        <a href="{{route('subjects.create')}}" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i> Añadir Materia  </a>
      </div></div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Clases</h2>
                    <p>El contenido de las clases es totalmente libre para todos.</p>
                    <p>Puedes acceder al mismo a través del siguente enlace</p>
                    <a href="{{route('projects.show')}}" class="btn btn-default btn-lg">Contenido Teórico</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contacto</h2>
                <p>Eres libre de escribir un correo a </p>
                <p><a href="mailto:manuel@ula.ve">manuel@ula.ve</a>
                </p>

                <p>Por las redes sociales </p>

                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <!--<div id="map"></div>-->

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Universidad de Los Andes</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('/js/jquery.easing.min.js') }}"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('/js/grayscale.js') }}"></script>

</body>

</html>
