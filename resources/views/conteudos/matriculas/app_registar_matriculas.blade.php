@extends('layouts.app')

@section('conteudo')

 <div>
		<h1>Matricular</h1>
		<form method="post" action="/salvar_matricula">

			@csrf

	<fieldset>
		<legend>Informações Obrigatórias</legend>
		<p><label for="cNomeMatricula">Nome:<input type="text" name="tNomeMatricula" id="cNomeMatricula" placeholder="Nome Completo"></label></p>
		<p><label for="cFotoMatricula">Foto:<input type="file" name="tFotoMatricula" id="cFotoMatricula"></label></p>
		<p><label for="cDataNascimentoMatricula">Data de Nascimento:<input type="date" name="tDataNascimentoMatricula" id="cDataNascimentoMatricula"></label></p>
		<p><label for="cNumeroBiMatricula">Nº de BI/Cédula:<input type="number" name="tNumeroBiMatricula" placeholder="006516352HA042" id="cNumeroBiMatricula"></label></p>
		<p><label for="cPeriodo">Período</label><select name="tPeriodo" id="cPeriodo">
			<option>Laboral</option>
			<option>Pós-Laboral</option>
		</select></p>
		<p><label for="cTurno">Turno</label><select name="tTurno" id="cTurno">
			<option>Manhã</option>
			<option>Tarde</option>
		</select></p>
		<p><label for="cClasse">Classe:<select name="tClasse" id="cClasse">
			<option>1ª</option>
			<option>2ª</option>
			<option>3ª</option>
			<option>4ª</option>
			<option>5ª</option>
			<option>6ª</option>
			<option>7ª</option>
			<option>8ª</option>
			<option>9ª</option>
		</select></label></p>
		<p> Número de SGA<input type="number" name="tNumeroSGA"></p>
	</fieldset>
	
	<center><input type="image" src="../imagens/cadastrar.jpg"/ value="/salvar_matricula"></center> 	

	</form>
	</div>
	<a href="cadastroE.html"><input type="submit" value="/salvar_matricula" class="botao"></a>

@endsection