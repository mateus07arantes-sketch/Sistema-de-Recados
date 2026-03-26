<div class="banner mb-5 pt-5">
    <img src="{{ asset('images/banner_visualizar.png') }}" alt="Banner" class="img-fluid w-100">
</div>

<div class="text-center mt-5">
    <h1>Recados:</h1>
</div>

<div class="mt-5">
    {{-- Filtros de urgência e ordenação --}}
    <form method="GET" action="{{ route('notices.index') }}" class="row mb-4">
        <div class="col-md-4">
            <label for="urgency" class="form-label">Filtrar por urgência</label>
            <select name="urgency" id="urgency" class="form-select">
                <option value="">Todos</option>
                <option value="urgent" {{ request('urgency') == 'urgent' ? 'selected' : '' }}>Urgente</option>
                <option value="non_urgent" {{ request('urgency') == 'non_urgent' ? 'selected' : '' }}>Não urgente</option>
            </select>
        </div>

        <div class="col-md-4">
            <label for="order" class="form-label">Ordenar por data</label>
            <select name="order" id="order" class="form-select">
                <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>Mais novos primeiro</option>
                <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>Mais antigos primeiro</option>
            </select>
        </div>

        <div class="col-md-4 d-flex align-items-end">
            <button type="submit" class="btn btn-primary w-100">
                <i class="fa-solid fa-filter"></i> Aplicar Filtros
            </button>
        </div>
    </form>

    {{-- Listagem de recados --}}
    <div class="row">
        @foreach ($notices as $notice)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">
                            <a href="{{ route('notices.show', $notice->id) }}">{{ $notice->title }}</a>
                        </h5>
                        <p class="card-text">
                            <strong>Data e Hora:</strong> {{ $notice->made_at->format('d/m/Y H:i') }}
                        </p>
                        <p class="card-text">
                            <strong>Status:</strong>
                            @if ($notice->urgency)
                                <span class="text-danger"><i class="fa-solid fa-circle-exclamation"></i> Urgente</span>
                            @else
                                <span class="text-success"><i class="fa-solid fa-thumbs-up"></i> Não urgente</span>
                            @endif
                        </p>
                        <a href="{{ route('notices.edit', $notice->id) }}" class="btn btn-outline-primary mt-auto align-self-start">
                            <i class="fa-solid fa-pencil"></i> Editar
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $notices->links() }}
    </div>
</div>