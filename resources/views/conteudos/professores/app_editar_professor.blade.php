@extends('layouts.app')

@section('conteudo')

<br><br><br><br>

<div>
    
    <div class="caso">
      <h1>Editando dados dos professores</h1>
      <form method="post" id="fprofessor" action="" style="color: black;">
        <fieldset id="professor">
          <legend>Dados Importantes</legend>
          <p><label for="cNome">Nome:</label><input type="text" name="tNomeCompleto" value="{{$professor->nome}}" id="cNome" placeholder="Nome Completo" required/></p>
          <p><label for="cData">Data de Nascimento:</label> <input type="date" value="{{$professor->dataNascimento}}" name="tData" id="cData" required/></p>
                <p><label for="cNom">Local de Nascimento:</label><input type="text" value="{{$professor->localNascimento}}" name="tLocalNascimento" id="cNom" placeholder="Huíla-Lubango" required/>
            <p><label for="cNum">Nº do BI ou da Cédula:<input type="text" value="{{$professor->numeroBilhete}}" name="tNumeroBI" id="cNum" placeholder="006516352HA042" required/></label></p>
            <p><label for="cDa">Data de Emição:</label><input type="date" name="tDataEmissao" id="cDa" required/></p>
          <p><label for="cDat">Data de Expiração:</label><input type="date" name="tDataExpirassao" id="cDat" required></p>
          <p><label for="cFotoE"> Add Foto: <input type="file" src="{{$professor->foto}}" value="{{$professor->foto}}" name="tFotoE" id="cFotoE" required></label></p>


          @if($professor->sexo == "Masc")
          <fildset>
            Sexo:<br/><input type="radio" name="tSexo" id="cMasc" checked="true" required/><label for="cMasc">Masculino</label><br/>
          <input type="radio" name="tSexo" id="cFem" required/><label for="cFem">Femenino</label>
        </fildset>
        @else
        <fildset>
            Sexo:<br/><input type="radio" name="tSexo" id="cMasc" required/><label for="cMasc">Masculino</label><br/>
          <input type="radio" name="tSexo" checked="true" id="cFem" required/><label for="cFem">Femenino</label>
        </fildset>
        @endif


    
        </fieldset>
    
        <fieldset id="adicionais">
         <legend> Informações Adicionais </legend>
         
         <p><label for="cCida">Cidade Onde Mora:<select name="tCidadeMora" id="cCida" required></label>
           <option selected>{{$professor->morada}}</option>
           <option>Moçamedes</option>
           <option>Matala</option>
           <option>Ondjiva</option>
           <option>Benguela</option>
           <option>Huambo</option>
         </select></p>
    
          <p><label for="Bai">Bairro:</label><select name="tBairro" id="Bai" required>
            <option>Lage</option>
            <option>Srª do Monte</option>
            <option selected>{{$professor->bairro}}</option>
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
          <p><label for="cEn">Nome:</label><input type="text" name="tEn" value="{{$professor->nomeEncarregado}}" id="cEn" placeholder="Nome Completo" required/></p>
          <p><label for="cNumber">Nº de Telefone:</label><input type="number" name="tNumeroTelefone" value="{{$professor->numeroEncarregado}}" id="cNumber" placeholder="+244..." required></p>
          <p>Relação com a criança:<select name="tRealacao" required>
            <option selected>{{$professor->relacaoComEncarregado}}</option>
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
          
        <input type="submit" value="ALTERAR" class="btn btn-outline-success my-2 my-sm-0"/><hr>
        <p><a href="matricula.html"><input type="button" value="MATRICULAR" class="btn btn-outline-success my-2 my-sm-0 text-center" id="align"></a></p>
      </form>

    </div> 
  </div>

@endsection