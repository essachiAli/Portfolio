<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')

</head>
<body class="bg-black min-h-screen text-white flex-col">
    <header>
        @include('partials.nav')
    </header>
    <main class="flex-1 p-6">
        @yield('content')
    </main>
    <footer class="fixed bottom-0  w-full text-white  p-4">
        Laravel • {{ now()->format('d/m/Y H:i') }} • {{ config('app.timezone') }}
    </footer>

</body>
</html>
