<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fórmula Primos</title>
</head>
<body>
    <h1>Calculadora de la Fórmula Primos</h1>

    <form action="{{ route('product5.store') }}" method="POST">
        @csrf
        <!-- Coeficiente a -->
        <label for="a">Coeficiente a:</label>
        <input type="number" name="a" required>
        <br><br>

        <!-- Botón para calcular -->
        <button type="submit">Calcular</button>
    </form>

    isset($cuadrada)
<h2>Resultado</h2>
<p>coeficiente a:{{$cuadrada->a}}</p>
<p>coeficiente a:{{$cuadrada->b}}</p>
<p>coeficiente a:{{$cuadrada->c}}</p>
<p> x1:{{$cuadrada->x1}}</p>
<p> x2:{{$cuadrada->x2}}</p>

@endisset

    </form>
</body>
</html>
