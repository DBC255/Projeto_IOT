<div>
    <div class="d-flex position-absolute top-50 start-50 translate-middle py-4">
    <form wire:submit.prevent='update'>
        <h1 class="h3 mb-3 fw-normal">Criação de sensores</h1>
        <div class="form-floating">
            <input type="text" wire:model='codigo' class="form-control" id="floatingInput" placeholder="nome">
            <label>codigo do sensor (especie de nomenclatura)</label>
        </div>
        <div class="form-floating">
            <input type="text" wire:model='tipo' class="form-control" id="floatingInput" placeholder="nome">
            <label>tipo do sensor (o que faz)</label>
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
        <div class="form-check">
            <select wire:model='ambiente_id' name="" id="">
                <option value="">selecione um Ambiente ...</option>
                @foreach ($ambiente as $a)
                    <option value="{{ $a->id }}">{{ $a->nome }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success w-100 py-2" type="submit">Criar sensor</button>
    </form>
    {{-- Nothing in the world is as soft and yielding as water. --}}
</div>
