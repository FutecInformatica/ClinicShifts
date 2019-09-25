<!DOCTYPE htlm>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title','Inicio') | Panel de Administracion</title>
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    </head>
    <body>
        
        @include('admin.templates.partials.nav')
        
        <section>
            @include('flash::message')
            @yield('content')
        </section>
        <script src="{{ asset('plugins/bootstrap/css/bootstrap.js') }}"></script>
        <script src="{{ asset('plugins/jquery/js/jquery-3.4.1.js') }}"></script>
        <script src="{{ asset('plugins/jquery/js/jquery-3.3.1.slim.min.js') }}"></script>
        <script src="{{ asset('plugins/ajax/js/popper.min.js') }}"></script>
        <script src="{{ asset('plugins/ajax/js/bootstrap.min.js') }}"></script>
    </body>
    
    <footer>
        @include('admin.templates.partials.footer')
    </footer>
    
</html>
