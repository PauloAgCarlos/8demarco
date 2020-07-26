@extends('layouts.app')

@section('conteudo')

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">SISTEMA DE GESTÃO ACADÉMICA</h1>
      <div class="row center">
        <h5 class="header col s12 light white-text">A melhor maneira de gerenciar os dados académicos da tua instituição.</h5>
      </div>
     
      <br><br>
      <div class="slider">
        <ul class="slides">
          <li>
            <img src="imagens/marco2.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3 class="#000000 black-text">ALGUMAS FOTOS DA INSTITUIÇÃO</h3>
              <h5 class="#000000 black-text text-lighten-3">ENTRADA OU PASSARELA PRINCIPAL</h5>
            </div>
          </li>
          <li>
            <img src="imagens/marco3.jpg"> <!-- random image -->
            <div class="caption left-align">
              <h3>ALGUMAS FOTOS DA INSTITUIÇÃO</h3>
              <h5 class="light grey-text text-lighten-3">ZONA DESPORTIVA</h5>
            </div>
          </li>
          <li>
            <img src="imagens/marco.jpg"> <!-- publicação -->
            <div class="caption right-align">
              <h3>Publicação recente</h3>
              <h5 class="white-text"><a href="html/publicacao.html"> Ver mais... </a></h5>
            </div>
          </li>
          <li>
            <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
            <div class="caption center-align">
              <h3>D3V-T3CN0</h3>
              <h5 class="light grey-text text-lighten-3">OBRIGADO POR UTILIZAR, ESPERAMOS TER AJUDADO</h5>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </div>

 @include('incl.linha_blocos_informacao')

@endsection