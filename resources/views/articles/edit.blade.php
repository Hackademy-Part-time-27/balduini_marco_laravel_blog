<x-layout title="Modifica Articolo">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <a href="{{ route('articles.index')}}" class="small text-secondary">Indietro</a>
            <h1>Modifica Articolo</h1>

        <x-success />

    <div class="mt-5">
        <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3">
                    <div class="col-12">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" maxlength="150" value="{{ old('title', $article->title)  }}">
                        @error('title') <div class="text-danger small fw-bold">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-12">
                        <label for="categories">Categoria</label>
                            @foreach($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input" 
                                @checked($article->categories->contains($category->id))
                                name="categories[]" type="checkbox" value="{{ $category->id }}">
                                <label class="form-check-label" for="flexCheckDefault">
                                  {{ $category->name }}
                                </label>
                              </div>
                            @endforeach
                      @error('categories') <div class="text-danger small fw-bold">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-12">
                        <label for="description">Descrizione breve</label>
                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="5" maxlength="255">{{ old('description', $article->description) }}</textarea>
                        @error('description') <div class="text-danger small fw-bold">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-12">
                        <label for="image">Immagine</label>
                        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" maxlength="50">
                        @error('image') <div class="text-danger small fw-bold">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Modifica</button>
                    </div>
                </div>
        </form>
    </div>
        </div>
    </div>
</x-layout>