@extends('layouts.app')

@section('conteudo')

  <form action="" method="POST">
    <div class="aviso">
        <fieldset>
            <legend>Liberar a Emissão, impressão e entrega dos certificados</legend>
        <p>Olá senhor(a), nesta aba você pode liberar a Emissão, impressão e entrega dos certificados do Ensino Primário(6ª Classe)
    E Iº Ciclo(9ª Classe). Basta apenas arrastar o botão abaixo  em sim quando pedir a confirmação.</p>
        <p>Caso contrário simplesmente vá para onde desejar. Esperamos ter ajudado.</p>
        <div class="switch center">
            <label>
                Não
                <input type="checkbox" name="tOpcaoCertificados"id="cOpcaoCertificados">
                <span class="lever"></span>
               Sim
            </label>
        </div>
        </fieldset>
    </div>
</form>
  
@endsection