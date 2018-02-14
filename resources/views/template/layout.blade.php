<!doctype html>
<html lang="fr">
<head>
    @include('template.header')
</head>
<body>
<div class="container-fluid">

    <header class="row">
        @include('template.navigation')
    </header>

    <main>

            @yield('content')

    </main>

    <footer class="row">
        @include('template.footer')
    </footer>

</div>
</body>
</html>