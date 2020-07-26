@extends('layouts.app')

@section('conteudo')

 <p> <a href="caderneta2Final.html"><input type="submit" value="FIM T" class="botao"></a> </p>

	<table>
			<h1>Caderneta de Avaliações(2ª classe)</h1>
			<form method="post">
				<fieldset>
					<legend>Dados Cruciais</legend>
					<p>Nome: <input type="text" name="tNomeCaderneta6" id="cNomeCaderneta6"></p> 
					<p> Nº de SGA: <input type="number" name="tNumeroSGA" id="cNumeroSGA"></p> 
				</fieldset>

	Trimestre<input type="number" id="pre" name="tTrimestre" /> Semana<input type="week" id="pre" name="tSemana"/> Data<input type="date" id="pre" name="tData"><br/><br/>
<tr><td id="dis">Disciplinas</td><td id="dis">Segunda</td><td id="dis">Terça</td><td id="dis">Quarta</td><td id="dis">Quinta</td><td id="dis">Sexta</td><td id="dis">MACs</td></tr>
						
						<!-- Tabelas com imputes para preencher as notas mano-->
						<!-- Dados de L portuguesa-->
						<tr><td>Língua Portuguesa</td><td id="preL"><input type="number" name="tNotaLingua2" id="cNotaLingua2"></td><td><input type="number" name="tNotaLingua2" id="cNotaLingua2"></td><td><input type="number"  name="tNotaLingua2" id="cNotaLingua2"></td><td><input type="number" name="tNotaLingua2" id="cNotaLingua2"></td><td><input type="number" name="tNotaLingua2" id="cNotaLingua2"></td><td><input type="number" name="tNotaLingua2" id="cNotaLingua2"></td></tr>
						<!-- Dados de matemática-->
						<tr><td>Matemática</td><td><input type="number" name="tNotaMatematica2" id="cNotaMatematica2"></td><td><input type="number" name="tNotaMatematica2" id="cNotaMatematica2"></td><td><input type="number" name="tNotaMatematica2" id="cNotaMatematica2"></td><td><input type="number" name="tNotaMatematica2" id="cNotaMatematica2"></td><td><input type="number" name="tNotaMatematica2" id="cNotaMatematica2"></td><td><input type="number" name="tNotaMatematica2" id="cNotaMatematica2"></td></tr>
						<!-- Dados Estudo do Meio-->
						<tr><td>Estudo Do Meio</td><td><input type="number" name="tNotaMeio2" id="cNotaMeio2"></td><td><input type="number"   name="tNotaMeio2" id="cNotaMeio2"></td><td><input type="number"  name="tNotaMeio2" id="cNotaMeio2"></td><td><input type="number" name="tNotaMeio2" id="cNotaMeio2"></td><td><input type="number"  name="tNotaMeio2" id="cNotaMeio2"></td><td><input type="number"  name="tNotaMeio2" id="cNotaMeio2"></td></tr>
						<!-- Dados de EMP-->
						<tr><td>Educação Manual & Plástica</td><td><input type="number" name="tNotaEMP2" id="cNotaEMP2"></td><td><input type="number" name="tNotaEMP2" id="cNotaEMP2"></td><td><input type="number"  name="tNotaEMP2" id="cNotaEMP2"></td><td><input type="number" name="tNotaEMP2" id="cNotaEMP2"></td><td><input type="number" name="tNotaEMP2" id="cNotaEMP2"></td><td><input type="number" name="tNotaEMP2" id="cNotaEMP2"></td></tr>
						<!-- Dados de Ed. Musical-->
						<tr><td>Educação Musical</td><td><input type="number" name="tNotaMusical2" id="cNotaMusical2"></td><td><input type="number" name="tNotaMusical2" id="cNotaMusical2"></td><td><input type="number" name="tNotaMusical2" id="cNotaMusical2"></td><td><input type="number" name="tNotaMusical2" id="cNotaMusical2"></td><td><input type="number" name="tNotaMusical2" id="cNotaMusical2"></td><td><input type="number" name="tNotaMusical2" id="cNotaMusical2"></td></tr>
						<!-- Dados de Ed. Física-->
						<tr><td>Educação Física</td><td><input type="number" name="tNotaFisica2" id="cNotaFisica2"></td><td><input type="number" name="tNotaFisica2" id="cNotaFisica2"></td><td><input type="number" name="tNotaFisica2" id="cNotaFisica2"></td><td><input type="number" name="tNotaFisica2" id="cNotaFisica2"></td><td><input type="number" name="tNotaFisica2" id="cNotaFisica2"></td><td><input type="number" name="tNotaFisica2" id="cNotaFisica2"></td></tr>
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
	<a href="caderneta1.html"><input type="submit" value="1ª Classe" class="botao"/></a>
	
	

@endsection