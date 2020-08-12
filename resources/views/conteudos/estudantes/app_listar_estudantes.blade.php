@extends('layouts.app')

@section('conteudo')

<br><br><br><br>

 <div class="caso" style="color: black;">



			  <div class="text-center">
			  <h1>Listando Estudantes Cadastrados</h1>
			  @foreach($estudantes as $estudante)
			  <hr> 
			  <a href="/visualizar_estudante/{{ $estudante -> id }}">  {{ $estudante -> nome }} </a> 
				 
				@endforeach
			  <hr><br><br>
			 <p>Ir Para a Lista de Professores...</p>
			 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Professores</button>
			  
			</div>

</div>

@endsection


<!-- 

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
				<td><a href="/visualizar_estudante/{{ $estudante -> id }}">  {{ $estudante -> nome }} </a></td>
				 
				@endforeach
			  </tr>
			  <tr>
				@foreach($estudantes as $estudante)
				<td><a href="/visualizar_estudante/{{ $estudante -> id }}"> {{ $estudante -> nome }} </a></td>
				 
				@endforeach
				
			  </tr>
			   
			</tbody>
		  </table>
		  
	</div>
		  
 -->