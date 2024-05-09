
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Mercado de Productos</h1>
    
        <form action="{{route('product2.store')}}"  method="POST" >
           
            @csrf
    
            <label>
                Ingrese el nombre del producto:
                <br>
                <input type="text" name="name">
            </label>
            <br><br>
            <label>
                Ingrese la cantidad del producto:
                <br>
                <input type="number" name="price">
            </label>
            <br><br><br>
    
            <button type="submit">Enviar:</button>
           
       
        </form>
    
        
    </body>
    </html>