
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier le poisson numéro {{ $poisson->id }}</title>
    <style></style>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="post" action="/poissons/{{ $poisson->id }}">
        @method('PATCH')
        @csrf
        <input type="text" name="name" value="{{ $poisson->nom }}">
        <input type="text" name="price" value="{{ $poisson->prix }}">
        <textarea name="description">{{ $poisson->description }}</textarea>
        <input type="text" name="picture" value="{{ $poisson->image }}">
        <button>Enregistrer</button>
    </form>

</body>
</html>
