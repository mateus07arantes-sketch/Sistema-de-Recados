<div class="row mt-3 mb-5">
    <div class="col-12 col-md-8 col-lg-10 mx-auto p-4">
        <h3 class="text-center mb-4">Detalhes do Recado</h3>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
            </div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h3 class="card-title">{{ $notice->title }}</h3>
                <p class="card-text">{{ $notice->description }}</p>
                <p class="card-text">
                    <strong>Data e Hora:</strong> {{ $notice->made_at->format('d/m/Y H:i') }}
                </p>
                <p class="card-text">
                    <strong>Status:</strong>
                    @if ($notice->urgency)
                        <span class="badge bg-danger">Urgente</span>
                    @else
                        <span class="badge bg-success text-white">Não urgente</span>
                    @endif
                </p>
            </div>
        </div>

        <div class="mt-4 d-flex justify-content-between flex-wrap gap-2">
            <form action="{{ route('notices.destroy', $notice->id) }}" method="POST"
                  onsubmit="return confirm('Tem certeza que deseja deletar este lembrete?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">Deletar</button>
            </form>

            @if (!$notice->urgency)
                <form action="{{ route('notices.urgency', $notice->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="done" value="1">
                    <a href="{{ route('notices.index') }}" class="btn btn-outline-primary me-2">Voltar</a>
                    <button type="submit" class="btn btn-outline-warning">Marcar como urgente</button>
                </form>
            @else
                <form action="{{ route('notices.no-urgency', $notice->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="done" value="0">
                    <a href="{{ route('notices.index') }}" class="btn btn-outline-primary me-2">Voltar</a>
                    <button type="submit" class="btn btn-outline-success">Marcar como não urgente</button>
                </form>
            @endif
        </div>
    </div>
</div>