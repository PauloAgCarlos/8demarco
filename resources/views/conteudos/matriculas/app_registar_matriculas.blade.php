@extends('layouts.app')

@section('conteudo')

 
<br><br><br><br>
	<div style="color: black;">
		
		<div class="caso  text-center">
			<h1>Matricular</h1>
		<form method="post" action="/salvar_matricula">
			@csrf
	<fieldset>
		<legend>Informações Obrigatórias</legend>
		<p> <label for="cNumeroSGA"></label> Número de SGA: <input type="number" name="tNumeroSGA" id="cNumeroSGA" required></p>
		<p><label for="cNome">Nome:</label> <input type="text" name="tNome" id="cNome"  ></p>
		<p><label for="cTurma"> Turma:</label><input type="text" name="tTurma" id="cTurma" required></p>
		<p><label for="cTurma"> Usuário:</label><input type="text" name="tUsuario" id="cUsuario" required></p>
		<!-- <p><label for="cTurma"> Ano Lectivo: </label><input type="date" name="tAnoLectivo" id="cAnoLectivo" required></p> -->
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
		
	</fieldset>
	<hr>
	<input type="submit" value="Enviar" class="btn btn-outline-success my-2 my-sm-0 text-center" id="align">	
	</form>
</div>
	</div>


@endsection