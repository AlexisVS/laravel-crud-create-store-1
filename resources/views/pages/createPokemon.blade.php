@extends("template.index")
@section('content')
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="pokemonName" class="form-label">Nom</label>
            <input type="text" name="pokemonName" class="form-control" id="pokemonName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="pokemonType" class="form-label">Type</label>
            <input type="text" name="pokemonType" class="form-control" id="pokemonType" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="pokemonLevel" class="form-label">Niveau</label>
            <input type="text" name="pokemonLevel" class="form-control" id="pokemonLevel" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



@endsection
