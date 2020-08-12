@extends('layouts.app')

@section('conteudo')



<h1>TURMAS ENS. PRIMÁRIO</h1>
		<table class="center">
			<thead>
			  <tr>
				  <th>INICIAÇÃO</th>
		 @foreach($turmas as $turma)
			<td><a href="#"> {{ $turma -> nome }} </a></td>
		@endforeach
			  </tr>
			</thead>
	
			   
			  <thead>
			  	<th>ENSINO PRIMÁRIO</th>
				<tr>
					
					 
				</tr>
			  </thead>
	  
			  <tbody>
				<tr>
				@foreach($turmas as $turma)
			<td><a href="#"> {{ $turma -> nome }} </a></td>
				@endforeach
				  
				</tr>
				<th>1º CICLO</th>
				<tr>

				  @foreach($turmas as $turma)
			<td><a href="#"> {{ $turma -> nome }} </a></td>
				@endforeach
				  
				</tr>
				 
			  </tbody> 
		  </table>

@endsection