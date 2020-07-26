@extends('layouts.app')

@section('conteudo')

 	<table>
			<h1>Classificação final no Trimestre</h1>
			<form method="post">
				<fieldset>
					<legend>Dados Cruciais</legend> 
					<p> Nº de SGA: <input type="number" name="tNumeroSGA" id="cNumeroSGA"></p> 
					<p>Nome: <input type="text" name="tNomeCaderneta4" id="cNomeCaderneta4" readonly></p>
				</fieldset>
				<div id="center"> <label for="cTrmistre4">Trimestre </label><select name="tTrmistre4" id="cTrmistre4">
					<option checked>I</option>
					<option>II</option>
					<option>III</option>
				</select> Semana<input type="week" name="tSemana4" id="cSemana4"/> Data<input type="date" name="tData3" id="cData3"><br/><br/></div> 
				</fieldset>
<tr><td id="dis">Disciplinas</td><td id="dis">MAC</td><td id="dis">CPP</td><td id="dis">CT</td></tr>
						
						<!-- Tabelas com imputes para preencher as notas mano-->
						<!-- Dados de L portuguesa-->
						<tr><td>Língua Portuguesa</td><td id="preL"><input type="number" name="tNotaLingua4MAC" id="cNotaLingua4MAC"></td><td><input type="number" name="tNotaLingua4CPP" id="cNotaLingua4CPP"></td><td><input type="number" name="tNotaLingua4CT" id="cNotaLingua4CT" readonly></td></tr>
						<!-- Dados de matemática-->
						<tr><td>Matemática</td><td><input type="number" name="tNotaMatematica4MAC" id="cNotaMatematica4MAC"></td><td><input type="number" name="tNotaMatematica4CPP" id="cNotaMatematica4CPP"></td><td><input type="number" name="tNotaMatematica4CT" id="cNotaMatematica4CT" readonly></td></tr>
						<!-- Dados Estudo do Meio-->
						<tr><td>Estudo Do Meio</td><td><input type="number" name="tNotaMeio4MAC" id="cNotaMeio4MAC"></td><td><input type="number"   name="tNotaMeio4CPP" id="cNotaMeio4CPP"></td><td><input type="number" name="tNotaMeio4CT" id="cNotaMeio4CT" readonly></td></tr>
						<!-- Dados de EMP-->
						<tr><td>Educação Manual & Plástica</td><td><input type="number" name="tNotaEMP4MAC" id="cNotaEMP4MAC"></td><td><input type="number" name="tNotaEMP4CPP" id="cNotaEMP4CPP"></td><td><input type="number"  name="tNotaEMP4CT" id="cNotaEMP4CT" readonly></td></tr>
						<!-- Dados de Ed. Musical-->
						<tr><td>Educação Musical</td><td><input type="number" name="tNotaMusical4MAC" id="cNotaMusical4MAC"></td><td><input type="number" name="tNotaMusical4CPP" id="cNotaMusical4CPP"></td><td><input type="number" name="tNotaMusical4CT" id="cNotaMusical4CT" readonly></td></tr>
						<!-- Dados de Ed. Física-->
						<tr><td>Educação Física</td><td><input type="number" name="tNotaFisica4MAC" id="cNotaFisica4MAC"></td><td><input type="number" name="tNotaFisica4CPP" id="cNotaFisica4CPP"></td><td><input type="number" name="tNotaFisica4CT" id="cNotaFisica4CT" readonly></td></tr>
			
    </table>
    <div class="inf">
	<h3>Outras Informações</h3>
    <textarea name="informacoes" id="inf"></textarea>
</div>
    <center><input type="submit" class="botao" value="ENVIAR"/></center>
</form>

@endsection