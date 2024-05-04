<x-layout title="Accedi">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1>Accedi con il tuo account.</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

    <div class="mt-5">
        <form action="/login" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                    @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password') <span class="small text-danger">{{ $message }}</span> @enderror

                    <a href="/forgot-password" class="small">Hai dimenticato la password?</a>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </div>
            </div>
        </form>
    </div>

        </div>
    </div>
</x-layout>