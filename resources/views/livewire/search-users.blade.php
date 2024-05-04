<div>
    <div class="row g-4">
        <div class="col-12">
            <input type="text" class="form-control" placeholder="Cerca utente" wire:model.live="search">
        </div>
        
        <div class="col-12">
            <h5>Elenco Utenti</h5>

            <ul>
                @foreach($users as $user)
                <li>{{ $user->name }} {{ $user->email }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
