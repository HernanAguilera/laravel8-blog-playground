<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="flex justify-between bg-gray-200">
        <ul class="flex items-center">
            <li class="m-6">
                <a class="text-blue-500 hover:text-blue-800" href="#">Posts</a>
            </li>
        </ul>
        <ul class="flex items-center">
            <li class="m-6">
                <a class="text-blue-500 hover:text-blue-800" href="#">Nuevo post</a>
            </li>
        </ul>
    </nav>
    <section class="container mx-auto pt-4 content">
        @yield('content')
    </section>
</body>
</html>