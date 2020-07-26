@extends('layouts.app')

@section('conteudo')

 	<table>
		<form method="post"></form>
		<h1>Classificação final no Trimestre</h1>
		
			<fieldset>
				<legend>Dados Cruciais</legend> 
				<p> Nº de SGA: <input type="number" name="tNumeroSGA" id="cNumeroSGA"></p> 
				<p>Nome: <input type="text" name="tNomeCaderneta5" id="cNomeCaderneta5" readonly></p>
			</fieldset>
			<div id="center"> <label for="cTrmistre5">Trimestre </label><select name="tTrmistre5" id="cTrmistre5">
				<option checked>I</option>
				<option>II</option>
				<option>III</option>
			</select> Semana<input type="week" name="tSemana5" id="cSemana5"/> Data<input type="date" name="tData6" id="cData6"><br/><br/></div>
<tr><td id="dis">Disciplinas</td><td id="dis">MAC</td><td id="dis">CPP</td><td id="dis">CT</td> <td id="dis">OBS</td></tr>
					
					<!-- Tabelas com imputes para preencher as notas-->
					<!-- Dados de L portuguesa-->
	<tr><td>Língua Portuguesa</td><td><input type="text" name="tNotaLingua5MAC" id="cNotaLingua5MAC"></td><td><input type="text"  name="tNotaLingua5CPP" id="cNotaLingua5CPP"></td><td><input type="text" name="tNotaLingua5CT" id="cNotaLingua5CT" readonly></td><td><input type="text" name="tNotaLingua5OBS" id="cNotaLingua5OBS" readonly></td> </tr>
	<!-- Dados de matemática-->
	<tr><td>Matemática</td><td><input type="text" name="tNotaMatematica5MAC" id="cNotaMatematica5MAC"></td><td><input type="text" name="tNotaMatematica5CPP" id="cNotaMatematica5CPP"></td><td><input type="text" name="tNotaMatematica5CT" id="cNotaMatematica5CT" readonly></td><td><input type="text" name="tNotaMatematica5OBS" id="cNotaMatematica5OBS" readonly></td></tr>
	<!-- Dados C. da Natureza-->
	<tr><td>Ciênicas da Natureza</td><td><input type="text" name="tNotaCiencia5MAC" id="cNotaCiencia5MAC"></td><td><input type="text" name="tNotaCiencia5CPP" id="cNotaCiencia5CPP"></td><td><input type="text" name="tNotaCiencia5CT" id="cNotaCiencia5CT" readonly></td><td><input type="text" name="tNotaCiencia5OBS" id="cNotaCiencia5OBS" readonly></td></tr>
	<!-- Dados de História-->
	<tr><td>História</td><td><input type="text" name="tNotaHistoria5MAC" id="cNotaHistoria5MAC"></td><td><input type="text" name="tNotaHistoria5CPP" id="cNotaHistoria5CPP"></td><td><input type="text" name="tNotaHistoria5CPP" id="cNotaHistoria5CT" readonly></td><td><input type="text" name="tNotaHistoria5OBS" id="cNotaHistoria5OBS" readonly></td></tr>
	<!-- Dados de Geografia-->
	<tr><td>Geografia</td><td><input type="text" name="tNotaGeografia5MAC"  id="cNotaGeografia5MAC"></td><td><input type="text" name="tNotaGeografia5CPP" id="cNotaGeografia5CPP"></td><td><input type="text" name="tNotaGeografia5CT" id="cNotaGeografia5CT" readonly></td><td><input type="text" name="tNotaGeografia5OBS" id="cNotaGeografia5OBS" readonly></td></tr>
	<!-- Dados de EMC-->
	<tr><td>Educação Mora & Cívica</td><td><input type="text" name="tNotaEMC5MAC" id="cNotaEMC5MAC"></td><td><input type="text" name="tNotaEMC5CPP" id="cNotaEMC5CPP"></td><td><input type="text" name="tNotaEMC5CT" id="cNotaEMC5CT" readonly></td><td><input type="text" name="tNotaEMC5OBS" id="cNotaEMC5OBS" readonly></td></tr>
	<!-- Dados de EMP-->
	<tr><td>Educação Manual & Plástica</td><td><input type="text" name="tNotaEMP5MAC" id="cNotaEMP5MAC"></td><td><input type="text" name="tNotaEMP5CPP" id="cNotaEMP5CPP"></td><td><input type="text" name="tNotaEMP5CT" id="cNotaEMP5CT" readonly></td><td><input type="text" name="tNotaEMP5OBS" id="cNotaEMP5OBS" readonly></td></tr>
	<!-- Dados de Ed. Musical-->
	<tr><td>Educação Musical</td><td><input type="text"name="tNotaEMusical5MAC" id="cNotaEMusical5MAC"></td><td><input type="text" name="tNotaEMusical5CPP" id="cNotaEMusical5CPP"></td><td><input type="text" name="tNotaEMusical5CT" id="cNotaEMusical5CT" readonly></td><td><input type="text" name="tNotaEMusical5OBS" id="cNotaEMusical5OBS" readonly></td></tr>
	<!-- Dados de Ed. Física-->
	<tr><td>Educação Física</td><td><input type="text" name="tNotaEFisica5MAC" id="cNotaEFisica5MAC"></td><td><input type="text" name="tNotaEFisica5CPP" id="cNotaEFisica5CPP"></td><td><input type="text" name="tNotaEFisica5CT" id="cNotaEFisica5CT" readonly></td><td><input type="text" name="tNotaEFisica5OBS" id="cNotaEFisica5OBS" readonly></td></tr>
</form>
</table>

 <center><input type="submit" value="Enviar" class="botao"></center>

@endsection