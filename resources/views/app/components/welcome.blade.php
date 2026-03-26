<div class="container welcome-container d-flex flex-wrap align-items-center justify-content-center min-vh-100">
    <div class="row w-100">
        <div class="col-lg-6 d-flex justify-content-center mb-4 mb-lg-0">
            <img src="/images/gif-no-delay-welcome.gif" alt="Banner" class="img-fluid welcome-image">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center text-center text-lg-start px-4">
            <h1 class="fw-bold display-4">Bem-vindo</h1>
            <h2 class="text fs-4 mb-3">Ao melhor sistema de recados educacionais!</h2>
            <p class="text-muted mb-4">
                Aqui você pode acessar recados importantes, se cadastrar como aluno e ficar por dentro de tudo que acontece em sua unidade.
            </p>
            <div>
                <a href="{{ route('dashboard') }}" class="btn btn-sistem btn-lg w-100 mb-3">Navegar</a>
                <a href="{{ route('students.view') }}" class="btn btn-cad btn-outline-primary btn-lg w-100">Cadastrar-se</a>
            </div>
        </div>
    </div>
</div>