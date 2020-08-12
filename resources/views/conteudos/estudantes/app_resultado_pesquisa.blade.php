@extends('layouts.app')

@section('conteudo')

<br><br><br><br>

 <div class="caso" style="color: black;">



			  <div class="text-center">
			  <h1>Listando Estudantes Cadastrados</h1>
			  @foreach($pesquisas as $pesquisa)
			  <hr> 
			  <a href="/visualizar_estudante/{{ $estudante -> id }}">  {{ $pesquisa -> nome }} </a> 
				 
				@endforeach
			  <hr><br><br>
			 <p>Ir Para a Lista de Professores...</p>
			 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Professores</button>
			  
			</div>

</div>

@endsection

