<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
        }

        main {
            padding: 30px;
            text-align: center;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 5px 0;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to My First Website</h1>

    @auth
        <p>Welcome back, User!</p>
    @endauth

    @guest
        <p>You are browsing as Guest</p>
    @endguest
</header>

<main>
    @yield('content')
</main>

<footer>
    &copy; {{ date('Y') }} Almaty
</footer>

</body>
</html>

