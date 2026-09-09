<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <style>
        nav > a {
            color: blue;
        }
        </style>
</head>
<body>
    <nav>
    <a href="/">home</a>
    <a href="/about">about</a>
    <a href="/contact">contact</a>
    </nav>
    <main>
    {{ $slot }}
</main>
</body>
</html>