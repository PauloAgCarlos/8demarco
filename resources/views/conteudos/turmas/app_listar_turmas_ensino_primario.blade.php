@extends('layouts.app')

@section('conteudo')

	<div>
		<a href="turmas1.html"><input type="submit" value="TURMAS 1º CICLO" class="btn"/></a>
		
		<h1>TURMAS ENS. PRIMÁRIO</h1>
		<table class="center">
			<thead>
			  <tr>
				  <th>INICIAÇÃO</th>
				  <th>1 ª CLASSE</th>
			  </tr>
			</thead>
	
			<tbody>
			  <tr>
				<td><a href="turmaA.html"> TURMA A</a></td>
				<td><a href="#!"> TURMA A</a> </td>
				
			  </tr>
			  <tr>
				<td>TURMA B</td>
				<td>TURMA B</td>
				
			  </tr>
			  <tr>
				<td>TURMA C</td>
				<td>TURMA C</td>
				
			  </tr>
			</tbody> <br><br><br>
			<thead>
				<tr>
					<th>2 ª CLASSE</th>
					<th>3 ª CLASSE</th>
				</tr>
			  </thead>
	  
			  <tbody>
				<tr>
				  <td>TURMA A</td>
				  <td>TURMA A </td>
				  
				</tr>
				<tr>
				  <td>TURMA B</td>
				  <td>TURMA B</td>
				  
				</tr>
				<tr>
				  <td>TURMA C</td>
				  <td>TURMA C</td>
				  
				</tr>
			  </tbody> 
			  <thead>
				<tr>
					<th>4ª CLASSE</th>
					<th>5 ª CLASSE</th>
					<th>6ª CLASSE</th>
				</tr>
			  </thead>
	  
			  <tbody>
				<tr>
				<td>TURMA A</td>
				<td>TURMA A</td>
				<td>TURMA A </td>
				  
				</tr>
				<tr>
				  <td>TURMA B</td>
				  <td>TURMA B</td>
				  <td>TURMA B</td>
				  
				</tr>
				<tr>
				  <td>TURMA C</td>
				  <td>TURMA C</td>
				  <td>TURMA C</td>
				  
				</tr>
			  </tbody> 
		  </table>
	</div>

@endsection