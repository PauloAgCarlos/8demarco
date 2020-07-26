@extends('layouts.app')

@section('conteudo')

 <div class="comentario #00695c teal darken-4 white-text center container">

    <h1 class="white-text">Publicações Recentes</h1>
    <div class="divider"></div>
    <div class="section">
        <p> A direção do Complexo Escolar nº 705 "8 de Março" vem por meio deste comunicar a todos os professores da mesma instituição que está 
            marcada a primeira reunião de carácter obrigatório que terá lugar na sala dos professores no dia 7 de Outubro.
            Com o intuito de descutir normas e regras da escola.</p>
    </div>
<img src="../imagens/marco.jpg"></img>
    
    
        <h2>Adicionar Um Comentário a Publicação</h2>
        <div class="add-comentario">
            <textarea name="tComentario" id="cComentario" cols="30" rows="10" class="container">

            </textarea> <input type="button" value="COMENTAR" class="btn right center">
        </div> 
</div>
        <br><br>

        <div class="comentario #00695c teal darken-4 white-text center container">
            <h3>Comentários Adicionados A Publicação</h3>
            <div class="divider"></div>
            <div class="section">
              <h5>António Januário Jack</h5>
              <p>Wauuu Excelente.!</p>
            </div>
            <div class="divider"></div>
            <div class="section">
              <h5>Paulo Carlos Agostinho</h5>
              <p>Boa ideia.</p>
            </div>
            <div class="divider"></div>
            <div class="section">
              <h5>José Marcos Luciano</h5>
              <p>Não Concordo !!!</p>
            </div>
                   


@endsection