<div class="d-flex position-absolute top-50 start-50 translate-middle py-4">
    <form wire:submit.prevent='store'>
        <h1 class="h3 mb-3 fw-normal">Criação de ambientes</h1>
        <div class="form-floating">
            <input type="text" wire:model='nome' class="form-control" id="floatingInput" placeholder="nome">
            <label>Nome do Ambiente</label>
        </div>
        <div class="form-floating">
            <input type="text" wire:model='descricao' class="form-control" id="floatingInput" placeholder="">
            <label>descrição</label>
        </div>
        <div class="form-check">
            <p>status</p>
            <input class="form-check-input" wire:model='status' type="checkbox" name="exampleRadios" id="exampleRadios1" value="op1"
                checked>
            <label class="form-check-label" for="exampleRadios1">
                Ativo
            </label>
        </div>
        <button class="btn btn-success w-100 py-2" type="submit">Criar ambiente</button>
    </form>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
</div>
