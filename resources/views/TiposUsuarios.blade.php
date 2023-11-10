<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('tipo')}}" method="post">
        @csrf
        <div>
            <label for="">Tipo</label>
            <input type="text" name="tipo">
        </div><br>
        <button type="submit">Guardar</button><br>
    </form>
    <table border="2px solid black;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($data as $item)
            <tr>
                <td>{{$item->id }}</td>
                <td>{{$item->tipo}}</td>
            </tr>
            @endforeach
                                 
            
        </tbody>
    </table>
</body>
</html>