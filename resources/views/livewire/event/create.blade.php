<form>
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" placeholder="Digite um nome para o seu evento">
    </div>
    <div class="row">
        <div class="col-10 mb-3">
            <label for="street" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="street" placeholder="Digite o endereço do evento">
        </div>
        <div class="col-2 mb-3">
            <label for="number" class="form-label">Número</label>
            <input type="text" class="form-control" id="number">
        </div>
    </div>
    <div class="row">
        <div class="col-6 mb-3">
            <label for="country" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="country">
        </div>
        <div class="col-6 mb-3">
            <label for="state" class="form-label">Estado</label>
            <input type="text" class="form-control" id="state">
        </div>
    </div>
    <div class="row">

        <div class="col-4 mb-3">
            <label for="date" class="form-label">Data</label>
            <input type="date" class="form-control" id="date">
        </div>
        <div class="col-4 mb-3">
            <label for="duration" class="form-label">Duração</label>
            <input type="float" class="form-control" id="duration" placeholder="Duração do evento em horas">
        </div>
        <div class="col-4">
            <label for="">Organizador</label>
            <select class="mt-2 form-select" aria-label="Default select example">
                <option selected>Selecione o organizador</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>


    </div>
    <div class="row mb-4 ms-1">
        <div class="card col-4">
            <label class="mt-2" for="">Tipo de evento</label>
            <div class="mt-2 col-4 form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Público
                </label>
            </div>
            <div class=" form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Privado
                </label>
            </div>

            <div class="col-4 mt-2 mb-2">
                <label for="price" class="form-label">Preço</label>
                <input type="price" class="form-control" id="price">
            </div>
        </div>
        <div class="col-8 ">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Deixe uma descrição aqui" id="floatingTextarea2"
                    style="height: 170px"></textarea>
                <label for="floatingTextarea2">Descrição do evento</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-4">
            <a href="{{route('create-people')}}" class="btn btn-success" role="button" aria-pressed="true">+</a>
            Adicionar convidados
        </div>

    </div>

    <button type="submit" class="btn btn-success">Criar Evento</button>
    <a href="{{route('show-events')}}" class="btn btn-secondary" role="button" aria-pressed="true">Voltar</a>

    </button>
</form>