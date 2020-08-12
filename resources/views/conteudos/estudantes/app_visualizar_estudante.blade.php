@extends('layouts.app')

@section('conteudo')

 <br><br><br><br>
   
    <div class="caso text-center" style="color: black;">
        <h1> Dados Importantes</h1>

        <p><img src="{{ $estudante -> foto }}" class=" bd-placeholder-img rounded-circle" id="imagem"></p>
           <p>Nome: {{ $estudante -> nome }} </p> 
           <p>Nº de SGA: {{ $estudante -> id }}</p> 
            <p>Data de Nascimento : {{ $estudante -> dataNascimento }}</p> 
            <p>Local de Nascimento: {{ $estudante -> localNascimento }}</p> 
            <p>Nº de BI: {{ $estudante -> numeroBilhete }}</p> 
            <!-- <p>Estado cívil: {{ $estudante -> nome }}</p>  -->
            <p>Data de Emição: {{ $estudante -> dataEmissaoBilhete }}</p> 
            <p>Data de Expiração: {{ $estudante -> dataExpiracaoBilhete}}</p> 
            <p> Sexo: {{ $estudante -> sexo }}</p>
        <h1> Informações Adicionais</h1>

       
        <p>Cidade Onde Mora: {{ $estudante -> morada }}</p> 
        <p>Bairro: {{ $estudante -> bairro }}</p> 
    
    <h1> Informações do Encarregado de Educação</h1>
      <p>Nome: {{ $estudante -> nomeEncarregado }}</p>  
       <p>Nº de Telefone: {{ $estudante -> numeroEncarregado }}</p> 
        <p> Relação com a Criança: {{ $estudante -> relacaoComEncarregado }}</p>
 
    <h1> Dados Acadêmicos</h1>
    <!-- <p>Período: {{ $estudante -> nome }}</p>     -->
    <!-- <p>Turno: {{ $estudante -> nome }}</p>     -->
    <!-- <p> Classe: {{ $estudante -> nome }}</p>    -->
    <!-- <p>Turma: {{ $estudante -> nome }}</p> -->
    <p>Usuário: {{ $usuario -> name }}</p> 
    
    <hr>
   
    <h1> Dados Acadêmicos</h1>
  
    <p>Turno: {{ $matricula-> turno }}</p>    
    <p> Classe: {{ $matricula -> classe }}</p>   
    <p>Turma: {{ $matricula -> turma }}</p>
    <hr>
    <p>Criado por: Wander {{ $estudante -> criadoPor }}</p> 
    <p>Data de criação: {{ $estudante -> created_at }}</p>
    <hr>
    
    <p>Alterado por: {{ $estudante -> editadoPor }}</p>
    <p>Data de Alteração: {{ $estudante -> updated_at }}</p>
    <hr>
    <hr>
    <a href="/editar_estudante/{{ $estudante -> id }}"> <input type="button" value="EDITAR" class="btn btn-warning my-2 my-sm-0 "></a>
    <a href="/confirmar_matricula/{{ $estudante -> id }}"> <input type="button" value="Confirmar Matrícula" class="btn btn-success my-2 my-sm-0"></a>
    <a href="/eliminar_estudante/{{ $estudante -> id }}"> <input type="button" value="Eliminar" class="btn btn-danger my-2 my-sm-0"></a>
    </div>

    </div>

 <script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
@endsection