@extends('layouts.app')

@section('conteudo')

 	<table>
		<form method="post"></form>
		<h1>Classificação final no Trimestre</h1>
		<fieldset>
				<legend>Dados Cruciais</legend> 
				<p> Nº de SGA: <input type="number" name="tNumeroSGA" id="cNumeroSGA"></p> 
				<p>Nome: <input type="text" name="tNomeCaderneta1" id="cNomeCaderneta1" readonly></p>
			</fieldset>
			<div id="center"> <label for="cTrmistre1">Trimestre </label><select name="tTrmistre1" id="cTrmistre1">
				<option checked>I</option>
				<option>II</option>
				<option>III</option>
			</select> Semana<input type="week" name="tSemana1" id="cSemana1"/> Data<input type="date" name="tData1" id="cData1"><br/><br/></div>
<tr><td id="dis">Disciplinas</td><td id="dis">MAC</td><td id="dis">CPP</td><td id="dis">CT</td> <td id="dis">OBS</td></tr>
					
					<!-- Tabelas com imputes para preencher as notas-->
					<!-- Dados de L portuguesa-->
	<tr><td>Língua Portuguesa</td><td><input type="text" name="tNotaLingua1MAC" id="cNotaLingua1MAC"></td><td><input type="text"  name="tNotaLingua1CPP" id="cNotaLingua1CPP"></td><td><input type="text" name="tNotaLingua1CT" id="cNotaLingua1CT" readonly></td><td><input type="text" name="tNotaLingua1OBS" id="cNotaLingua1OBS" readonly></td> </tr>
	<!-- Dados de matemática-->
	<tr><td>Matemática</td><td><input type="text" name="tNotaMatematica1MAC" id="cNotaMatematica1MAC"></td><td><input type="text" name="tNotaMatematica1CPP" id="cNotaMatematica1CPP"></td><td><input type="text" name="tNotaMatematica1CT" id="cNotaMatematica1CT" readonly></td><td><input type="text" name="tNotaMatematica1OBS" id="cNotaMatematica1OBS" readonly></td></tr>
	<!-- Dados C. da Natureza-->
	<tr><td>Estudo do Meio</td><td><input type="text" name="tNotaMeio1MAC" id="cNotaMeio1MAC"></td><td><input type="text" name="tNotaMeio1CPP" id="cNotaMeio1CPP"></td><td><input type="text" name="tNotaMeio1CT" id="cNotaMeio1CT" readonly></td><td><input type="text" name="tNotaMeio1OBS" id="cNotaMeio1OBS" readonly></td></tr>
	<!-- Dados de EMP-->
	<tr><td>Educação Manual & Plástica</td><td><input type="text" name="tNotaEMP1MAC" id="cNotaEMP1MAC"></td><td><input type="text" name="tNotaEMP1CPP" id="cNotaEMP1CPP"></td><td><input type="text" name="tNotaEMP1CT" id="cNotaEMP1CT" readonly></td><td><input type="text" name="tNotaEMP1OBS" id="cNotaEMP1OBS" readonly></td></tr>
	<!-- Dados de Ed. Musical-->
	<tr><td>Educação Musical</td><td><input type="text" name="tNotaEMusical1MAC" id="cNotaEMusical1MAC"></td><td><input type="text" name="tNotaEMusical1CPP" id="cNotaEMusical1CPP"></td><td><input type="text" name="tNotaEMusical1CT" id="cNotaEMusical1CT" readonly></td><td><input type="text" name="tNotaEMusical1OBS" id="cNotaEMusical1OBS" readonly></td></tr>
	<!-- Dados de Ed. Física-->
	<tr><td>Educação Física</td><td><input type="text" name="tNotaEFisica1MAC" id="cNotaEFisica1MAC"></td><td><input type="text" name="tNotaEFisica1CPP" id="cNotaEFisica1CPP"></td><td><input type="text" name="tNotaEFisica1CT" id="cNotaEFisica1CT"1readonly></td><td><input type="text" name="tNotaEFisica1OBS" id="cNotaEFisica1OBS" readonly></td></tr>
</form>
</table>
 <center><input type="submit" value="Enviar" class="botao"></center>

@endsection