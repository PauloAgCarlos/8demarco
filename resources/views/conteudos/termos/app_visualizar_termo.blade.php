@extends('layouts.app')

@section('conteudo')
<fieldset class="center blue-grey lighten-2">
  
    <header>

      <img src="../imagens/angola.png">
      <p>República de Angola</p>
      <p>Ministério Da Educação Ciência & Tecnologia da Huíla</p>
      <p>COMPLEXO ESCOLAR Nº 705 - 8 DE MARÇO</p>
      <p>Ensino geral</p>
      
  </header>
  <div class="container center ">
      <form action="" method="post">
        <p><label for="cNumeroSGA"> Nº de SGA</label> <input type="number" name="tNumeroSGA" id="cNumeroSGA"></p>
        <p>NOME: ALUNO1</p>
        <p> TURMA:A</p>
        <p>CLASSE: 6ª </p>
         <table class="center">
           <tr><td> DISCIPLINAS</td><td>CLASSIFICAÇÕES</td> </tr>
           <tr><td>Língua Portuguesa</td><td>06 (Seís Valores)</td></tr>
           <tr><td>Matemática</td><td>06 (Seís Valores)</td></tr>
           <tr><td> Ciências da Natureza</td><td>06 (Seís Valores)</td></tr>
           <tr><td>História</td><td>06 (Seís Valores)</td></tr>
           <tr><td>Geografia </td><td>06 (Seís Valores)</td></tr>
           <tr><td> Educação Moral Cívica </td><td>06 (Seís Valores)</td></tr>
           <tr><td> Educação Manual e Plástica</td><td>06 (Seís Valores)</td></tr>
           <tr><td>  Educação Musical</td><td>06 (Seís Valores)</td></tr>
           <tr><td>  Educação Física</td><td>06 (Seís Valores)</td></tr>
         </table> 
      </form>
  </div>
</fieldset>
<div class="center"><p><input type="submit" value="IMPRIMIR" class="btn"></p> </div>

@endsection