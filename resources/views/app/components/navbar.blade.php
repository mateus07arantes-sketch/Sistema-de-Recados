<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('dashboard') }}">
      <img src="/images/logo_ta_no_quadro.png" alt="Logo Ta no quadro" width="110" height="100">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-4">
        <li class="nav-item mx-2">
          <a class="nav-link" href="{{ route('welcome') }}">Início</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="{{ route('notices.create') }}">Adicionar Recado</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="{{ route('notices.index') }}">Visualizar Recados</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="{{ route('about_us') }}">Sobre nós</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="{{ route('students.list') }}">Visualizar Usuários</a>
        </li>
      </ul>      

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 px-4">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('students.view') }}">Cadastre-se <i class="fa-solid fa-circle-user"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>