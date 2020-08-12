

<?php $__env->startSection('conteudo'); ?>

 <form action="" method="POST">
    <div class="aviso">
        <fieldset>
            <legend>Liberar a Emissão, impressão e entrega das Declarações</legend>
        <p>Olá senhor(a), nesta aba você pode liberar a Emissão, impressão e entrega das Declarações do Ensino Primário(1ª à 5ª Classe)</p>
        <p> E Iº Ciclo(7ª & 9ª Classe). Basta apenas arrastar o botão abaixo em sim quando pedir a confirmação.</p>
        <p>Caso contrário simplesmente vá para onde desejar. Esperamos ter ajudado.</p>
        <div class="switch center">
            <label>
                Não
                <input type="checkbox" name="tOpcaoDeclaracoes"id="cOpcaoDeclaracoes">
                <span class="lever"></span>
               Sim
            </label>
        </div>
        </fieldset>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\8demarco\resources\views/conteudos/declaracoes/app_declaracoes.blade.php ENDPATH**/ ?>