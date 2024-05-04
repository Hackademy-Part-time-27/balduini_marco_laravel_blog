<div class="rounded shadow-sm p-3">
    @if($userId)
    <h4>Modifica un Utente</h4>
    @else
    <h4>Crea un nuovo Utente</h4>
    @endif

    <x-success />

    <form wire:submit="submit" class="mt-4">
        <div class="row g-3">
            <div class="col-12">
                <label for="name">Nome</label>
                <input type="text" id="name" class="form-control" wire:model="name">
                @error('name') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" wire:model="email">
                @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" wire:model="password">
                @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12 mt-3">
                @if($userId)
                <button type="submit" class="btn btn-primary">Modifica Utente</button>
                <button type="button" wire:click="userReset" class="btn btn-warning ms-auto">Crea Utente</button>
                @else
                <button type="submit" class="btn btn-primary">Crea Utente</button>
                @endif
            </div>
        </div>
    </form>
</div>
