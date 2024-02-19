<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <h1 style="color: rgb(103, 103, 184)">Top Rated Movies</h1>
    <ul>
        @foreach($topRatedMovies as $movie)
        <li style="color: rgb(103, 103, 184)">
            {{ $movie->name }}
        </li>
        @endforeach
    </ul>
</body>
</html>