@extends('layouts.app3')

@section('conteudo')

<link rel="stylesheet" href="../folhasCss/style.css"/>
	<link rel="stylesheet" href="../folhasCss/caderneta.css"/>

<p> <a href="caderneta3Final.html"><input type="submit" value="FIM T" class="botao"></a> </p>
	<table>
			<h1>Caderneta de Avaliações(3ª classe)</h1>
			<form method="post" action="/salvar_caderneta">
				@csrf
				<fieldset>
					<legend>Dados Cruciais</legend>
					<p>Nome: <input type="text" name="tNomeCaderneta" id="cNomeCaderneta6"></p> 
					<p> Nº de SGA: <input type="number" name="tNumeroSGA" id="cNumeroSGA"></p> 
				</fieldset>
	Trimestre<input type="number" id="pre" name="tTrimestre"/> Semana<input type="week"  id="pre" name="tSemana"/> Data<input type="date" id="pre" name="tData"><br/><br/>
<tr><td id="dis">Disciplinas</td><td id="dis">Segunda</td><td id="dis">Terça</td><td id="dis">Quarta</td><td id="dis">Quinta</td><td id="dis">Sexta</td><td id="dis">MACs</td></tr>
						
						<!-- Tabelas com imputes para preencher as notas mano-->
						<!-- Dados de L portuguesa-->
						<tr><td>Língua Portuguesa</td><td id="preL"><input type="text" name="tNotaLingua3" id="cNotaLingua3"></td><td><input type="text" name="tNotaLingua3" id="cNotaLingua3"></td><td><input type="text" name="tNotaLingua3" id="cNotaLingua3"></td><td><input type="text"  name="tNotaLingua3" id="cNotaLingua3"></td><td><input type="text" name="tNotaLingua3" id="cNotaLingua3"></td><td><input type="text" name="tNotaLingua3" id="cNotaLingua3"></td></tr>
						<!-- Dados de matemática-->
						<tr><td>Matemática</td><td><input type="text"name="tNotaMatematica3" id="cNotaMatematica3"></td><td><input type="text"name="tNotaMatematica3" id="cNotaMatematica3"></td><td><input type="text"name="tNotaMatematica3" id="cNotaMatematica3"></td><td><input type="text"name="tNotaMatematica3" id="cNotaMatematica3"></td><td><input type="text"name="tNotaMatematica3" id="cNotaMatematica3"></td><td><input type="text"name="tNotaMatematica3" id="cNotaMatematica3"></td></tr>
						<!-- Dados Estudo do Meio-->
						<tr><td>Estudo Do Meio</td><td><input type="text" name="tNotaMeio3" id="cNotaMeio3"></td><td><input type="text"  name="tNotaMeio3" id="cNotaMeio3"></td><td><input type="text" name="tNotaMeio3" id="cNotaMeio3"></td><td><input type="text" name="tNotaMeio3" id="cNotaMeio3"></td><td><input type="text"  name="tNotaMeio3" id="cNotaMeio3"></td><td><input type="text"  name="tNotaMeio3" id="cNotaMeio3"></td></tr>
						<!-- Dados de EMP-->
						<tr><td>Educação Manual & Plástica</td><td><input type="text" name="tNotaEMP3" id="cNotaEMP3"></td><td><input type="text" name="tNotaEMP3" id="cNotaEMP3"></td><td><input type="text"  name="tNotaEMP3" id="cNotaEMP3"></td><td><input type="text"  name="tNotaEMP3" id="cNotaEMP3"></td><td><input type="text" name="tNotaEMP3" id="cNotaEMP3"></td><td><input type="text" name="tNotaEMP3" id="cNotaEMP3"></td></tr>
						<!-- Dados de Ed. Musical-->
						<tr><td>Educação Musical</td><td><input type="text" name="tNotaMusical3" id="cNotaMusical3"></td><td><input type="text" name="tNotaMusical3" id="cNotaMusical3"></td><td><input type="text" name="tNotaMusical3" id="cNotaMusical3"></td><td><input type="text" name="tNotaMusical3" id="cNotaMusical3"></td><td><input type="text" name="tNotaMusical3" id="cNotaMusical3"></td><td><input type="text"name="tNotaMusical3" id="cNotaMusical3"></td></tr>
						<!-- Dados de Ed. Física-->
						<tr><td>Educação Física</td><td><input type="text" name="tNotaFisica3" id="cNotaFisica3"></td><td><input type="text" name="tNotaFisica3" id="cNotaFisica3"></td><td><input type="text" name="tNotaFisica3" id="cNotaFisica3"></td><td><input type="text"name="tNotaFisica3" id="cNotaFisica3"></td><td><input type="text"name="tNotaFisica3" id="cNotaFisica3"></td><td><input type="text"name="tNotaFisica3" id="cNotaFisica3"></td></tr>

						<center><input type="submit" value="/salvar_caderneta" class="botao"/></center>
			
		</form>
	</table>
	<h3>Outras Informações</h3>
	<textarea name="informacoes" id="inf"></textarea>
	
	<!-- Botões para outras cadernetas-->
	<h4>Ir para a caderneta de outras classes</h4>
	<br><a href="cader.html"><input type="submit" value="6ª Classe" class="botao"/></a>
	<a href="caderneta5.html"><input type="submit" value="5ª Classe" class="botao"/></a>
	<a href="caderneta4.html"><input type="submit" value="4ª Classe" class="botao"/></a>
	<a href="caderneta2.html"><input type="submit" value="2ª Classe" class="botao"/></a>
	<a href="caderneta1.html"><input type="submit" value="1ª Classe" class="botao"/></a>
	
	

@endsection