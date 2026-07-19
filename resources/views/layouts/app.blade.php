<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Delivery Services</title>
</head>
<body>
    
    <nav>
        <h1>Alex Delivery Services</h1>

        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
        </ul>

    </nav>

    <hr>

    @yield('content')
    
</body>
</html>