<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    
     
    <header>
        <h1>Test</h1>
    </header>

    <main>
        <ul>
            <li><a href="{{route('test_1')}}">test_1</a></li>
            <li><a href="{{route('test_2')}}">test_2</a></li>
            <li><a href="{{route('test_3')}}">test_3</a></li>
            <li><a href="{{route('test_4')}}">test_4</a></li>
        </ul>
    </main>

</body>
</html>