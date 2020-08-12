

<?php $__env->startSection('conteudo'); ?>

<br><br><br><br>

 <div class="caso" style="color: black;">



			  <div class="text-center">
			  <h1>Listando Professores Cadastrados</h1>
			  	 <?php $__currentLoopData = $professores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $professor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			  <hr> 
			  <a href="/visualizar_professor/<?php echo e($professor -> id); ?>">  <?php echo e($professor -> nome); ?> </a> 
				 
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<hr><br><br>
			 <p>Ir Para a Lista de Professores...</p>
			 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Professores</button>
			  
			</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\8demarco\resources\views/conteudos/professores/app_listar_professores.blade.php ENDPATH**/ ?>