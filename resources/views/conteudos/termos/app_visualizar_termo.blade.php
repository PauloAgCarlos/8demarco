@extends('layouts.app')

@section('conteudo')

<br><br><br><br>

      <div class="caso" style="color: black;">
  <div class="container text-center">
    <div>

      <img src="../imagens/angola.png">
      <p>República de Angola</p>
      <p>Ministério Da Educação Ciência & Tecnologia da Huíla</p>
      <p>COMPLEXO ESCOLAR Nº 705 - 8 DE MARÇO</p>
      <p>Ensino geral</p>
      
  </div>
  <div class="container">
      <form action="" method="post">
        <p><label for="cNumeroSGA"> Nº de SGA</label> <input type="number" name="tNumeroSGA" id="cNumeroSGA"></p>
      </form>
        <p>NOME: ALUNO1</p>
        <p> TURMA:A</p>
        <p>CLASSE: 6ª </p>
         <table class="table">
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
     <div class="container text-center"><p><input type="button" value="IMPRIMIR" class="btn btn-dark my-2 my-sm-0"></p> </div>
    </div>
  </div>
</div>
</div>

@endsection