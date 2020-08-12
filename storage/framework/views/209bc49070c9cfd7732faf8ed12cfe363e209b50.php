

<?php $__env->startSection('conteudo'); ?>

 <br><br><br><br>
   
    <div class="caso text-center" style="color: black;">
        <h1> Dados Importantes</h1>

        <p><img src="<?php echo e($estudante -> foto); ?>" class=" bd-placeholder-img rounded-circle" id="imagem"></p>
           <p>Nome: <?php echo e($estudante -> nome); ?> </p> 
           <p>Nº de SGA: <?php echo e($estudante -> id); ?></p> 
            <p>Data de Nascimento : <?php echo e($estudante -> dataNascimento); ?></p> 
            <p>Local de Nascimento: <?php echo e($estudante -> localNascimento); ?></p> 
            <p>Nº de BI: <?php echo e($estudante -> numeroBilhete); ?></p> 
            <!-- <p>Estado cívil: <?php echo e($estudante -> nome); ?></p>  -->
            <p>Data de Emição: <?php echo e($estudante -> dataEmissaoBilhete); ?></p> 
            <p>Data de Expiração: <?php echo e($estudante -> dataExpiracaoBilhete); ?></p> 
            <p> Sexo: <?php echo e($estudante -> sexo); ?></p>
        <h1> Informações Adicionais</h1>

       
        <p>Cidade Onde Mora: <?php echo e($estudante -> morada); ?></p> 
        <p>Bairro: <?php echo e($estudante -> bairro); ?></p> 
    
    <h1> Informações do Encarregado de Educação</h1>
      <p>Nome: <?php echo e($estudante -> nomeEncarregado); ?></p>  
       <p>Nº de Telefone: <?php echo e($estudante -> numeroEncarregado); ?></p> 
        <p> Relação com a Criança: <?php echo e($estudante -> relacaoComEncarregado); ?></p>
 
    <h1> Dados Acadêmicos</h1>
    <!-- <p>Período: <?php echo e($estudante -> nome); ?></p>     -->
    <!-- <p>Turno: <?php echo e($estudante -> nome); ?></p>     -->
    <!-- <p> Classe: <?php echo e($estudante -> nome); ?></p>    -->
    <!-- <p>Turma: <?php echo e($estudante -> nome); ?></p> -->
    <p>Usuário: <?php echo e($usuario -> name); ?></p> 
    
    <hr>
   
    <h1> Dados Acadêmicos</h1>
  
    <p>Turno: <?php echo e($matricula-> turno); ?></p>    
    <p> Classe: <?php echo e($matricula -> classe); ?></p>   
    <p>Turma: <?php echo e($matricula -> turma); ?></p>
    <hr>
    <p>Criado por: Wander <?php echo e($estudante -> criadoPor); ?></p> 
    <p>Data de criação: <?php echo e($estudante -> created_at); ?></p>
    <hr>
    
    <p>Alterado por: <?php echo e($estudante -> editadoPor); ?></p>
    <p>Data de Alteração: <?php echo e($estudante -> updated_at); ?></p>
    <hr>
    <hr>
    <a href="/editar_estudante/<?php echo e($estudante -> id); ?>"> <input type="button" value="EDITAR" class="btn btn-warning my-2 my-sm-0 "></a>
    <a href="/confirmar_matricula/<?php echo e($estudante -> id); ?>"> <input type="button" value="Confirmar Matrícula" class="btn btn-success my-2 my-sm-0"></a>
    <a href="/eliminar_estudante/<?php echo e($estudante -> id); ?>"> <input type="button" value="Eliminar" class="btn btn-danger my-2 my-sm-0"></a>
    </div>

    </div>

 <script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\8demarco\resources\views/conteudos/estudantes/app_visualizar_estudante.blade.php ENDPATH**/ ?>