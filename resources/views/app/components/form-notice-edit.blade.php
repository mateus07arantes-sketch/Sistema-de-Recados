<div class="container d-flex justify-content-center align-items-center vh-0 pt-5">
  <div class="card p-4 custom-card" style="width: 90%; max-width: 1200px;">
    <div class="text-center mt-3">
      <h3>Editar Recado</h3>
    </div>

    {{-- Mensagem de sucesso --}}
    @if (session('success'))
      <div class="alert alert-success mt-3 text-center">
        {{ session('success') }}
      </div>
    @endif

    <div class="container mt-4">
      <form action="{{ route('notices.update', $notice->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Título</label>
          <input type="text" class="form-control" id="title" name="title"
            placeholder="Digite o título do lembrete" value="{{ old('title', $notice->title) }}">
          @error('title')
            <div class="text-danger-cards">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Informação do Recado</label>
          <textarea class="form-control" id="description" name="description" rows="4"
            placeholder="Digite as informações do Recado">{{ old('description', $notice->description) }}</textarea>
          @error('description')
            <div class="text-danger-cards">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="made_at" class="form-label">Data</label>
          <input type="datetime-local" class="form-control" id="made_at" name="made_at"
            value="{{ old('made_at', $notice->made_at ? $notice->made_at->format('Y-m-d\TH:i') : null) }}">
          @error('made_at')
            <div class="text-danger-cards">{{ $message }}</div>
          @enderror
        </div>

        <input type="hidden" id="urgency" name="urgency" value="{{ old('urgency', $notice->urgency ? '1' : '0') }}">

        <div class="text-center p-4">
          <a href="{{ route('notices.index') }}" class="btn btn-outline-primary me-2 btn-voltarcad">Voltar</a>
          <button type="submit" class="btn btn-outline-primary btn-salvarcad">Atualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>