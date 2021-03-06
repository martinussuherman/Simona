<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body>
    <header>
        @include('includes.header')
    </header>

    <div class="container">
        <div id="main" class="row">
            @yield('content')
        </div>
    </div>

    <footer>
        @include('includes.footer')
    </footer>
</body>

</html>
