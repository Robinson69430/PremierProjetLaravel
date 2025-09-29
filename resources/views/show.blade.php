<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Un seul student</title>
    <style></style>
</head>
<body>
<img src="{{ $student->picture }}" alt="photo" width="150" />
<ul>
    <li>{{ $poisson->id }}</li>
    <li>{{ $poisson->nom }}</li>
    <li>{{ $poisson->prix }}</li>
    <li>{{ $poisson->type }}</li>
    <li>{{ $poisson->image }}</li>
</ul>
</body>
</html>