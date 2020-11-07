<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    @yield('link')
</head>
<body>
    <header>
        @include('layouts/incl/sidebar')
        @include('layouts/incl/navbar')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>

    </footer>
    @yield('script')
</body>
</html>