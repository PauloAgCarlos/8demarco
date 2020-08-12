<!DOCTYPE html>
<html>
<head>
    <title>ESCOLA 8 DE MARÇO</title>

    <!-- <link rel="stylesheet" type="text/css" href="css/materialize.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('folhasCss/sitlo_certificado.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('folhasCss/stilo_administrativo.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/materialize.css')); ?>">
 
</head>
<body class="container">
     

  <p> <a href="/declaracoes"> <input type="submit" value="DECLARAÇÕES" class="btn"></a></p>
    <div class="certificado">
    <div class="dir">
        <p class="v">Visto</p>
        <p> O Direitor Munucipal</p>                   
    <p>-----------------------------</p>
    <p class="nome"><b> Dr. Pedro tchissing </b></p>
    </div>
    <header>

        <img src="../imagens/angola.png">
        <p>República de Angola</p>
        <p>Ministério Da Educação Ciência & Tecnologia da Huíla</p>
        <p>Ensino geral</p>
        
    </header>
    <div class="container">
        <p><label for="cNumeroSGA"></label> <input type="number" name="tNumeroSGA" id="cNumeroSGA" placeholder="Número de SGA"> <a href="/visualizar_certificado/$ "> <button>OK</button> </a> </p>
    </div>

    <form method="post" action="/visualizar_certificado/tNumeroSGA">
    <input type="text" id="cNumeroSGA" name="tNumeroSGA" placeholder="Número de SGA">
    <input type="submit" value="OK">
    </form>


        <h1>Certificado de Habilitações Literárias</h1><br><br>
        
        <div class="conteudo">
       <p> a) Lic. <strong>Teresa M. Jimbo, </strong> Directora do complexo escolar nº 705 "8 de março Tchavola".
         Cerfifica que <strong> António Januário João </strong>, filho de João Cunha januário e de Albertina Nené,
        nascido(a) aos 27 de Outubro de 2000, natural da Matala, Municipio da Matala, Província da Huíla,
        Portador do BI/Cédula nº: 006516352HA042, Passado pelos arquivos de identificação Nacional em 04/04/2019.
        Concluiu neste complexo escolar no ano lectivo de 2019 o Iº Ciclo do Ensino Secundário tendo como resultado final <strong> Apto </strong>,
        Sob o processo nº 201987 pauta nº:, registados no SGE(Sistema de gestão Académica - D3VT3CN0). </p>
        <p> Com as seguintes classificações:</p><br><br>
    </div>
        <table>
            <tr class="primeira"><td>  Disciplinas </td><td> 7ª Classe </td> <td>8ª classe </td> <td>9ª classe</td> </tr>
            <tr><td>Lingua Portuguesa</td><td>20 Valores</td> <td> 18 valores</td> <td>16 Valores</td></tr></tr>
            <tr><td>Inglês/Francês</td><td>20 Valores</td> <td> 18 valores</td> <td>16 Valores</td></tr></tr>
            <tr><td>Matemática</td><td>20 Valores</td> <td> 18 valores</td> <td>16 Valores</td></tr></tr>
            <tr><td>Biologia</td><td>20 Valores</td> <td> 18 valores</td> <td>16 Valores</td></tr></tr>
            <tr><td>Física</td><td>20 Valores</td> <td> 18 valores</td> <td>16 Valores</td></tr></tr>
            <tr><td>Quimica</td><td>20 Valores</td> <td> 18 valores</td> <td>16 Valores</td></tr></tr>
            <tr><td>Geografia</td><td>20 Valores</td> <td> 18 valores</td> <td>16 Valores</td></tr></tr>
            <tr><td>História</td><td>20 Valores</td> <td> 18 valores</td> <td>16 Valores</td></tr></tr>
            <tr><td>Educação Física</td><td>20 Valores</td> <td> 18 valores</td> <td>16 Valores</td></tr></tr>
            <tr><td>Educação Moral e Cívica</td><td>20 Valores</td> <td> 18 valores</td> <td>16 Valores</td></tr></tr>
            <tr><td>Educação Visual e Plástica</td><td>20 Valores</td> <td> 18 valores</td> <td>16 Valores</td></tr></tr>
            <tr><td>Educação Laboral</td><td>20 Valores</td> <td> 18 valores</td> <td>16 Valores</td></tr></tr>
        </table>
<div class="container" id="final"> MÉDIA FINAL: 
</div>
        <div class="conteudo">
        <p>Por ser verdade e me ter solicitado passou-se o seguinte certificado que vai por mim assinado e </p>
        <p> com o carimbo em uso nesta instituição.</p>
        <p class="ultima">Complexo Escolar Nº 705 - "8 de Março", Lubango aos 2020</p>
        </div>
       <center><input type="submit" value="IMPRIMIR" class="btn"></center> 

    
    </div>
 

</body>
</html>
 
<?php /**PATH C:\laragon\www\8demarco\resources\views/conteudos/certificados9/app_certificados.blade.php ENDPATH**/ ?>