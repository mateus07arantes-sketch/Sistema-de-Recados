<div class="container d-flex justify-content-center align-items-center vh-0 pt-5">
    <div class="card p-4 custom-card" style="width: 90%; max-width: 1200px;">
      <div class="text-center mt-4">
        <h3>Adicionar Recado</h3>
    </div>

      @if (session('success'))
      <div class="alert alert-success mt-3">
          {{ session('success') }}
      </div>
      @endif
  
      <form action="{{ route('notices.store') }}" method="POST">
          @csrf
  
        <div class="mb-3">
          <label for="title" class="form-label">Título</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Digite o título do lembrete" value="{{ old('title') }}">
          @error('title')
              <div class="text-danger-cards">{{ $message }}</div>
          @enderror
        </div>
  
        <div class="mb-3">
          <label for="description" class="form-label">Informações do Recado</label>
          <textarea class="form-control" id="description" name="description" rows="4" placeholder="Digite as informações do Recado">{{ old('description') }}</textarea>
          @error('description')
              <div class="text-danger-cards">{{ $message }}</div>
          @enderror
        </div>
  
        <div class="mb-3">
          <label for="made_at" class="form-label">Data</label>
          <input type="datetime-local" class="form-control" id="made_at" name="made_at" value="{{ old('made_at') }}">
          @error('made_at')
              <div class="text-danger-cards">{{ $message }}</div>
          @enderror
        </div>
  
        <input type="hidden" id="done" name="done" value="0">
  
        <div class="form-check">
          <input type="hidden" name="urgency" value="0">
          <input class="form-check-input" type="checkbox" id="urgency" name="urgency" value="1" {{ old('urgency') ? 'checked' : '' }}>
          <label class="form-check-label" for="checkIndeterminate">
            Recado urgente
          </label>
        </div>
  
        <div class="text-center pt-4">
          <a href="{{ route('dashboard') }}" class="btn btn-outline-primary me-2 btn-voltarcad">Voltar</a>
          <button type="submit" class="btn btn-outline-primary btn-salvarcad">Salvar</button>
        </div>
  
      </form>
    </div>
  </div>  
</div>