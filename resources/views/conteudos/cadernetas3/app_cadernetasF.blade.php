@extends('layouts.app')

@section('conteudo')

 	<table>
		<form method="post"></form>
		<h1>Classificação final no Trimestre</h1>
		
			<fieldset>
				<legend>Dados Cruciais</legend> 
				<p> Nº de SGA: <input type="number" name="tNumeroSGA" id="cNumeroSGA"></p> 
				<p>Nome: <input type="text" name="tNomeCaderneta3" id="cNomeCaderneta3" readonly></p>
			</fieldset>
			<div id="center"> <label for="cTrmistre3">Trimestre </label><select name="tTrmistre3" id="cTrmistre3">
				<option checked>I</option>
				<option>II</option>
				<option>III</option>
			</select> Semana<input type="week" name="tSemana3" id="cSemana3"/> Data<input type="date" name="tData3" id="cData3"><br/><br/></div>
<tr><td id="dis">Disciplinas</td><td id="dis">MAC</td><td id="dis">CPP</td><td id="dis">CT</td> <td id="dis">OBS</td></tr>
					
					<!-- Tabelas com imputes para preencher as notas-->
					<!-- Dados de L portuguesa-->
	<tr><td>Língua Portuguesa</td><td><input type="text" name="tNotaLingua3MAC" id="cNotaLingua3MAC"></td><td><input type="text"  name="tNotaLingua3CPP" id="cNotaLingua3CPP"></td><td><input type="text" name="tNotaLingua3CT" id="cNotaLingua3CT" readonly></td><td><input type="text" name="tNotaLingua3OBS" id="cNotaLingua3OBS" readonly></td> </tr>
	<!-- Dados de matemática-->
	<tr><td>Matemática</td><td><input type="text" name="tNotaMatematica3MAC" id="cNotaMatematica3MAC"></td><td><input type="text" name="tNotaMatematica3CPP" id="cNotaMatematica3CPP"></td><td><input type="text" name="tNotaMatematica3CT" id="cNotaMatematica3CT" readonly></td><td><input type="text" name="tNotaMatematica3OBS" id="cNotaMatematica3OBS" readonly></td></tr>
	<!-- Dados C. da Natureza-->
	<tr><td>Estudo do Meio</td><td><input type="text" name="tNotaMeio3MAC" id="cNotaMeio3MAC"></td><td><input type="text" name="tNotaMeio3CPP" id="cNotaMeio3CPP"></td><td><input type="text" name="tNotaMeio3CT" id="cNotaMeio3CT" readonly></td><td><input type="text" name="tNotaMeio3OBS" id="cNotaMeio3OBS" readonly></td></tr>
	<!-- Dados de EMP-->
	<tr><td>Educação Manual & Plástica</td><td><input type="text" name="tNotaEMP3MAC" id="cNotaEMP3MAC"></td><td><input type="text" name="tNotaEMP3CPP" id="cNotaEMP3CPP"></td><td><input type="text" name="tNotaEMP3CT" id="cNotaEMP3CT" readonly></td><td><input type="text" name="tNotaEMP3OBS" id="cNotaEMP3OBS" readonly></td></tr>
	<!-- Dados de Ed. Musical-->
	<tr><td>Educação Musical</td><td><input type="text" name="tNotaEMusical3MAC" id="cNotaEMusical3MAC"></td><td><input type="text" name="tNotaEMusical3CPP" id="cNotaEMusical3CPP"></td><td><input type="text" name="tNotaEMusical3CT" id="cNotaEMusical3CT" readonly></td><td><input type="text" name="tNotaEMusical3OBS" id="cNotaEMusical3OBS" readonly></td></tr>
	<!-- Dados de Ed. Física-->
	<tr><td>Educação Física</td><td><input type="text" name="tNotaEFisica3MAC" id="cNotaEFisica3MAC"></td><td><input type="text" name="tNotaEFisica3CPP" id="cNotaEFisica3CPP"></td><td><input type="text" name="tNotaEFisica3CT" id="cNotaEFisica3CT"1readonly></td><td><input type="text" name="tNotaEFisica3OBS" id="cNotaEFisica3OBS" readonly></td></tr>
</form>
</table>
 <center><input type="submit" value="Enviar" class="botao"></center>


@endsection