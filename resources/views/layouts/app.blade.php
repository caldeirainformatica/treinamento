<html>
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../../../public/css/materialize.min.css">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>
    <body>
        <header>
            <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
            @include('template.nav')
        </header>
        <main>
            @yield('conteudo')
        </main>
        <footer >
            {{--Aqui fica o Rodapé.--}}
            {{--@include('template.footer')--}}
        </footer>
    </body>
    <script>
        $(document).ready(function () {
            $(".button-collapse").sideNav();
        });
    </script>
</html>