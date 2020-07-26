@extends('layouts.app')

@section('conteudo')

 <p> <a href="caderneta4Final.html"><input type="submit" value="FIM T" class="botao"></a> </p>
	<table>
			<h1>Caderneta de Avaliações(4ª classe)</h1>
			<form method="post" action="/salvar_caderneta">
				@csrf
				<fieldset>
					<legend>Dados Cruciais</legend>
					<p>Nome: <input type="text" name="tNomeCaderneta" id="cNomeCaderneta6"></p> 
					<p> Nº de SGA: <input type="number" name="tNumeroSGA" id="cNumeroSGA"></p> 
				</fieldset>
	Trimestre<input type="number" id="pre" name="tTrimestre"/> Semana<input type="week" id="pre" name="tSemana"/> Data<input type="date" id="pre" name="tData"><br/><br/>
<tr><td id="dis">Disciplinas</td><td id="dis">Segunda</td><td id="dis">Terça</td><td id="dis">Quarta</td><td id="dis">Quinta</td><td id="dis">Sexta</td><td id="dis">MACs</td></tr>
						
						<!-- Tabelas com imputes para preencher as notas mano-->
						<!-- Dados de L portuguesa-->
						<tr><td>Língua Portuguesa</td><td id="preL"><input type="number" name="tNotaLingua4" id="cNotaLingua4"></td><td><input type="number" name="tNotaLingua4" id="cNotaLingua4"></td><td><input type="number" name="tNotaLingua4" id="cNotaLingua4"></td><td><input type="number"  name="tNotaLingua4" id="cNotaLingua4"></td><td><input type="number" name="tNotaLingua4" id="cNotaLingua4"></td><td><input type="number" name="tNotaLingua4" id="cNotaLingua4"></td></tr>
						<!-- Dados de matemática-->
						<tr><td>Matemática</td><td><input type="number" name="tNotaMatematica4" id="cNotaMatematica4"></td><td><input type="number" name="tNotaMatematica4" id="cNotaMatematica4"></td><td><input type="number"name="tNotaMatematica4" id="cNotaMatematica4"></td><td><input type="number" name="tNotaMatematica4" id="cNotaMatematica4"></td><td><input type="number" name="tNotaMatematica4" id="cNotaMatematica4"></td><td><input type="number" name="tNotaMatematica4" id="cNotaMatematica4"></td></tr>
						<!-- Dados Estudo do Meio-->
						<tr><td>Estudo Do Meio</td><td><input type="number" name="tNotaMeio4" id="cNotaMeio4"></td><td><input type="number"   name="tNotaMeio4" id="cNotaMeio4"></td><td><input type="number"  name="tNotaMeio4" id="cNotaMeio4"></td><td><input type="number" name="tNotaMeio4" id="cNotaMeio4"></td><td><input type="number"   name="tNotaMeio4" id="cNotaMeio4"></td><td><input type="number"   name="tNotaMeio4" id="cNotaMeio4"></td></tr>
						<!-- Dados de EMP-->
						<tr><td>Educação Manual & Plástica</td><td><input type="number" name="tNotaEMP4" id="cNotaEMP4"></td><td><input type="number" name="tNotaEMP4" id="cNotaEMP4"></td><td><input type="number"  name="tNotaEMP4" id="cNotaEMP4"></td><td><input type="number" name="tNotaEMP4" id="cNotaEMP4"></td><td><input type="number" name="tNotaEMP4" id="cNotaEMP4"></td><td><input type="number" name="tNotaEMP4" id="cNotaEMP4"></td></tr>
						<!-- Dados de Ed. Musical-->
						<tr><td>Educação Musical</td><td><input type="number" name="tNotaMusical4" id="cNotaMusical4"></td><td><input type="number" name="tNotaMusical4" id="cNotaMusical4"></td><td><input type="number" name="tNotaMusical4" id="cNotaMusical4"></td><td><input type="number" name="tNotaMusical4" id="cNotaMusical4"></td><td><input type="number" name="tNotaMusical4" id="cNotaMusical4"></td><td><input type="number" name="tNotaMusical4" id="cNotaMusical4"></td></tr>
						<!-- Dados de Ed. Física-->
						<tr><td>Educação Física</td><td><input type="number" name="tNotaFisica4" id="cNotaFisica4"></td><td><input type="number" name="tNotaFisica4" id="cNotaFisica4"></td><td><input type="number" name="tNotaFisica4" id="cNotaFisica4"></td><td><input type="number" name="tNotaFisica4" id="cNotaFisica4"></td><td><input type="number" name="tNotaFisica4" id="cNotaFisica4"></td><td><input type="number" name="tNotaFisica4" id="cNotaFisica4"></td></tr>

						<center><input type="submit" class="botao" value="/salvar_caderneta"/></center>
			</form>
	</table>
	<h3>Outras Informações</h3>
	<textarea name="informacoes4" id="inf"></textarea>
	
	<!-- Botões para outras cadernetas-->
	<h4>Ir para a caderneta de outras classes</h4>
	<br><a href="cader.html"><input type="submit" value="6ª Classe" class="botao"/></a>
	<a href="caderneta5.html"><input type="submit" value="5ª Classe" class="botao"/></a>
	<a href="caderneta3.html"><input type="submit" value="3ª Classe" class="botao"/></a>
	<a href="caderneta2.html"><input type="submit" value="2ª Classe" class="botao"/></a>
	<a href="caderneta1.html"><input type="submit" value="1ª Classe" class="botao"/></a>
	
	

@endsection