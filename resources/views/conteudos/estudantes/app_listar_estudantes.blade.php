@extends('layouts.app')

@section('conteudo')

 <div>
		<a href="/professores"><input type="submit" value="Professores" class="btn"/></a>
		<table>
		<h1>Listando Os Alunos Cadastrados</h1>
		<table>
			<thead>
			  <tr>
				  <th>Nomes</th>
				  <th>Nomes</th>
			  </tr>
			</thead>
	
			<tbody>
			  <tr>
			  	@foreach($estudantes as $estudante)
				<td><a href="estudante1.html"> {{ $estudante -> nome }} </a></td>
				 
				@endforeach
			  </tr>
			  <tr>
				@foreach($estudantes as $estudante)
				<td><a href="estudante1.html"> {{ $estudante -> nome }} </a></td>
				 
				@endforeach
				
			  </tr>
			   
			</tbody>
		  </table>
	</div>

@endsection