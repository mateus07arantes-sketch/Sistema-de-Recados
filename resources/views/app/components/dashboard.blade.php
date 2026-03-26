<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="row pt-4 mt-5">
    <div class="col-12">
        <center>
            <h2 class="titulo-quadro">Tá no Quadro!</h2>
        </center>
        <center>
            <h3 class="mini-recado">O quadro virou digital, mas o recado continua claro.</h3>
        </center>

        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="/images/dashboard_image.png" class="imagem-menor" alt="Banner Dashboard">
                </div>
                <div class="col-md-6">
                    <h2 class="recado">Este é o Tá no Quadro!</h2>
                    <p>Aqui você pode visualizar e organizar todos os recados importantes do seu dia a dia escolar. Acesse seus recados, veja os mais importantes e mantenha-se sempre informado!</p>
                    <div class="mt-3">
                        <a href="{{ route('notices.index') }}" class="btn btn-visualizar me-2">Visualizar</a>
                        <a href="{{ route('notices.create') }}" class="btn btn-add">Adicionar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <form action="{{ route('dashboard') }}" method="GET" class="mb-4">
                <div class="input-group">
                    <input type="datetime-local" name="search_date" class="form-control" value="#">
                    <button type="submit" class="btn btn-outline-primary">
                        <i class="fa-solid fa-magnifying-glass"></i> Filtrar
                    </button>
                </div>
            </form>
        </div>
        

        <div class="row">
            @forelse ($notices as $notice)
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('notices.show', $notice->id) }}">
                                    {{ $notice->title }}
                                </a>
                            </h5>
                            <p class="card-text">{{ $notice->description }}</p>
                            <p class="card-text">
                                <small class="text-muted">
                                    {{ $notice->made_at->format('d/m/Y H:i') }}
                                </small>
                            </p>
                            <p>
                                @if ($notice->urgency)
                                    <span class="badge bg-danger">Recado urgente</span>
                                @else
                                    <span class="badge bg-success">Recado não-urgente</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info">
                        Nenhum recado encontrado para a data selecionada.
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>