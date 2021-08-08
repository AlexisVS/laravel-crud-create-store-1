@extends("template.index")
@section('content')

    <div class="d-flex flex-wrap">
        @foreach ($pokemons as $pokemon)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $pokemon->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $pokemon->type }}</h6>
                    <p class="card-text">{{ $pokemon->level }}</p>
                </div>
            </div>

        @endforeach
    </div>

@endsection
