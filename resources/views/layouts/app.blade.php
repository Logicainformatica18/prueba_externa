<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/jpg" href="{{ asset('dist/img/favicon.png') }}" />
    <title>ExternaBPO</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style type="text/css">
    .full-height {
        height: 100vh;
        /* altura de la pantalla completa */
    }

    .bg-image {
        background: url("{{ asset('imagen-secundaria.png') }}") no-repeat left center;
        background-size: 100%;
    }

    @font-face {
        font-family: "Kohinoor Bangla";
        src: url("{{ asset('Kohinoor Bangla/KohinoorBangla-Bold.otf') }}");
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: "Kohinoor Bangla";
        src: url("{{ asset('Kohinoor Bangla/KohinoorBangla-Medium.otf') }}");
        font-weight: 300;
        font-style: normal;
    }

    @font-face {
        font-family: "Kohinoor Bangla";
        src: url("{{ asset('Kohinoor Bangla/KohinoorBangla-Light.otf') }}");
        font-weight: 300;
        font-style: normal;
    }

    @font-face {
        font-family: "Kohinoor Bangla";
        src: url("{{ asset('Kohinoor Bangla/KohinoorBangla-Regular.otf') }}");
        font-weight: 500;
        font-style: normal;
    }

    @font-face {
        font-family: "Kohinoor Bangla";
        src: url("{{ asset('Kohinoor Bangla/KohinoorBangla-Semibold.otf') }}");
        font-weight: 600;
        font-style: normal;
    }

    body {
        font-family: 'Kohinoor Bangla', sans-serif;
        font-weight: 300;
        /* Utiliza la variante "Light" por defecto */
    }



    h2 {
        font-weight: 600;
        /* Usará KohinoorBangla-SemiBold.ttf */
        color: black;
    }
</style>

<body>

    <div id="app">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light"style="background-color: #00bf6f">
            <!-- Logo en la izquierda -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">
                        <img src="{{ asset('externalogo.png') }}" alt="Logo"
                            class="brand-image img-circle elevation-3"  width="70%">
                        <span class="brand-text font-weight-light"></span>
                    </a>
                </li>
            </ul>

            <!-- Menú de la derecha -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" style="color: white">
                          <img src="{{ asset('CERRAR-SESION-BLANCO.png') }}" alt="" width="10%">
                       
                        Cerrar Sesión
                    </a>
                </li>
            </ul>
        </nav>

       


        <div class="row container-fluid">
            <div class="col-md-6 bg-image full-height d-none d-md-block">
            </div>
            <div class="col-md-5  full-height d-none d-md-block">
                <p>
                    &nbsp;
                </p>
                <p>
                    &nbsp;
                </p>
                <p>
                    &nbsp;
                </p>
                <p>
                    &nbsp;
                </p>
                <main class="py-4">
                    @yield('content')
                </main>

            </div>
        </div>







        <!-- Coloca este script donde quieras que aparezca el botón -->
        <!-- Asegúrate de tener cargada la hoja de estilos de Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
            /* Estilos para el botón flotante de WhatsApp */
            .whatsapp-btn {
                position: fixed;
                bottom: 20px;
                right: 20px;
                background-color: #25d366;
                /* Color de fondo del botón */
                border-radius: 50%;
                /* Hace que el botón tenga forma circular */
                width: 60px;
                height: 60px;
                text-align: center;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            }

            .whatsapp-btn a {
                display: block;
                width: 100%;
                height: 100%;
                line-height: 60px;
                color: #fff;
                /* Color del ícono */
                font-size: 40px;
            }
        </style>

        <!-- Botón flotante de WhatsApp -->
       

        <br>

        <footer class="main-footer" style="background-color:#003399;color:white">



        

        </footer>
    </div>
</body>

</html>
