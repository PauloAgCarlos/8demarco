@extends('layouts.app')

@section('conteudo')

 <table>
		<h1>Classificação final no Trimestre</h1>
		<form method="post">
			<fieldset>
				<legend>Dados Cruciais</legend> 
				<p> Nº de SGA: <input type="number" name="tNumeroSGA" id="cNumeroSGA"></p> 
				<p>Nome: <input type="text" name="tNomeCaderneta2" id="cNomeCaderneta2" readonly></p>
			</fieldset>
			<div id="center"> <label for="cTrmistre2">Trimestre </label><select name="tTrmistre2" id="cTrmistre2">
				<option checked>I</option>
				<option>II</option>
				<option>III</option>
			</select> Semana<input type="week" name="tSemana2" id="cSemana2"/> Data<input type="date" name="tData2" id="cData2"><br/><br/></div> 
			</fieldset>
<tr><td id="dis">Disciplinas</td><td id="dis">MAC</td><td id="dis">CPP</td><td id="dis">CT</td></tr>
					
					<!-- Tabelas com imputes para preencher as notas mano-->
					<!-- Dados de L portuguesa-->
					<tr><td>Língua Portuguesa</td><td id="preL"><input type="number" name="tNotaLingua2MAC" id="cNotaLingua2MAC"></td><td><input type="number" name="tNotaLingua2CPP" id="cNotaLingua2CPP"></td><td><input type="number" name="tNotaLingua2CT" id="cNotaLingua2CT" readonly></td></tr>
					<!-- Dados de matemática-->
					<tr><td>Matemática</td><td><input type="number" name="tNotaMatematica2MAC" id="cNotaMatematica2MAC"></td><td><input type="number" name="tNotaMatematica2CPP" id="cNotaMatematica2CPP"></td><td><input type="number" name="tNotaMatematica2CT" id="cNotaMatematica2CT" readonly></td></tr>
					<!-- Dados Estudo do Meio-->
					<tr><td>Estudo Do Meio</td><td><input type="number" name="tNotaMeio2MAC" id="cNotaMeio2MAC"></td><td><input type="number"   name="tNotaMeio2CPP" id="cNotaMeio2CPP"></td><td><input type="number" name="tNotaMeio2CT" id="cNotaMeio2CT" readonly></td></tr>
					<!-- Dados de EMP-->
					<tr><td>Educação Manual & Plástica</td><td><input type="number" name="tNotaEMP2MAC" id="cNotaEMP2MAC"></td><td><input type="number" name="tNotaEMP2CPP" id="cNotaEMP2CPP"></td><td><input type="number"  name="tNotaEMP2CT" id="cNotaEMP2CT" readonly></td></tr>
					<!-- Dados de Ed. Musical-->
					<tr><td>Educação Musical</td><td><input type="number" name="tNotaMusical2MAC" id="cNotaMusical2MAC"></td><td><input type="number" name="tNotaMusical2CPP" id="cNotaMusical2CPP"></td><td><input type="number" name="tNotaMusical2CT" id="cNotaMusical2CT" readonly></td></tr>
					<!-- Dados de Ed. Física-->
					<tr><td>Educação Física</td><td><input type="number" name="tNotaFisica2MAC" id="cNotaFisica2MAC"></td><td><input type="number" name="tNotaFisica2CPP" id="cNotaFisica2CPP"></td><td><input type="number" name="tNotaFisica2CT" id="cNotaFisica2CT" readonly></td></tr>
		
</table>
    <div class="inf">
	<h3>Outras Informações</h3>
    <textarea name="informacoes" id="inf"></textarea>
</div>
    <center><input type="submit" class="botao" value="ENVIAR"/></center>
</form>

@endsection