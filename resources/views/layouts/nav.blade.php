 <header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary mb-2">
    <a class="navbar-brand" href="/admin">8 de Março</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a class="nav-link" href="/">Início</a></li>
        <li class="nav-item  active dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Registar</a>
          <div class="dropdown-menu">
            <a href="/registar_estudante" class="dropdown-item">Estudantes</a>
            <a href="/registar_disciplinas" class="dropdown-item">Disciplinas</a>
            <a href="/registar_professor" class="dropdown-item">Professores</a>
            <a href="/registar_matriculas" class="dropdown-item">Matrículas</a>
            
              
          </div>
          </li>
        <li class="nav-item  active dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Notas</a>
        <div class="dropdown-menu">
          <a href="/notas" class="dropdown-item"> Ens. Primário</a>
          <a href="/notas" class="dropdown-item"> Iº Ciclo</a>
        </div>
        </li>
        <li class="nav-item  active dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Turmas</a>
          <div class="dropdown-menu">
            <a href="/turmas_ensino_primario" class="dropdown-item"> Ens. Primário</a>
            <a href="/turmas_primeiro_ciclo" class="dropdown-item"> Iº Ciclo</a>
          </div>
          </li>
          <li class="nav-item  active dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Listar</a>
            <div class="dropdown-menu">
              <a href="/estudantes" class="dropdown-item"> Estudantes</a>
              <a href="/professores" class="dropdown-item"> Professores</a>
            </div>
            </li>
        <li class="nav-item active"><a class="nav-link" href="/certificados9">Certificados</a></li>
        <li class="nav-item active"><a class="nav-link" href="/visualizar_termo">Termos</a></li>
        <li class="nav-item active"><a class="nav-link" href="/horarios">Horários</a></li>
        <li class="nav-item active"><a class="nav-link" href="/criar_mini_pautas">Pautas</a></li>
       
        
        
        
      </ul>
      <form class="form-inline mt-2 mt-md-0" action="/pesquisar_estudante">
        <input name="texto" class="form-control mr-sm-2" type="text" placeholder="Procurar" aria-label="Search">
        <button class="btn btn-dark my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>
</header>