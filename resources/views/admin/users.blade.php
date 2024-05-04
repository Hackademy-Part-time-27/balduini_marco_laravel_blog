<x-layout title="Elenco Utenti">
    <h1>Elenco Utenti</h1>

    <div class="row mt-5">
        <div class="col-lg-3">
            <livewire:user-form />
        </div>
        <div class="col-lg-9">
            <livewire:users-list />
        </div>
    </div>
</x-layout>