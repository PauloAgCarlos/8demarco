@extends('layouts.app')

@section('conteudo')

<!-- Substitua esse botão por um modal para dar opção de escolha em qual tela de cadastro acessar. -->
  <h1>Cadastro de Novos Estudantes</h1>
  <form method="POST" id="fEstudante" action="/salvar_estudante">
     @csrf
    <fieldset id="estudante">
      <legend>Dados Importantes</legend>
      <p><label for="cNome">Nome:</label><input type="text" name="tNomeCompleto" id="cNome" placeholder="Nome Completo"/></p>
      <p><label for="cData">Data de Nascimento:</label> <input type="date" name="tData" id="cData"/></p>
            <p><label for="cNom">Local de Nascimento:</label><input type="text" name="tLocalNascimento" id="cNom" placeholder="Huíla-Lubango"/>
        <p><label for="cNum">Nº do BI ou da Cédula:<input type="text" name="tNumeroBI" id="cNum" placeholder="006516352HA042"/></label></p>
        <p><label for="cDa">Data de Emição:</label><input type="date" name="tDataEmissao" id="cDa"/></p>
      <p><label for="cDat">Data de Expiração:</label><input type="date" name="tDataExpirassao" id="cDat"></p>
      <fildset>
        Sexo:<br/><input type="radio" name="tSexo" id="cMasc"/><label for="cMasc">Masculino</label><br/>
      <input type="radio" name="tSexo" id="cFem"/><label for="cFem">Femenino</label>
    </fildset>

    </fieldset>

    <fieldset id="adicionais">
     <legend> Informações Adicionais </legend>
     
     <p><label for="cCida">Cidade Onde Mora:<select name="tCidadeMora" id="cCida"></label>
      <option selected>Lubango</option>
      <option>Moçamedes</option>
      <option>Matala</option>
      <option>Ondjiva</option>
      <option>Benguela</option>
      <option>Huambo</option>
     </select></p>

      <p><label for="Bai">Bairro:</label><select name="tBairro" id="Bai">
        <option>Lage</option>
        <option>Srª do Monte</option>
        <option selected>Tchavola</option>
        <option>Tchioco</option>
        <option>Arco-Íris</option>
        <option>Calumbiro</option>
        <option>Mapunda</option>
        <option>João da Mitcha</option>
        <option>João de Almeida</option>
        <option>kwaua</option>
        <option>Santo António</option>
        <option>Hélder Neto</option>
        <option>Comercia</option>
        <option>Lucrécia</option>
        <option>Minhota</option>
        <option>Lalula</option>
        <option>Laureanos</option>
        <option>Benfica</option>
        <option>Industrial</option>
        <option>Nambambi</option>
      </select></p>

    </fieldset>
    <fieldset id="encarregado">
      <legend>Informações do Encarregado de Educação</legend>
      <p><label for="cEn">Nome:</label><input type="text" name="tEn" id="cEn" placeholder="Nome Completo"/></p>
      <p><label for="cNumber">Nº de Telefone:</label><input type="number" name="tNumeroTelefone" id="cNumber" placeholder="+244..."></p>
      <p>Relação com a criança:<select name="tRealacao">
        <option>Pai</option>
        <option>Mãe</option>
        <option>Filho/a</option>
        <option>Irmão</option>
        <option>Irmã</option>
        <option>Sobrinho/a</option>
        <option>Tio/a</option>
        <option>Sobrinho/a</option>
        <option>Avó/ô</option>
      </select></p>

    </fieldset>
      
    <center><input type="submit" value="/salvar_estudante" class="botao"/ name="aaaa"></center>

  </form>

@endsection