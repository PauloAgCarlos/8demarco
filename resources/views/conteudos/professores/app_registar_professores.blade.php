@extends('layouts.app')

@section('conteudo')

<br><br><br><br>

    <div class="caso text-center">
  <h1>Cadastro de Novos Professores</h1>
  <form method="post" id="fEstudante" action="/salvar_professor" style="color: black;" enctype="multipart/form-data">
    @csrf
    <fieldset >
      <legend>Dados Importantes</legend>
      <p><label for="cNomeCompletoprofessor">Nome:</label><input type="text" name="tNomeCompletoprofessor" id="cNomeCompletoprofessor" placeholder="Nome Completo"/></p>
      <p><label for="cAgente">Nº De Agente:</label><input type="number" name="tAgente" id="cAgente"></p>
      <p><label for="cFotoProfessor">Foto:</label><input type="file" name="foto" id="cFotoProfessor"></p>
      <p><label for="cDataNascimentoProfessor">Data de Nascimento:</label><input type="date" name="tDataNascimento" id="cDataNascimentoProfessor"/></p>
      <p><label for="cLocalNascimentoProfessor">Local de Nascimento:</label><input type="text" name="tLocalNascimentoProfessor" id="cLocalNascimentoProfessor" placeholder="Ex.: Huíla-Lubango"/>
      <p><label for="cNum">Nº do BI:<input type="text" name="tNumeroBI" id="cNum" placeholder="Ex.:006516352HA042"/></label></p>
      <p><label for="cEstadoCivil">Estado Cívil:<select name="tEstadoCivil" id="cEstadoCivil"></label>
        <option>Solteiro/a</option>
        <option>Casado/a</option>
        <option>Noivo/a</option>
        <option>Divorciado/a</option>
        <option>Outras opções</option>
      </select>
      <p><label for="cDataEmissaoProfessor">Data de Emição:</label><input type="date" name="tDataEmissaoprofessor" id="cDataEmissaoProfessor"/></p>
      <p><label for="cDataExpiracaoProfessor">Data de Expiração:</label><input type="date" name="tDataExpiracaoProfessor" id="cDataExpiracaoProfessor"/></p>
      
      <fildset>
        Sexo:<br/><input type="radio" name="tSexo" id="cMasc"/><label for="cMasc">Masculino</label><br/>
      <input type="radio" name="tSexo" id="cFem"/><label for="cFem">Femenino</label>
    </fildset>

    </fieldset>
    <fieldset>
     <legend> Informações Adicionais </legend>
     
     <p><label for="cCida">Cidade Onde Mora:<select name="tCidadeMoraprofessor" id="cCida">
      <option selected>Lubango</option>
      <option>Humpata</option>
      <option>Matala</option>
      <option>Xibia</option>
      <option>Ondjiva</option>
      <option>Benguela</option>
      <option>Huambo</option>
     </select></p>
      <p><label for="cNi">Nível Académico:<select name="tNivelAcademico" id="cNi">
        <option>Técnico Básico</option>
        <option selected>Técnico/a Médio/a</option>
        <option>Lincenciado</option>
        <option>Mestre</option>
        <option>PHD/Doutor</option>
      </select></p>
      <p><label for="">Função: <select name="tFuncaoSGA" id="cFuncaoSGA">
        <option selected>Professor</option>
        <option>Administrativo Nível 1</option>
        <option>Administrativo Nível 2</option>
        <option>Administrativo Nível 3</option>
        <option>Administrativo Nível 4</option>
        <option>Administrativo Nível 5</option>
        <option>Administrativo Nível 6</option>
        <option>Administrativo Nível 7</option>
        <option>Administrativo Nível 8</option>
        <option>Administrativo Nível 9</option>
        <option>Administrativo Nível 10</option>
      </select></label></p>
      <p><label for="cBai">Bairro:<select name="tBairroProfessor" id="cBai">
        <option>Lage</option>
        <option>Srª do Monte</option>
        <option selected>Tchavola</option>
        <option>Tchioco</option>
        <option>Arco-Íris</option>
        <option>Calumbiro</option>
        <option>Mapunda</option>
        <option>João da Mitcha</option>
        <option>João de Almeida</option>
        <option>kuawa</option>
        <option>Kilemba</option>
        <option>Santo António</option>
        <option>Hélder Neto</option>
        <option>Comercia</option>
        <option>Lucrécia</option>
        
      </select></p>

    </fieldset>
      
    <input type="submit" value="Registar" class="btn btn-dark my-2 my-sm-0"/>
  </form>
</div>
</div>

    @endsection