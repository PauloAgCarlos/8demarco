@extends('layouts.app')

@section('conteudo')

 <form  method="POST">
    <div class="input-field col s12">
        
        <h1 class="center #2196f3 blue"> Fazendo Anúnicos</h1> 
       <p class="container center "> <textarea name="tPublicacao" id="cPublicacao" cols="30" rows="10" class="center container">

       </textarea></p>
       <p class="container center"><b> INCLUIR FOTOS</b> <input type="file" name="tFotoPublicacao" id="cFotoPublicacao"></p>

    </div>
    <div class="container center">
   <input type="submit" value="PUBLICAR" name="tPublicar"class="btn" id="cPublicar" onclick="publicar()">
</div>
</form>

@endsection