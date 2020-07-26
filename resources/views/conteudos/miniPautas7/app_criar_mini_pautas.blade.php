@extends('layouts.app')

@section('conteudo')

 <form action="" method="POST">
        <fieldset>
            <legend> Mini-Pautas</legend>
            <p> Data:<input type="date" name="tDataMiniPautas7"> Curso:<input type="text" name="tNomeCurso"></p>
            <p>Turma: <input type="text" name="tNomeTurma" >Disciplina:<input type="text" name="tDisciplina"></p>
            <p>Professor:<input type="text" name="tNomeProfessor"> Classe: <input type="text" name="tClasse"></p>
        </fieldset>
   <table>
       <!-- Inputes para preenchimento de notas nas mini-pautas da sétima classe.
         tMAC7 é o name da célula correspondente a média das avaliações contínuas do primeiro trimestre da 7ª classe
         tMACSegundo é o name da célula correspondente a média das avaliações contínuas do segundo trimestre
         tMACSegundo é o name da célula correspondente a média das avaliações contínuas do terceiro trimestre da 7ª classe
        
         tCPP7 é o name  da célula correspondente a classificação atribuída pelo professor do segundo trimestre da 7ª classe
         tCPPSegundo7 é o name  da célula correspondente a classificação atribuída pelo professor do segundo trimestre da 7ª classe
         tCPPTerceiro7 é o name  da célula correspondente a classificação atribuída pelo professor do terceiro trimestre da 7ª classe
         
         tCT17 é o name  da célula correspondente a classificação trimestral e o número "1" corresponde ao trimestre da 7ªclasse. 
         tCT27 é o name  da célula correspondente a classificação trimestral e o número "2" corresponde ao trimestre da 7ªclasse.
         tCT17 é o name  da célula correspondente a classificação trimestral e o número "3" corresponde ao trimestre da 7ªclasse.

    
        -->
        <tr id="dis"> <td>Nº de SGA</td> <td>  Nome Completo</td> <td>MAC</td> <td>CPP</td> <td>CT1</td> <td>MAC</td> <td>CPP</td> <td>CT2</td> <td>MAC</td> <td>CPP</td><td>CT3</td><td>CF</td></tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td>
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td>
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td>
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td>
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td>
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td><td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> <tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
         <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td>
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td> 
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td>
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td>
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td>
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
        <tr><td> <input type="number" name="tNumeroSGA"></td> <td><input class="nome" type="text" name="tNomeAluno" id=""></td> <td><input type="number" name="tMAC7"></td> <td><input type="number" name="tCPP7" ></td> <td><input type="number" name="tCT17"></td> <td><input type="number" name="tMedia"></td>
        <td><input type="number" name="tMACSegundo7"></td> <td><input type="number" name="tCPPSegundo7" ></td> <td><input type="number" name="tCT27"></td> 
        <td><input type="number" name="tMACTerceiro7"></td> <td><input type="number" name="tCPPTerceiro7" ></td> <td><input type="number" name="tCT37"></td> </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
   
   
   
    </table>
    <center><input type="image" src="../imagens/cadastrar.jpg"/></center>  
</form>

@endsection