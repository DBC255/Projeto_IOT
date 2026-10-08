<div class="mt-5">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>descricao</th>
                        <th>status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ambiente as $a)
                    <tr>
                        <td>{{ $a->id }}</td>
                        <td>{{ $a->nome }}</td>
                        <td>{{ $a->descricao }}</td>
                        <td>
                            
                            <input type="checkbox" wire:click='status({{ $a->id }})' class="form-check-input" 
                            id="ambiente-{{$a ->id}}" role="switch"
                            @checked($a ->status)
                            >
                            <span class="badge bg-{{$a->status ? 'success':'danger'}}">{{$a->status ? 'Ativo':'Inativo'}}</span>
                            
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ route('ambiente.edit', ['id' => $a->id]) }}">editar</a>
                            <button type="submit" wire:click='delete({{ $a->id }})' class="btn btn-danger">Excluir</button>
                        </td>
                        </tr>
                    @endforeach
                </tbody>

    {{-- The best athlete wants his opponent at his best. --}}
</div>
