<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>

<ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('welcome')}}">Welcome</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('taille')}}">Taille</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('age')}}">Age</a>
            </li>
    </ul>
    
    <h3>age : 27ans</h3>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>