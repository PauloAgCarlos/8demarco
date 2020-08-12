@extends('layouts.app')

@section('conteudo')

<br><br><br><br>

<div>
    
    <div class="caso">
      <h1>Cadastro de Novos Estudantes</h1>
      <form method="post" id="fEstudante" action="/salvar_estudante" style="color:black;" enctype="multipart/form-data">
        @csrf
        <fieldset id="estudante">
          <legend>Dados Importantes</legend>
          <p><label for="cNome">Nome:</label><input type="text" name="tNomeCompleto" id="cNome" placeholder="Nome Completo" required/></p>
          <p><label for="cData">Data de Nascimento:</label> <input type="date" name="tData" id="cData" required/></p>
                <p><label for="cNom">Local de Nascimento:</label><input type="text" name="tLocalNascimento" id="cNom" placeholder="Huíla-Lubango" required/>
            <p><label for="cNum">Nº do BI ou da Cédula:<input type="text" name="tNumeroBI" id="cNum" placeholder="006516352HA042" required/></label></p>
            <p><label for="cDa">Data de Emissão:</label><input type="date" name="tDataEmissao" id="cDa" required/></p>
          <p><label for="cDat">Data de Expiração:</label><input type="date" name="tDataExpirassao" id="cDat" required></p>
          <p><label for="cFotoE"> Add Foto: <input type="file" name="foto" id="cFotoE" required></label></p>
          <fildset>
            Sexo:<br/><input type="radio" name="tSexo" id="cMasc" required/ value="Masculino"><label for="cMasc">Masculino</label><br/>
          <input type="radio" name="tSexo" id="cFem" required/ value="Feminino"><label for="cFem">Feminino</label>
        </fildset>
    
        </fieldset>
    
        <fieldset id="adicionais">
         <legend> Informações Adicionais </legend>
         
         <p><label for="cCida">Cidade Onde Mora:<select name="tCidadeMora" id="cCida" required></label>
           <option selected>Lubango</option>
           <option>Moçamedes</option>
           <option>Matala</option>
           <option>Ondjiva</option>
           <option>Benguela</option>
           <option>Huambo</option>
         </select></p>
    
          <p><label for="Bai">Bairro:</label><select name="tBairro" id="Bai" required>
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
          <p><label for="cEn">Nome:</label><input type="text" name="tEn" id="cEn" placeholder="Nome Completo" required/></p>
          <p><label for="cNumber">Nº de Telefone:</label><input type="number" name="tNumeroTelefone" id="cNumber" placeholder="+244..." required></p>
          <p>Relação com a criança:<select name="tRealacao" required>
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
          
        <input type="submit" value="Registar" class="btn btn-outline-success my-2 my-sm-0"/><hr>
        <p><a href="/registar_matriculas"><input type="button" value="Matricular" class="btn btn-outline-success my-2 my-sm-0 text-center" id="align"></a></p>
      </form>

    </div> </div>

@endsection