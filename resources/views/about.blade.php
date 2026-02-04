<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color:blue;">About me</h1>
    <p>I am a student at Ventspils Tehnikums, I study as a proggraming tehnician.</p>
    <p>Currently I am learning and working on a laravel project!</p>
    <br>

    <a href="/">Return to homepage</a>
    <br>
    <br>


    <h2>People:</h2>
    <ul>
        @foreach ($users as $user)
        <li>{{$user["name"]}}</li>
        @endforeach
    </ul>

    <br>
    <h2>Cars:</h2>
    <ul>
        @foreach ($cars as $car)
        <li>{{"Brand: ".$car->name.", year: ". $car->year}}</li>
        @endforeach
    </ul>

</body>
</html>