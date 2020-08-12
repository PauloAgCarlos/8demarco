<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>ZONA ADMINISTRATIVA</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="#212121 grey darken-4">


<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo letf">8 DE MARÇO</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/notas"> notas</a></li>
        <li><a href="/criar_mini_pautas"> pautas</a></li>
        <li><a href="registar_matriculas"> matrículas</a></li>
        <li><a href="/certificados9"> CERTIFICADOS</a></li>
        <li><a href="#"> Horários</a></li>
        <li><a href="../html/anuncios.html"> ANÚNCIOS</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="../html/notasL.html"> notas</a></li>
        <li><a href="../html/pautasL.html"> pautas</a></li>
        <li><a href="../html/matriculasL.html"> matrículas</a></li>
        <li><a href="../html/certificadosL.html"> CERTIFICADOS</a></li>
        <li><a href="../html/EdicaoL.html"> Horários</a></li>
        <li><a href="../html/anuncios.html"> ANÚNCIOS</a></li>
        <li><a href="../html/anuncios.html"> ANÚNCIOS</a></li>
                        
                 
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

<p style="color: white;"> Logado Como: {{ $user->name }} </p>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair da conta') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">PARTE ADMINISTRATIVA</h1>
        
      <div class="row center">
        <h5 class="header col s12 light white-text">A melhor maneira de gerenciar os dados académicos da tua instituição.</h5>
      </div>
      <div class="row center">
        <a href="/" id="download-button" class="btn-large waves-effect waves-light orange">PAGINA INICIAL</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center white-text">VANTAGENS EM UTILIZAR</h5>

            <p class="light white-text"> O sistema de gestão académica fornecido pela D3V-T3CN0, ofere vantagens incríveis dentre elas as seguintes: <br>

              - Capacidade de acessar e trabalhar nas notas em qualquer parte; <br>
              - Ajuda no processo de economização de dinheiro(Facilitando pessoas mais desfavorecidas na questão do táxi); <br>
              - Interação com os professores, trabalhadores administrativos e terceiros em tempo real.
            </p>
          </div>
        </div>
        
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center white-text">INFORMAÇÕES DA INSTITUIÇÃO</h5>

            <p class="light white-text">A "<b> 8 de Março</b>" é uma instituição educativa localizada no bairro tchavola, aproximadamente 500 metros da avenida que dá acesso ao mercado informal "Praça-Nova". Nela encontras uma excelente qualidade de ensino, pós a equipe que a gerencia trabalha arduamente.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center white-text">EQUIPE DESENVOLVEDORA</h5>

            <center> <p class="light"> <h4 class="white-text">D3V-T3CN0</h4></p></center>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>
  <footer class="page-footer light-blue lighten-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">D3V-T3CN0</h5>
          <p class="grey-text white-text">A "D3V-T3CN0" é uma equipe cujo objectivo principal é o desenvolvimento de tecnologias, erradicação da tecnofobia em Angola e o posicionamento das instituições em um óptimo patamar a nível de utilização de tecnologias de ponta</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">MEMBROS DA EQUIPE</h5>
          <ul>
            <li><a class="white-text" href="https://free.facebook.com/jassira.ahtallrabuda?ref_component=mfreebasic_home_header&ref_page=%2Fwap%2Fhome.php&refid=7" target="_blank">JANUÁRIO JACK</a></li>
            <li><a class="white-text" href="https://free.facebook.com/pauloagostinhocarlos.carlos?refid=12">PAULO CARLOS</a></li>
            <li><a class="white-text" href="https://free.facebook.com/lucio.markeyras?refid=12">JOSÉ MARCOS</a></li>
            
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">NOSSOS CONTACTOS</h5>
          <ul>
            <li><a class="white-text" href="https://free.facebook.com/Dev-Tecno-687549928333101/" target="_blank"><i class="material-icons">facebook</i></a></li>
            <li><a class="white-text" href="#!"><i class="material-icons">twitter</i></a></li>
            <li><a class="white-text" href="#!"><i class="material-icons">instagram</i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>



  </body>
</html>
