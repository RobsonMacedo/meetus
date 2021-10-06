<div>
    <x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Criar Evento') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder="Digite um nome para o seu evento">
                            </div>
                            <div class="row">
                                <div class="col-10 mb-3">
                                    <label for="street" class="form-label">Endereço</label>
                                    <input type="text" class="form-control" id="street"
                                        placeholder="Digite o endereço do evento">
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

                            <button type="submit" class="btn btn-primary">Criar Evento</button>
                            <a href="{{route('dashboard')}}" class="btn btn-secondary active" role="button"
                                aria-pressed="true">Voltar</a>

                            </button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</div>