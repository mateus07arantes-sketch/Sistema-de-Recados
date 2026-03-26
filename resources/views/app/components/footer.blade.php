<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<footer class="mt-5 py-5">
    <div class="container">
        <div class="row text-center text-md-start">
            <div class="col-md-4 mb-4">
                <h4 class="fw-bold mb-3">Tá no Quadro</h4>
                <p class="mb-1"><i class="fa-solid fa-star"></i> Mural de Recados da Turma</p>
                <p><i class="fa-solid fa-calendar"></i> Atualizado em 2025</p>
            </div>

            <div class="col-md-4 mb-4">
                <h5 class="fw-semibold mb-3">Links rápidos</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('welcome') }}"><i class="fa-solid fa-house"></i> Início</a></li>
                    <li class="mb-2"><a href="{{ route('dashboard') }}"><i class="fa-solid fa-table"></i> Dashboard</a></li>
                    <li class="mb-2"><a href="{{ route('notices.create')}}"><i class="fa-solid fa-plus"></i> Adicionar</a></li>
                    <li class="mb-2"><a href="{{ route('notices.index') }}"><i class="fa-solid fa-eye"></i> Visualizar</a></li>
                    <li class="mb-2"><a href="{{ route('about_us') }}"><i class="fa-solid fa-heart"></i> Sobre nós</a></li>
                    <li class="mb-2"><a href="{{ route('students.view') }}"><i class="fa-solid fa-address-card"></i> Cadastre-se</a></li>
                    <li class="mb-2"><a href="{{ route('students.list') }}"><i class="fa-solid fa-user"></i> Usuários</a></li>
                </ul>
            </div>

            <div class="col-md-4 mb-4">
                <h5 class="fw-semibold mb-3">Mensagem</h5>
                <blockquote>
                    Este site foi feito de alunos para alunos, com o objetivo de facilitar a comunicação, a organização e a troca de informações no dia a dia da turma. Acreditamos que um ambiente colaborativo fortalece nossa convivência e torna tudo mais prático e acessível.
                </blockquote>
                <small>— Equipe Tá no Quadro</small>
            </div>
        </div>

        <hr>
        <div class="text-center mt-3">
            <p class="mb-0">&copy; 2025 Tá no Quadro</p>
        </div>
    </div>
</footer>