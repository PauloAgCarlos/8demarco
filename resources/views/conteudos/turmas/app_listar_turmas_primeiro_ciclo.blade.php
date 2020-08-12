@extends('layouts.app')

@section('conteudo')

<link rel="stylesheet" type="text/css" href="{{ asset('folhasCss/style.css') }}">


<br><br><br><br>
	<div>
		<div class="caso">
			<h1>Turmas do Primeiro Ciclo</h1>
			
			<table class="table">
				<tr id="titulo"><td>Iniciação</td><td>1ª Classe</td><td>2ª Classe</td><td>3ª Classe</td><td>4ª Classe</td><td>5ª Classe</td><td>6ª Classe</td> </tr>
				<tr><td><a href="turmaA.html">Turma A</a></td><td>Turma A</td><td>Turma A</td><td>Turma A</td><td>Turma A</td><td>Turma A</td><td>Turma A</td> </tr>
				<tr><td>Turma B</td><td>Turma B</td><td>Turma B</td><td>Turma B</td><td>Turma B</td><td>Turma B</td><td>Turma B</td> </tr>
				<tr><td>Turma C</td><td>Turma C</td><td>Turma C</td><td>Turma C</td><td>Turma C</td><td>Turma C</td><td>Turma C</td> </tr>
				<tr><td>Turma D</td><td>Turma D</td><td>Turma D</td><td>Turma D</td><td>Turma D</td><td>Turma D</td><td>Turma D</td> </tr>
				<tr><td>Turma E</td><td>Turma E</td><td>Turma E</td><td>Turma E</td><td>Turma E</td><td>Turma E</td><td>Turma E</td> </tr>
				<tr><td>Turma F</td><td>Turma F</td><td>Turma F</td><td>Turma F</td><td>Turma F</td><td>Turma F</td><td>Turma F</td> </tr>
			
			</table>
			<p class="text-center">Ir para turmas do Iº ciclo....</p>
			<a href="turmas1.html"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Iº Ciclo</button></a>
	</div>

@endsection