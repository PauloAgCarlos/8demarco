@extends('layouts.app3')

@section('conteudo')

    <link rel="stylesheet" href="../folhasCss/style.css"/>
	<link rel="stylesheet" href="../folhasCss/caderneta.css"/>

<p><a href="cader6Final.html"><input type="submit" value="FIM T" class="botao"> </a></p>
	<table>
			<h1>Caderneta de Avaliações(6ª classe)</h1>
			<form method="post" action="/salvar_caderneta">
				@csrf
				<fieldset>
					<legend>Dados Cruciais</legend>
					<p>Nome: <input type="text" name="tNomeCaderneta" id="cNomeCaderneta6"></p> 
					<p> Nº de SGA: <input type="number" name="tNumeroSGA" id="cNumeroSGA"></p> 
				</fieldset>
<label for="cTrmistre6">Trimestre </label><input type="number" name="tTrmistre6" id="cTrmistre6"/> Semana<input type="week" name="tSemana" id="cSemana6"/> Data<input type="date" name="tData6" id="cData6"><br/><br/>
<tr><td id="dis">Disciplinas</td><td id="dis">Segunda</td><td id="dis">Terça</td><td id="dis">Quarta</td><td id="dis">Quinta</td><td id="dis">Sexta</td><td id="dis">MACs</td></tr>
						
						<!-- Tabelas com imputes para preencher as notas mano-->
						
						<!-- Dados de L portuguesa-->
		<tr><td>Língua Portuguesa</td><td><input type="number" name="tNotaLingua6" id="cNotaLingua6"></td><td><input type="number"  name="tNotaLingua6" id="cNotaLingua6"></td><td><input type="number" name="tNotaLingua6" id="cNotaLingua6"></td><td><input type="number"name="tNotaLingua6" id="cNotaLingua6"></td><td><input type="number"name="tNotaLingua6" id="cNotaLingua6"></td><td><input type="number" name="tNotaLingua6" id="cNotaLingua6"></td></tr>
		<!-- Dados de matemática-->
		<tr><td>Matemática</td><td><input type="number" name="tNotaMatematica6" id="cNotaMatematica6"></td><td><input type="number" name="tNotaMatematica6" id="cNotaMatematica6"></td><td><input type="number" name="tNotaMatematica6" id="cNotaMatematica6"></td><td><input type="number"  name="tNotaMatematica6" id="cNotaMatematica6"></td><td><input type="number"  name="tNotaMatematica6" id="cNotaMatematica6"></td><td><input type="number" name="tNotaMatematica6" id="cNotaMatematica6"></td></tr>
		<!-- Dados C. da Natureza-->
		<tr><td>Ciênicas da Natureza</td><td><input type="number" name="tNotaCiencia6" id="cNotaCiencia6"></td><td><input type="number"name="tNotaCiencia6" id="cNotaCiencia6"></td><td><input type="number"name="tNotaCiencia6" id="cNotaCiencia6"></td><td><input type="number"name="tNotaCiencia6" id="cNotaCiencia6"></td><td><input type="number" name="tNotaCiencia6" id="cNotaCiencia6"></td><td><input type="number" name="tNotaCiencia6" id="cNotaCiencia6"></td></tr>
		<!-- Dados de História-->
		<tr><td>História</td><td><input type="number" name="tNotaHistoria6" id="cNotaHistoria6"></td><td><input type="number"name="tNotaHistoria6" id="cNotaHistoria6"></td><td><input type="number"name="tNotaHistoria6" id="cNotaHistoria6"></td><td><input type="number"name="tNotaHistoria6" id="cNotaHistoria6"></td><td><input type="number"name="tNotaHistoria6" id="cNotaHistoria6"></td><td><input type="number"name="tNotaHistoria6" id="cNotaHistoria6"></td></tr>
		<!-- Dados de Geografia-->
		<tr><td>Geografia</td><td><input type="number" namname="tNotaGeografia6" id="cNotaGeografia6"ografia" id="cNotaGeografia6"></td><td><input type="number"name="tNotaGeografia6" id="cNotaGeografia6"></td><td><input type="number" name="tNotaGeografia6" id="cNotaGeografia6"><td><input type="number" name="tNotaGeografia6" id="cNotaGeografia6"></td></td><td><input type="number"name="tNotaGeografia6" id="cNotaGeografia6"></td><td><input type="number"name="tNotaGeografia6" id="cNotaGeografia6"></td></tr>
		<!-- Dados de EMC-->
		<tr><td>Educação Mora & Cívica</td><td><input type="number" name="tNotaEMC6" id="cNotaEMC6"></td><td><input type="number"name="tNotaEMC6" id="cNotaEMC6"></td><td><input type="number" name="tNotaEMC6" id="cNotaEMC6"></td><td><input type="number"name="tNotaEMC6" id="cNotaEMC6"></td><td><input type="number"name="tNotaEMC6" id="cNotaEMC6"></td><td><input type="number"name="tNotaEMC6" id="cNotaEMC6"></td></tr>
		<!-- Dados de EMP-->
		<tr><td>Educação Manual & Plástica</td><td><input type="number" name="tNotaEMP" id="cNotaEMP"></td><td><input type="number"name="tNotaEMP" id="cNotaEMP"></td><td><input type="number"name="tNotaEMP" id="cNotaEMP"></td><td><input type="number"name="tNotaEMP" id="cNotaEMP"></td><td><input type="number"name="tNotaEMP" id="cNotaEMP"></td><td><input type="number"name="tNotaEMP" id="cNotaEMP"></td></tr>
		<!-- Dados de Ed. Musical-->
		<tr><td>Educação Musical</td><td><input type="number" name="tNotaEMusical" id="cNotaEMusical"></td><td><input type="number" name="tNotaEMusical" id="cNotaEMusical"></td><td><input type="number"  name="tNotaEMusical" id="cNotaEMusical"></td><td><input type="number" name="tNotaEMusical" id="cNotaEMusical"></td><td><input type="number"  name="tNotaEMusical" id="cNotaEMusical"></td><td><input type="number"  name="tNotaEMusical" id="cNotaEMusical"></td></tr>
		<!-- Dados de Ed. Física-->
		<tr><td>Educação Física</td><td><input type="number" name="tNotaEFisica" id="cNotaEFisica"></td><td><input type="number"name="tNotaEFisica" id="cNotaEFisica"></td><td><input type="number"name="tNotaEFisica" id="cNotaEFisica"></td><td><input type="number"name="tNotaEFisica" id="cNotaEFisica"></td><td><input type="number"name="tNotaEFisica" id="cNotaEFisica"></td><td><input type="number"name="tNotaEFisica" id="cNotaEFisica"></td></tr>

		<center><input type="submit" class="botao" value="/salvar_caderneta"/></center>
		</form>
	</table>
	<h3>Outras Informações</h3>
	<textarea name="tInformacoes" id="cInformacoes"></textarea>
	
	<!-- Botões para outras cadernetas-->
	<h4>Ir para a caderneta de outras classes</h4>
	<br><a href="caderneta5.html"><input type="submit" value="5ª Classe" class="botao"/></a>
	<a href="caderneta4.html"><input type="submit" value="4ª Classe" class="botao"/></a>
	<a href="caderneta3.html"><input type="submit" value="3ª Classe" class="botao"/></a>
	<a href="caderneta2.html"><input type="submit" value="2ª Classe" class="botao"/></a>
	<a href="caderneta1.html"><input type="submit" value="1ª Classe" class="botao"/></a>
	
	

@endsection