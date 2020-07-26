@extends('layouts.app')

@section('conteudo')

	<table>
			<h1>Classificação final no Trimestre</h1>
			<form method="post">
				<fieldset>
					<legend>Dados Cruciais</legend>
					<p> Nº de SGA: <input type="number" name="tNumeroSGA" id="cNumeroSGA" min="1"></p> 
					<p>Nome: <input type="text" name="tNomeCaderneta6" id="cNomeCaderneta6" readonly></p> 
				</fieldset>
<div id="center"> <label for="cTrmistre6">Trimestre </label><select name="tTrmistre6" id="cTrmistre6">
	<option checked>I</option>
	<option>II</option>
	<option>III</option>
</select> Semana<input type="week" name="tSemana6" id="cSemana6"/> Data<input type="date" name="tData6" id="cData6"><br/><br/></div>
<tr><td id="dis">Disciplinas</td><td id="dis">MAC</td><td id="dis">CPP</td><td id="dis">CT</td> </tr>
						
						<!-- Tabelas com imputes para preencher as notas mano-->
						
						<!-- Dados de L portuguesa-->
		<tr><td>Língua Portuguesa</td><td><input type="number" name="tNotaLingua6MAC" id="cNotaLingua6MAC"></td><td><input type="number"  name="tNotaLingua6CPP" id="cNotaLingua6CPP"></td><td><input type="number" name="tNotaLingua6CT" id="cNotaLingua6CT" readonly></td></tr> 
		<!-- Dados de matemática-->
		<tr><td>Matemática</td><td><input type="number" name="tNotaMatematica6MAC" id="cNotaMatematica6MAC"></td><td><input type="number" name="tNotaMatematica6CPP" id="cNotaMatematica6CPP"></td><td><input type="number" name="tNotaMatematica6CT" id="cNotaMatematica6CT" readonly> </td></tr>
		<!-- Dados C. da Natureza-->
		<tr><td>Ciênicas da Natureza</td><td><input type="number" name="tNotaCiencia6MAC" id="cNotaCiencia6MAC"></td><td><input type="number"name="tNotaCiencia6CPP" id="cNotaCiencia6CPP"></td><td><input type="number"name="tNotaCiencia6CT" id="cNotaCiencia6CT" readonly></td></tr>
		<!-- Dados de História-->
		<tr><td>História</td><td><input type="number" name="tNotaHistoria6MAC" id="cNotaHistoria6MAC"></td><td><input type="number"name="tNotaHistoria6CPP" id="cNotaHistoria6CPP"></td><td><input type="number"name="tNotaHistoria6CT" id="cNotaHistoria6CT" readonly></td></tr>
		<!-- Dados de Geografia-->
		<tr><td>Geografia</td><td><input type="number" name="tNotaGeografia6MAC"  id="cNotaGeografia6MAC"></td><td><input type="number" name="tNotaGeografia6CPP" id="cNotaGeografia6CPP"></td><td><input type="number" name="tNotaGeografia6CT" id="cNotaGeografia6CT" readonly></td></tr>
		<!-- Dados de EMC-->
		<tr><td>Educação Mora & Cívica</td><td><input type="number" name="tNotaEMC6MAC" id="cNotaEMC6MAC"></td><td><input type="number"name="tNotaEMC6CPP" id="cNotaEMC6CPP"></td><td><input type="number" name="tNotaEMC6CT" id="cNotaEMC6CT"  readonly></td></tr>
		<!-- Dados de EMP-->
		<tr><td>Educação Manual & Plástica</td><td><input type="number" name="tNotaEMP6MAC" id="cNotaEMP6MAC"></td><td><input type="number"name="tNotaEMP6CPP" id="cNotaEMP6CPP"></td><td><input type="number"name="tNotaEMP6CT" id="cNotaEMP6CT" readonly></td></tr>
		<!-- Dados de Ed. Musical-->
		<tr><td>Educação Musical</td><td><input type="number" name="tNotaEMusical6MAC" id="cNotaEMusical6MAC"></td><td><input type="number" name="tNotaEMusical6CPP" id="cNotaEMusical6CPP"></td><td><input type="number"  name="tNotaEMusical6CT" id="cNotaEMusical6CT" readonly></td></tr>
		<!-- Dados de Ed. Física-->
		<tr><td>Educação Física</td><td><input type="number" name="tNotaEFisica6MAC" id="cNotaEFisica6MAC"></td><td><input type="number"name="tNotaEFisica6CPP" id="cNotaEFisica6CPP"></td><td><input type="number"name="tNotaEFisica6CT" id="cNotaEFisica6CT"  readonly></td></tr>
		</form>
    </table>
    <div class="inf">
	<h3>Outras Informações</h3>
    <textarea name="tInformacoes" id="cInformacoes"></textarea>
</div>
	<center><input type="image" src="imagens/cadastrar.jpg"/></center>
	<script src="../js/sc6.js"></script>

@endsection