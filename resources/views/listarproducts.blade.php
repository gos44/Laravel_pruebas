<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #350400;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            margin: 20px auto;
        }

        th, td {
            text-align: center;
            padding: 10px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #8a0b00;
            color: white;
        }

        button {
            padding: 8px 16px;
            background-color: #ff1500;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff8b80;
        }

        a {
            text-decoration: none;
            color: #ff6f61;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #ff8b80;
        }
    </style>
</head>
<body>
    <h1>¡Hola desde la lista!</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acción</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($producto as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->name }}</td>
            <td>{{ $producto->price }}</td>
            <td><a href="{{route('showproducts', $producto->id)}}"><button type="button">Mostrar</button></a></td>
            <td>
                <form action="{{route('destroy',$producto->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>