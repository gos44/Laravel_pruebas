<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>listar </h1>


    <table>

        @foreach ($cursos as $curso)
        {{-- creo una fila --}}
        <tr>
            <td>{{$curso->name}}</td>
            <td>{{$curso->descripcion}}</td>
     
        </tr>
        @endforeach
    </table>
    
</body>
</html>