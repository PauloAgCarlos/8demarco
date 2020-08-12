

<?php $__env->startSection('conteudo'); ?>

 <br><br><br><br>
   
    <div class="caso text-center" style="color: black;">
        <h1> Dados Importantes</h1>

        <p><img src="<?php echo e($professor -> foto); ?>" class=" bd-placeholder-img rounded-circle" id="imagem"></p>
           <p>Nome: <?php echo e($professor -> nome); ?> </p> 
           <p>Nº de Agente: <?php echo e($professor -> numeroAgente); ?></p> 
            <p>Data de Nascimento : <?php echo e($professor -> dataNascimento); ?></p> 
            <p>Local de Nascimento: <?php echo e($professor -> localNascimento); ?></p> 
            <p>Nº de BI: <?php echo e($professor -> numeroBilhete); ?></p> 
            <p>Estado cívil: <?php echo e($professor -> estadoCivil); ?></p> 
            <!-- <p>Data de Emição: <?php echo e($professor -> nome); ?></p>  -->
            <!-- <p>Data de Expiração: <?php echo e($professor -> nome); ?></p>  -->
            <p> Sexo: <?php echo e($professor -> sexo); ?></p>
        <h1> Informações Adicionais</h1>

       
        <p>Cidade Onde Mora: <?php echo e($professor -> morada); ?></p> 
        <p>Bairro: <?php echo e($professor -> bairro); ?></p> 
    
     
 
    <h1> Dados Acadêmicos</h1>
    <p>Nivel Acadêmico: <?php echo e($professor -> nivelAcademico); ?></p>    
    <p>Função: <?php echo e($professor -> funcao); ?></p>    
    <!-- <p> Classe: <?php echo e($professor -> nome); ?></p>    -->
    <!-- <p>Turma: <?php echo e($professor -> nome); ?></p> -->
    <p>Usuário: <?php echo e($professor -> nome); ?></p> 
    
    <hr>
    <a href="/editar_professor/<?php echo e($professor -> id); ?>"> <input type="button" value="EDITAR" class="btn btn-outline-success my-2 my-sm-0"></a>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\8demarco\resources\views/conteudos/professores/app_visualizar_professor.blade.php ENDPATH**/ ?>