<div>
    <h4>Elenco Utenti</h4>

    <div class="mt-4">
           <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="text-end">
                        <button wire:click="edit({{ $user->id }})" class="btn btn-sm btn-secondary">modifica</button>
                        <button wire:click="delete({{ $user->id }})" class="btn btn-sm btn-danger">delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
           </table>
    </div>
</div>
