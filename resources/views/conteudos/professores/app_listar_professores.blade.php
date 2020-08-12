@extends('layouts.app')

@section('conteudo')

<br><br><br><br>

 <div class="caso" style="color: black;">



			  <div class="text-center">
			  <h1>Listando Professores Cadastrados</h1>
			  	 @foreach($professores as $professor)
			  <hr> 
			  <a href="/visualizar_professor/{{ $professor -> id }}">  {{ $professor -> nome }} </a> 
				 
				@endforeach
				<hr><br><br>
			 <p>Ir Para a Lista de Professores...</p>
			 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Professores</button>
			  
			</div>

</div>

@endsection
