<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="flex justify-center items-center h-full">
    <div>
        <div class="flex justify-between">
            <div class="p-4">Autori nimi: </div>
            <div class="p-4">{{ $author->first_name }} {{ $author->last_name }}</div>
        </div>
        <div class="flex justify-between">
            <div class="p-4">Kirjutatud raamatud: </div>
            <div>
                @foreach($author->books as $book)
                <div class="p-4">{{ $book->title }}</div>
                @endforeach
            </div>
        </div>
</body>
</html>