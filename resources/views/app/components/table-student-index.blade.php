<div class="row mt-3 mb-5 pt-5">
    <div class="col">
        <div class="table-responsive">
            <h1 class="mb-5">Visualizar Usuários</h1>

            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            @if ($students->count())
                <table class="table table-striped table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Cidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->city }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-center">
                    {{ $students->links() }}
                </div>

                <div class="text-center pt-4">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-cadastrar btn-lg w-40">Voltar</a>
                </div>

            @else
                <div class="alert alert-info">Nenhum aluno encontrado</div>
            @endif
        </div>
    </div>
</div>