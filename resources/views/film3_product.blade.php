
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>FORMULARIO PRODUCTO</h1>
    
        <form action="{{route('product3.store')}}"  method="POST" >
           
            @csrf
    
            <label>
                Ingrese el nombre del libro:
                <br>
                <input type="text" name="name">
            </label>
            <br><br>
            <label>
                Ingrese el dia de entrega :
                <br>
                <input type="days" name="price">
            </label>
            <br><br><br>
    
            <button type="submit">Enviar :</button>
           
       
        </form>
    
    </body>
    </html>