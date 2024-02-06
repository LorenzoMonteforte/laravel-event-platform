<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <ul>
        <li>
            <span>ID: </span>
            <span>{{ $event->id }}</span>
        </li>
        <li>
            <span>Nome: </span>
            <span>{{ $event->name }}</span>
        </li>
        <li>
            <span>Descrizione: </span>
            <span>{{ $event->description }}</span>
        </li>
        <li>
            <span>Città: </span>
            <span>{{ $event->city }}</span>
        </li>
        <li>
            <span>Data: </span>
            <span>{{ $event->date }}</span>
        </li>
        <li>
            <span>Tag: </span>
            @for ($i=0; $i<sizeof($event->tags); $i++)
                <span>{{ $event->tags[$i]->name }}</span>
            @endfor
        </li>
    </ul>
</body>
</html>