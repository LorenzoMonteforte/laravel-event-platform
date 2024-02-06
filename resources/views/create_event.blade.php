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
    <form action="{{ route('admin.events.store') }}" method="POST">
        @csrf
        <input name="name" type="text" placeholder="Nome">
        <input name="description" type="text" placeholder="Descrizione">
        <input name="city" type="text" placeholder="Città">
        <input name="date" type="date">
        <select name="tags[]" multiple>
            <option value="">Nessun Tag</option>
            @for ($i=0; $i<sizeof($tags); $i++)
                <option value="{{ $tags[$i]->id }}">{{ $tags[$i]->name }}</option>
            @endfor
        </select>
        <input type="submit" value="Inserisci">
    </form>
</body>
</html>