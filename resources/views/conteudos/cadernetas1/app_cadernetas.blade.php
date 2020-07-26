@extends('layouts.app')

@section('conteudo')

 <p> <a href="caderneta1Final.html"> <input type="submit" value="FIM T" class="botao"></a> </p>
	<table>
			<h1>Caderneta de Avaliações(1ª classe)</h1>
			<form method="post">
				<fieldset>
					<legend>Dados Cruciais</legend>
					<p>Nome: <input type="text" name="tNomeCaderneta" id="cNomeCaderneta"></p> 
					<p> Nº de SGA: <input type="number" name="tNumeroSGA" id="cNumeroSGA"></p> 
				</fieldset>
				Trimestre<input type="number" id="pre" name="tTrimestre"/> Semana<input type="week" id="pre" name="tSemana"/> Data<input type="date" id="pre" name="tData"><br/><br/>
<tr><td id="dis">Disciplinas</td><td id="dis">Segunda</td><td id="dis">Terça</td><td id="dis">Quarta</td><td id="dis">Quinta</td><td id="dis">Sexta</td><td id="dis">MACs</td></tr>
						
						<!-- Tabelas com imputes para preencher as notas -->
						<!-- Dados de L portuguesa-->
		<tr><td>Língua Portuguesa</td><td id="preL"><input type="text" name="tNotaLingua1" id="cNotaLingua1"></td><td><input type="text"name="tNotaLingua1" id="cNotaLingua1"></td><td><input type="text"name="tNotaLingua1" id="cNotaLingua1"></td><td><input type="text" name="tNotaLingua1" id="cNotaLingua1"></td><td><input type="text"name="tNotaLingua1" id="cNotaLingua1"></td><td><input type="text"name="tNotaLingua1" id="cNotaLingua1"></td></tr>
		<!-- Dados de matemática-->
		<tr><td>Matemática</td><td><input type="text"name="tNotaMatematica1" id="cNotaMatematica1"></td><td><input type="text"name="tNotaMatematica1" id="cNotaMatematica1"></td><td><input type="text"name="tNotaMatematica1" id="cNotaMatematica1"></td><td><input type="text"name="tNotaMatematica1" id="cNotaMatematica1"></td><td><input type="text"name="tNotaMatematica1" id="cNotaMatematica1"></td><td><input type="text"name="tNotaMatematica1" id="cNotaMatematica1"></td></tr>
		<!-- Dados Estudo do Meio-->
		<tr><td>Estudo Do Meio</td><td><input type="text" name="tNotaMeio1" id="cNotaMeio1"></td><td><input type="text"  name="tNotaMeio1" id="cNotaMeio1"></td><td><input type="text" name="tNotaMeio1" id="cNotaMeio1"></td><td><input type="text" name="tNotaMeio1" id="cNotaMeio1"></td><td><input type="text" name="tNotaMeio1" id="cNotaMeio1"></td><td><input type="text" name="tNotaMeio1" id="cNotaMeio1"></td></tr>
		<!-- Dados de EMP-->
		<tr><td>Educação Manual & Plástica</td><td><input type="text" name="tNotaEMP1" id="cNotaEMP1"></td><td><input type="text"name="tNotaEMP1" id="cNotaEMP1"></td><td><input type="text"name="tNotaEMP1" id="cNotaEMP1"></td><td><input type="text"name="tNotaEMP1" id="cNotaEMP1"></td><td><input type="text"name="tNotaEMP1" id="cNotaEMP1"></td><td><input type="text"name="tNotaEMP1" id="cNotaEMP1"></td></tr>
		<!-- Dados de Ed. Musical-->
		<tr><td>Educação Musical</td><td><input type="text" name="tNotaMusical1" id="cNotaMusical1"></td><td><input type="text" name="tNotaMusical1" id="cNotaMusical1"></td><td><input type="text" name="tNotaMusical1" id="cNotaMusical1"></td><td><input type="text" name="tNotaMusical1" id="cNotaMusical1"></td><td><input type="text" name="tNotaMusical1" id="cNotaMusical1"></td><td><input type="text" name="tNotaMusical1" id="cNotaMusical1"></td></tr>
		<!-- Dados de Ed. Física-->
		<tr><td>Educação Física</td><td><input type="text" name="tNotaFisica1" id="cNotaFisica1"></td><td><input type="text" name="tNotaFisica1" id="cNotaFisica1"></td><td><input type="text" name="tNotaFisica1" id="cNotaFisica1"></td><td><input type="text"name="tNotaFisica1" id="cNotaFisica1"></td><td><input type="text"name="tNotaFisica1" id="cNotaFisica1"></td><td><input type="text"name="tNotaFisica1" id="cNotaFisica1"></td></tr>
		
		</form>
	</table>
	<h3>Outras Informações</h3>
	<textarea name="informacoes" id="inf"></textarea>
	<center><input type="submit" value="ENVIAR" class="botao"/></center>
	<!-- Botões para outras cadernetas-->
	<h4>Ir para a caderneta de outras classes</h4>
	<br><a href="cader.html"><input type="submit" value="6ª Classe" class="botao"/></a>
	<a href="caderneta5.html"><input type="submit" value="5ª Classe" class="botao"/></a>
	<a href="caderneta4.html"><input type="submit" value="4ª Classe" class="botao"/></a>
	<a href="caderneta3.html"><input type="submit" value="3ª Classe" class="botao"/></a>
	<a href="caderneta2.html"><input type="submit" value="2ª Classe" class="botao"/></a>
	
	

@endsection