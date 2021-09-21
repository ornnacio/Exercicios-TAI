<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>
        @forelse ($turmas as $item )
        <li>{{$item->id}} - {{$item->nome}}</li>
        @empty
        <li>Nenhum registro foi encontrado</li>
        @endforelse
    </ul>
</body>

</html>
