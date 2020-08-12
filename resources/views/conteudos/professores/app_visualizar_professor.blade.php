@extends('layouts.app')

@section('conteudo')

 <br><br><br><br>
   
    <div class="caso text-center" style="color: black;">
        <h1> Dados Importantes</h1>

        <p><img src="{{ $professor -> foto }}" class=" bd-placeholder-img rounded-circle" id="imagem"></p>
           <p>Nome: {{ $professor -> nome }} </p> 
           <p>Nº de Agente: {{ $professor -> numeroAgente }}</p> 
            <p>Data de Nascimento : {{ $professor -> dataNascimento }}</p> 
            <p>Local de Nascimento: {{ $professor -> localNascimento }}</p> 
            <p>Nº de BI: {{ $professor -> numeroBilhete }}</p> 
            <p>Estado cívil: {{ $professor -> estadoCivil }}</p> 
            <!-- <p>Data de Emição: {{ $professor -> nome }}</p>  -->
            <!-- <p>Data de Expiração: {{ $professor -> nome }}</p>  -->
            <p> Sexo: {{ $professor -> sexo }}</p>
        <h1> Informações Adicionais</h1>

       
        <p>Cidade Onde Mora: {{ $professor -> morada }}</p> 
        <p>Bairro: {{ $professor -> bairro }}</p> 
    
     
 
    <h1> Dados Acadêmicos</h1>
    <p>Nivel Acadêmico: {{ $professor -> nivelAcademico }}</p>    
    <p>Função: {{ $professor -> funcao }}</p>    
    <!-- <p> Classe: {{ $professor -> nome }}</p>    -->
    <!-- <p>Turma: {{ $professor -> nome }}</p> -->
    <p>Usuário: {{ $professor -> nome }}</p> 
    
    <hr>
    <a href="/editar_professor/{{ $professor -> id }}"> <input type="button" value="EDITAR" class="btn btn-outline-success my-2 my-sm-0"></a>
    </div>


@endsection