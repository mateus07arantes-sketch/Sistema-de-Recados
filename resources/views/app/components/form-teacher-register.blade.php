<div class="container d-flex justify-content-center align-items-center vh-100 pt-5">
    <div class="card-register p-4" style="width: 50%; max-width: 500px;">
        <h2 class="text-center mb-4">Cadastro</h2>
        <h6 class="text-center mb-4">Preencha todos os campos abaixo:</h6>

        <form class="row g-3">
            <div class="col-12">
                <label for="inputnome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputnome">
            </div>

            <div class="col-12">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>

            <div class="col-12">
                <label for="inputPassword4" class="form-label">Senha</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>

            <div class="col-12">
                <label for="inputDisciplina" class="form-label">Disciplina</label>
                <select class="form-select form-select-sm" id="inputDisciplina" aria-label="Selecione a disciplina">
                    <option selected disabled>Selecione a Disciplina</option>
                    <option value="matematica">Matemática</option>
                    <option value="portugues">Português</option>
                    <option value="ciencias">Ciências</option>
                    <option value="historia">História</option>
                    <option value="geografia">Geografia</option>
                    <option value="ingles">Inglês</option>
                    <option value="educacao_fisica">Educação Física</option>
                    <option value="artes">Artes</option>
                    <option value="filosofia">Filosofia</option>
                    <option value="sociologia">Sociologia</option>
                </select>
            </div>

            <div class="col-12">
                <label for="inputUnidade" class="form-label">Unidade SESI</label>
                <select class="form-select form-select-sm" id="inputUnidade" aria-label="Selecione a unidade SESI">
                    <option selected disabled>Selecione a Unidade SESI</option>
                    <option value="235">235 - BATATAIS</option>
                    <option value="236">236 - FRANCA</option>
                    <option value="237">237 - RIBEIRÃO PRETO</option>
                    <option value="238">238 - SÃO CARLOS</option>
                    <option value="239">239 - ARARAQUARA</option>
                    <option value="240">240 - SÃO JOSÉ DO RIO PRETO</option>
                    <option value="241">241 - JUNDIAÍ</option>
                    <option value="242">242 - CAMPINAS</option>
                    <option value="243">243 - PIRACICABA</option>
                    <option value="244">244 - SÃO PAULO</option>
                    <option value="245">245 - SANTO ANDRÉ</option>
                    <option value="246">246 - SÃO BERNARDO DO CAMPO</option>
                    <option value="247">247 - SÃO CAETANO DO SUL</option>
                    <option value="248">248 - GUARULHOS</option>
                    <option value="249">249 - OSASCO</option>
                    <option value="250">250 - SÃO VICENTE</option>
                    <option value="251">251 - RIBEIRÃO PIRES</option>
                    <option value="252">252 - MAUÁ</option>
                </select>
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Aceito os Termos de Serviço
                    </label>
                </div>
            </div>

            <div class="col-12">
                <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg w-100">Entrar</a>
            </div>
        </form>

        <div class="text-center mt-3">
            <p>Sou um aluno(a) - <a href="{{ route('students.view') }}">Cadastro de aluno</a></p>
        </div>
    </div>
</div>
