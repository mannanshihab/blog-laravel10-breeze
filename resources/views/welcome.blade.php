<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog | Dashboard</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
<body class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter bg-gray-500 selection:bg-red-500 selection:text-white">
    <main>
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            @include('home.nav')
            @include('home.blog')
            @include('home.sponser')
        </div>
    </main>
    <script src="{{asset('home')}}/js/script.js"></script>
</body>   
</html>
