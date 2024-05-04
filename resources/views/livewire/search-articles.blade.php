<div>
    <div class="row g-4">
        <input type="text" class="form-control" wire:model.live="search">
    </div>
    <div class="col-12">
        <h4 class="mt-4">Articoli</h4>

        <ul>
            @foreach($articles as $article)
            <li>{{ $article->title }}</li>
            @endforeach
        </ul>
    </div>
</div>
