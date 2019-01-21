<!DOCTYPE html>
<html lang="pt_br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Estamparia">
    <meta name="author" content="Lucas Carvalho de Oliveira">

    <title>Visão de Águia</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/creative.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="vertical-align: text-bottom;"><img src="{{asset('img/logo_asas.png')}}" width="25px">Visão de Águia</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <img src="{{asset('img/logo_asas.png')}}" width="50px">
            <p>
              <h2 style="text-transform: uppercase;"><strong>Visão de Águia</strong><p>Estamparia</p></h2>
            </p>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="mb-5">Transformando suas ideias em obras de arte!</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Descubra mais sobre nós</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Nós temos exatamente o que você precisa!</h2>
            <hr class="light my-4"><br>
            <p class="text-faded mb-4">Seja para personalizar uma lembrancinha do seu aniversário ou exibir sua banda favorita, nós temos a solução ideal para você! São diversos os diferentes tipos de peças que podem ser personalizadas e o melhor de tudo: é que eles ficam a sua cara!</p><br>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Confira!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">À suas ordens!</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-tshirt text-primary mb-3 sr-icon-1"></i>
              <h3 class="mb-3">Camisetas</h3>
              <p class="text-muted mb-0">Mangas longas, curtas, três quartos ou até mesmo sem. Golas polo, em "v" ou viés. Faça sua escolha e nós a personalizamos.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i><img src="{{asset('img/shorts.png')}}" width="65px" class="text-primary mb-3 sr-icon-2"></i>
              <h3 class="mb-3">Shorts & Bermudas</h3>
              <p class="text-muted mb-0">Você escolhe a forma do cós, se elástico ou reto, a forma de fechar, se cordão, zipper ou velcro, e o mais importante: o estilo perfeito definido por você!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i><img src="{{asset('img/cap.png')}}" width="92px" class="text-primary mb-3 sr-icon-3"></i>
              <h3 class="mb-3">Bonés & Toucas</h3>
              <p class="text-muted mb-0">Temos a disposição para seu negócio toucas de teninha e de amarra, além de diversos modelos de bonés de brinn.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-image text-primary mb-3 sr-icon-4"></i>
              <h3 class="mb-3">Souvenirs & Brindes</h3>
              <p class="text-muted mb-0">Canecas, azuleijos e chaveiros almofada personalizados para lembrar sempre daquele dia inesquecível!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          @foreach ($produtos as $produto)
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{$armazenamento->url($produto->foto)}}">
              <img class="img-fluid" src="{{$armazenamento->url($produto->foto)}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    {{$produto->titulo}}
                  </div>
                  <div class="project-name">
                    {!! $produto->descricao !!}
                  </div>
                </div>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <section id="contact" style="padding: 5rem;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Vamos fechar!?</h2>
            <hr class="my-4">
            <p class="mb-5">Está pronto para transformar sua ideia incrível em uma obra de arte? Excelente! Entre em contato conosco pelo telefone ou envie-nos um e-mail que o retornaremos assim que possível!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>(31) 996 042 323</p>
            <br>
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:visao-de-aguia@gmail.com" >visao-de-aguia@gmail.com</a>
            </p>
          </div>
          <div class="col-lg-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.335316512151!2d-44.333426185084996!3d-19.95239578659125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6d95b849535cd%3A0xebd3a167a630b2ff!2sR.+Dr.+Francisco+de+Assis+Castro%2C+830+-+Sat%C3%A9lite%2C+Juatuba+-+MG%2C+35675-000!5e0!3m2!1spt-BR!2sbr!4v1547756312476" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
          <p class="text-center"><a href="https://www.google.com/maps/place/R.+Dr.+Francisco+de+Assis+Castro,+830+-+Sat%C3%A9lite,+Juatuba+-+MG,+35675-000"><i class="fas fa-map-marked-alt"></i></a> R. Dr. Francisco de Assis Castro, 830 - Satélite, Juatuba - MG.</p>
        </div>
        </div>
      </div>
    </section>

    <section id="footer" class="bg-dark">
      <p align="center" style="color: white;">
        Template by: Start Bootstrap (Clean version)<br>
        Edited by: Lucas C. Oliveira, Alberto Elias, Lorrayne Menezes.<br>
        Departamento de Sistemas Web - SetApp<br>
        Acesso ao <a href="/login">Dashboard</a>.<br>
        Powered by: <img src="{{asset('img/logo-setapp-vector.png')}}" width="30px"> SetApp - UFV
      </p>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('vendor/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/creative.min.js')}}"></script>

  </body>

</html>
