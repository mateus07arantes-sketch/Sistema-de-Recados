<div class="container d-flex justify-content-center align-items-center vh-0 pt-5">
    <div class="card-register p-4" style="width: 50%; max-width: 500px;">
        <h2 class="text-center mb-4">Cadastro</h2>
        <h6 class="text-center mb-4">Preencha todos os campos abaixo:</h6>

        <form class="row g-3" method="POST" action="{{ route('students.store') }}">
            @csrf
            <div class="col-12">
                <label for="inputnome" class="form-label">Nome Completo</label>
                <input type="text" name="name" class="form-control" id="inputnome">
                @error('name')
                    <div class="text-danger-cards">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail">
                @error('email')
                    <div class="text-danger-cards">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <label for="inputPassword4" class="form-label">Senha (mínimo de 8 dígitos)</label>
                <input type="password" name="password" class="form-control" id="inputPassword">
                @error('password')
                    <div class="text-danger-cards">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <label for="inputCity4" class="form-label">Cidade</label>
                <input type="text" name="city" class="form-control" id="inputCity">
                @error('city')
                    <div class="text-danger-cards">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-cadastrar btn-lg w-100">Cadastrar</button>
            </div>

            <div class="col-12">
                <a href="{{ route('welcome') }}" class="btn btn-primary btn-cadastrar btn-lg w-100">Voltar</a>
            </div>
        </form>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
    </div>
</div>