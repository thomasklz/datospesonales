<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>:: Datos Personales :: </h1>

    <form  action="{{url('datos')}}" method="post">
        @csrf
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nomb">
        </div>
        <div>
            <label for="apellido">Apellido: </label>
            <input type="text" name="apell">
        </div>
        <div>
            <label >Cedula: </label>
            <input type="text" name="cedu">
        </div>

        <div>
            <button type="submit">Guardar</button>
        </div> 
        
    </form>
     
</body>
</html>