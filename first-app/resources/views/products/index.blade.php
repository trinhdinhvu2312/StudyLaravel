<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is index products</h1>
    {{-- <h2>Title: {{ $title }}</h2>
    <h3>{{ $x }}</h3>
    <h3>{{ $y }}</h3> --}}
    @foreach ($myphone as $item)
        <h3>{{ $item }}</h3>
    @endforeach
</body>
</html>