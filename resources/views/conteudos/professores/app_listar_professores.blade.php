@extends('layouts.app')

@section('conteudo')

 <div>
		<a href="/estudantes"><input type="submit" class="btn" value="Alunos"/></a>
		<table>
		<h1>Listando Os Professores Cadastrados</h1>
		<table>
			<thead>
			  <tr>
				  <th>Nome</th>
				  <th>Fotos </th>
			  </tr>
			</thead>
	
			<tbody>
			  <tr>
				@foreach($professores as $professor)
				<td><a href="estudante1.html"> {{ $professor -> nome }} </a></td>
				 
				@endforeach
			  </tr>
			  <tr>
				@foreach($professores as $professor)
				<td><a href="estudante1.html"> {{ $professor -> nome }} </a></td>
				 
				@endforeach
				
			  </tr>
			 			</tbody>
		  </table>
	</div>

@endsection