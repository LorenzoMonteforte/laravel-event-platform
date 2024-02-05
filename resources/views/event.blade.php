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
    <h1>Eventi</h1>
    @for ($i=0; $i<sizeof($events); $i++)
        <ul>
            <li>{{ $events[$i]->name }}</li>
            @for ($index=0; $index<sizeof($events[$i]->tags); $index++)
                <li>{{ $events[$i]->tags[$index]->name }}</li>
            @endfor
        </ul>
    @endfor
</body>
</html>