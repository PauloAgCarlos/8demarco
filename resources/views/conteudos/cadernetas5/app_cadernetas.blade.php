@extends('layouts.app')

@section('conteudo')

 <p> <a href="caderneta5Final.html"><input type="submit" value="FIM T" class="botao"></a> </p>
	<table>
		<h1>Caderneta de Avaliações(5ª classe)</h1>
		<form method="post" action="/salvar_caderneta">
			@csrf
			<fieldset>
				<legend>Dados Cruciais</legend>
				<p>Nome: <input type="text" name="tNomeCaderneta" id="cNomeCaderneta6"></p> 
				<p> Nº de SGA: <input type="number" name="tNumeroSGA" id="cNumeroSGA"></p> 
			</fieldset>
<label for="cTrmistre6">Trimestre </label><input type="number" name="tTrmistre" id="cTrmistre6"/> Semana<input type="week" name="tSemana" id="cSemana6"/> Data<input type="date" name="tData6" id="cData6"><br/><br/>
<tr><td id="dis">Disciplinas</td><td id="dis">Segunda</td><td id="dis">Terça</td><td id="dis">Quarta</td><td id="dis">Quinta</td><td id="dis">Sexta</td><td id="dis">MACs</td></tr>
					
					<!-- Tabelas com imputes para preencher as notas mano-->
					<!-- Dados de L portuguesa-->
	<tr><td>Língua Portuguesa</td><td><input type="text" name="tNotaLingua5" id="cNotaLingua5"></td><td><input type="text"  name="tNotaLingua5" id="cNotaLingua5"></td><td><input type="text" name="tNotaLingua5" id="cNotaLingua5"></td><td><input type="text" name="tNotaLingua5" id="cNotaLingua5"></td><td><input type="text" name="tNotaLingua5" id="cNotaLingua5"></td><td><input type="text" name="tNotaLingua5" id="cNotaLingua5"></td></tr>
	<!-- Dados de matemática-->
	<tr><td>Matemática</td><td><input type="text" name="tNotaMatematica5" id="cNotaMatematica5"></td><td><input type="text" name="tNotaMatematica5" id="cNotaMatematica5"></td><td><input type="text" name="tNotaMatematica5" id="cNotaMatematica5"></td><td><input type="text"  name="tNotaMatematica5" id="cNotaMatematica5"></td><td><input type="text"  name="tNotaMatematica5" id="cNotaMatematica6"></td><td><input type="text" name="tNotaMatematica5" id="cNotaMatematica5"></td></tr>
	<!-- Dados C. da Natureza-->
	<tr><td>Ciênicas da Natureza</td><td><input type="text" name="tNotaCiencia5" id="cNotaCiencia5"></td><td><input type="text" name="tNotaCiencia5" id="cNotaCiencia5"></td><td><input type="text" name="tNotaCiencia5" id="cNotaCiencia5"></td><td><input type="text" name="tNotaCiencia5" id="cNotaCiencia5"></td><td><input type="text" name="tNotaCiencia5" id="cNotaCiencia5"></td><td><input type="text" name="tNotaCiencia5" id="cNotaCiencia5"></td></tr>
	<!-- Dados de História-->
	<tr><td>História</td><td><input type="text" name="tNotaHistoria5" id="cNotaHistoria5"></td><td><input type="text" name="tNotaHistoria5" id="cNotaHistoria5"></td><td><input type="text" name="tNotaHistoria5" id="cNotaHistoria5"></td><td><input type="text" name="tNotaHistoria5" id="cNotaHistoria5"></td><td><input type="text" name="tNotaHistoria5" id="cNotaHistoria5"></td><td><input type="text" name="tNotaHistoria5" id="cNotaHistoria5"></td></tr>
	<!-- Dados de Geografia-->
	<tr><td>Geografia</td><td><input type="text" namname="tNotaGeografia5" id="cNotaGeografia5" id="cNotaGeografia6"></td><td><input type="text" name="tNotaGeografia5" id="cNotaGeografia6"></td><td><input type="text" name="tNotaGeografia5" id="cNotaGeografia5"><td><input type="text" name="tNotaGeografia5" id="cNotaGeografia5"></td></td><td><input type="text" name="tNotaGeografia5" id="cNotaGeografia5"></td><td><input type="text" name="tNotaGeografia5" id="cNotaGeografia5"></td></tr>
	<!-- Dados de EMC-->
	<tr><td>Educação Mora & Cívica</td><td><input type="text" name="tNotaEMC5" id="cNotaEMC5"></td><td><input type="text" name="tNotaEMC5" id="cNotaEMC5"></td><td><input type="text" name="tNotaEMC5" id="cNotaEMC5"></td><td><input type="text" name="tNotaEMC5" id="cNotaEMC5"></td><td><input type="text" name="tNotaEMC5" id="cNotaEMC5"></td><td><input type="text" name="tNotaEMC5" id="cNotaEMC5"></td></tr>
	<!-- Dados de EMP-->
	<tr><td>Educação Manual & Plástica</td><td><input type="text" name="tNotaEMP5" id="cNotaEMP5"></td><td><input type="text" name="tNotaEMP5" id="cNotaEMP5"></td><td><input type="text" name="tNotaEMP5" id="cNotaEMP5"></td><td><input type="text" name="tNotaEMP5" id="cNotaEMP5"></td><td><input type="text" name="tNotaEMP5" id="cNotaEMP5"></td><td><input type="text" name="tNotaEMP5" id="cNotaEMP5"></td></tr>
	<!-- Dados de Ed. Musical-->
	<tr><td>Educação Musical</td><td><input type="text"name="tNotaEMusical5" id="cNotaEMusical5"></td><td><input type="text" name="tNotaEMusical5" id="cNotaEMusical5"></td><td><input type="text" name="tNotaEMusical5" id="cNotaEMusical5"></td><td><input type="text" name="tNotaEMusical5" id="cNotaEMusical5"></td><td><input type="text"  name="tNotaEMusical5" id="cNotaEMusical5"></td><td><input type="text"  name="tNotaEMusical5" id="cNotaEMusical5"></td></tr>
	<!-- Dados de Ed. Física-->
	<tr><td>Educação Física</td><td><input type="text" name="tNotaEFisica5" id="cNotaEFisica5"></td><td><input type="text" name="tNotaEFisica5" id="cNotaEFisica5"></td><td><input type="text" name="tNotaEFisica5" id="cNotaEFisica5"></td><td><input type="text" name="tNotaEFisica5" id="cNotaEFisica5"></td><td><input type="text" name="tNotaEFisica5" id="cNotaEFisica5"></td><td><input type="text" name="tNotaEFisica5" id="cNotaEFisica5"></td></tr>

	<center><input type="submit" class="botao" value="/salvar_caderneta"/></center>

	</form>
</table>

	<!-- Botões para outras cadernetas-->
	<h4>Ir para as cadernetas de outras classes</h4><br>
	<a href="cader.html"><input type="submit" value="6ª Classe" class="botao"/></a>
	<a href="caderneta4.html"><input type="submit" value="4ª Classe" class="botao"/></a>
	<a href="caderneta3.html"><input type="submit" value="3ª Classe" class="botao"/></a>
	<a href="caderneta2.html"><input type="submit" value="2ª Classe" class="botao"/></a>
	<a href="caderneta1.html"><input type="submit" value="1ª Classe" class="botao"/></a>
	

@endsection