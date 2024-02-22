<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .about-us__person {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .about-us__person-name {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .about-us__person-age, .about-us__person-position {
            font-size: 18px;
            color: #666;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="about-us__person">
        @foreach ($authors as $author)
            <h2 class="about-us__person-name">{{ $author['name'] }}</h2>
            
            @if ($author['position'] !== 'CEO')
                <div class="about-us__person-age">{{ $author['age'] }}</div>
            @endif

            <div class="about-us__person-position">{{ $author['position'] }}</div>
            <hr style="border-color: #ddd; margin: 15px 0;">
        @endforeach
    </div>
</body>
</html>
