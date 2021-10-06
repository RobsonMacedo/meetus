<form>
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="people-name" placeholder="Digite o nome do convidado">
    </div>
    <div class="mb-3">
        <label for="surname" class="form-label">Apelido</label>
        <input type="text" class="form-control" id="people-surname" placeholder="Digite o apelido se for o caso">
    </div>

    <div class="row mb-4">
        <div class="col-4">
            <a href="{{route('create-people')}}" class="btn btn-success" role="button" aria-pressed="true">+</a>
            Adicionar Contatos
        </div>

    </div>

    <button type="submit" class="btn btn-success">Adicionar</button>
    <a href="{{route('create-event')}}" class="btn btn-secondary" role="button" aria-pressed="true">Voltar</a>
</form>