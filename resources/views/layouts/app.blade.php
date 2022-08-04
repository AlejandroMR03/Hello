<html>
    <head>
        {{--@yield nos permitira llamar esta parte de la plantilla en otras vistas--}}
        <title>Academia - @yield('titulo')</title>
    </head>
    <body>
 
        <div class="container">
            @yield('contenido')
        </div>
    </body>
</html>