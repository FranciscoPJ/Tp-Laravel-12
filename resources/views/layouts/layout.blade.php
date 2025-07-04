<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-300 ">

    <header class="sticky top-0 z-50">
        @include('layouts.navigation')
    </header>
    
    <main>
        @yield('content')
    </main>

    <footer class="flex justify-center items-center mt-4 bg-white border-b border-gray-100">
        Blogs.com
    </footer>

</body>
</html>