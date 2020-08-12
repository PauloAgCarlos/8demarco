

<?php $__env->startSection('conteudo'); ?>

<br><br><br><br>
  <div>
    <div class="caso">
      <h1>Cadastro de Disciplinas</h1>
      <form method="post" id="fEstudante" action="/salvar_disciplina" style="color: black;">
        <?php echo csrf_field(); ?>
          <legend>Dados Importantes</legend>
          <p><label for="cNomeCadeira">Nome: </label><input type="text" name="tNomeCadeira" id="cNomeCadeira" placeholder="Nome Cadeira" required/></p>
          <p><label for="cDocente">Docente que leciona: </label> <input type="text" name="tDocente" id="cDocente" required/></p>
          <p><label for="cNom">Quantos tempos por semana: </label><input type="number" name="tTemposPorSemana" id="cTemposPorSemana" required/>
                    <p><label for="cBotao"><input type="submit" value="CADASTRAR" id="cBotao" name="tBotao" class="btn btn-outline-success my-2 my-sm-0"></label></p>
                    
                    </p>
            </form>
        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\8demarco\resources\views/conteudos/disciplinas/app_registar_disciplinas.blade.php ENDPATH**/ ?>