<div class="mt-5">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>código</th>
                        <th>tipo</th>
                        <th>descricao</th>
                        <th>status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sensores as $s)
                    <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->codigo }}</td>
                        <td>{{ $s->tipo }}</td>
                        <td>{{ $s->descricao }}</td>
                        <td>
                            
                            <input type="checkbox" wire:click='status({{ $s->id }})' class="form-check-input" id="status-{{$s ->id}}" role="switch"
                            @checked($s ->status)
                            >
                            <span class="badge bg-{{$s->status ? 'success':'danger'}}">{{$s->status ? 'Ativo':'Inativo'}}</span>
                            
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ route('sensor.edit', ['id' => $s->id]) }}">editar</a>
                            <button type="submit" wire:click='delete({{ $s->id }})' class="btn btn-danger">Excluir</button>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
{{-- The whole world belongs to you. --}}
</div>
