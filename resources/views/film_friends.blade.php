<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Números Amigos</title>
</head>
<body>
    <h1>Verificador de Números Amigos</h1>
    <form action="{{ route('amigos.co') }}" method="POST">
        @csrf 
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" required>
        <br>
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" required>
        <br>
        <input type="submit" value="Verificar">
    </form>
</body>
</html>
