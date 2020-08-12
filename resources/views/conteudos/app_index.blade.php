@extends('layouts.app')

@section('conteudo')
 
 <br> 
<main role="main">
<div class="container mb-2">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagens/marco.jpg" class="img-fluid d-block">
          <div class="carousel-caption text-left">
            <h3>Publicação mais recente</h3> 
            <p> A direção do Complexo Escolar nº 705 "8 de Março" vem por meio deste comunicar a todos os professores da mesma instituição que está 
              marcada a primeira reunião de carácter obrigatório que terá lugar na sala dos professores no dia 7 de Outubro.
              Com o intuito de descutir normas e regras da escola.</p>
            <p><a class="btn btn-lg btn-primary" href="html/publicacao.html" role="button">ver mais detalhes</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <img src="imagens/marco2.jpg" class="img-fluid d-block">
          <div class="carousel-caption text-left">
            
            <p><a class="btn btn-lg btn-primary" href="html/publicacao.html" role="button">ver mais detalhes</a></p>
          </div>
        </div>
        <div class="carousel-item ">
          <img src="imagens/marco3.jpg" class="img-fluid d-block">
            <div class="carousel-caption text-left"> 
              <p><a class="btn btn-lg btn-primary" href="html/publicacao.html" role="button">ver mais detalhes</a></p>
            </div>
          </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Avançar</span>
    </a>
  </div>
</div>


  <!-- Marketing -->

  <div class="container marketing">

    <!-- Informações irrelevantes -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Vantagens Em Utilizar</h2>
        <p>O sistema de gestão académica fornecido pela D3V-T3CN0, oferece vantagens incríveis dentre elas as seguintes: <br>              - Capacidade de acessar e trabalhar nas notas em qualquer parte; <br>
          - Ajuda no processo de economização de dinheiro(Facilitando pessoas mais desfavorecidas na questão do táxi); <br>
          - Interação com os professores, trabalhadores administrativos e terceiros em tempo real.
        </p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Informações da Instituição</h2>
        <p>é uma instituição educativa localizada no bairro tchavola, aproximadamente 500 metros da avenida que dá acesso ao mercado informal "Praça-Nova". Nela encontras uma excelente qualidade de ensino, pós a equipe que a gerencia trabalha arduamente.</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Equipe Desenvolvedora</h2>
        <p>A "D3V-T3CN0" é uma equipe cujo objectivo principal é o desenvolvimento de tecnologias, erradicação da tecnofobia em Angola e o posicionamento das instituições em um óptimo patamar a nível de utilização de tecnologias de ponta</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

  <footer class="footer mt-auto py-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5>D3V-T3CN0</h5>
          <p>A "D3V-T3CN0" é uma equipe cujo objectivo principal é o desenvolvimento de tecnologias, erradicação da tecnofobia em Angola e o posicionamento das instituições em um óptimo patamar a nível de utilização de tecnologias de ponta</p></div>
        <div class="col l3 s12">
          <h5 class="white-text">MEMBROS DA EQUIPE</h5>
          <ul class="none-decoration">
            <li><a href="https://free.facebook.com/jassira.ahtallrabuda?ref_component=mfreebasic_home_header&ref_page=%2Fwap%2Fhome.php&refid=7" target="_blank">JANUÁRIO JACK</a></li>
            <li><a href="https://free.facebook.com/pauloagostinhocarlos.carlos?refid=12">PAULO CARLOS</a></li>
            <li><a href="https://free.facebook.com/lucio.markeyras?refid=12">JOSÉ MARCOS</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">NOSSOS CONTACTOS</h5>
          <ul class="none-decoration">
            <li><a href="https://free.facebook.com/Dev-Tecno-687549928333101/" target="_blank"><i class="material-icons">facebook</i></a></li>
            <li><a href="#!"><i class="material-icons">twitter</i></a></li>
            <li><a href="#!"><i class="material-icons">instagram</i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer text-center">
      <div class="container"><hr>
      <p class="center">O que desejas ser amanhã, depende de tudo que fazes hoje....</p>
      </div><hr>
    </div>
  </footer>
</main>

@endsection