<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | FilmKu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex flex-col">

    @isset($username)
        <x-navbar :username="$username" />

    @endisset

    <main class="flex-1 max-w-5xl w-full mx-auto p-6">
        @yield('content')
    </main>
    
    @include('components.footer')
    
</body>
</html>
