<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tous les students</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Check more</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $poisson)
                <tr>
                    <td>{{ $poisson->id }}</td>
                    <td>{{ $poisson->name }}</td>
                    <td>{{ number_format($poisson->price / 100, 2) }} €</td>
                    <td><a href="/poissons/{{ $poisson->id }}">+ details</a></td>
                    <td>
                        <form method="post" action="/poissons/{{ $poisson->id }}">
                            @method('DELETE')
                            @csrf
                            <button>Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>