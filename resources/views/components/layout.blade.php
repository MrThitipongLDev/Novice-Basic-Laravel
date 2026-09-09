@props([
    'title' => 'Laravel',
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Layout</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        nav > a {
            color: blue;
        }
        .max-w-400{
            max-width: 400px;
            margin: auto;
        }
        .card {
            background: #e3e3e3; 
            padding: 1rem; 
            text-align: center;
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