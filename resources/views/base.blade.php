<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>

    </style>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}"><!--  Bootstrap CSS link -->
    <link rel="stylesheet" href="{{ asset('/css/default.css') }}"><!-- Custom CSS link -->
</head>
<body>
    <div class="contact-infos">
        <span>! Pour tout renseignement complementaire, veuillez contacter : </span>
        <div class="email">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM20 7.23792L12.0718 14.338L4 7.21594V19H20V7.23792ZM4.51146 5L12.0619 11.662L19.501 5H4.51146Z"></path></svg>
            <span>infos@infrastructures.gov.bf</span>
        </div>
        <div class="tel">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M7 4V20H17V4H7ZM6 2H18C18.5523 2 19 2.44772 19 3V21C19 21.5523 18.5523 22 18 22H6C5.44772 22 5 21.5523 5 21V3C5 2.44772 5.44772 2 6 2ZM12 17C12.5523 17 13 17.4477 13 18C13 18.5523 12.5523 19 12 19C11.4477 19 11 18.5523 11 18C11 17.4477 11.4477 17 12 17Z"></path></svg>
            <span>+226 76093485/78947223-76093485/78947223</span>
        </div>
    </div><!-- contact-infos -->

    <header>
        <div class="link">
            <a href="/" class="logo"><img src="/img/logo.png" alt="logo"></a>
            <a href="/">Plateforme de demande de contrôle géotechnique des routes ou des infrastructures</a>
        </div>
        <nav class="navbar" id="nav-bar">
            <ul>
                <li>
                    <a href="/" class="active text-none">Accueil</a>
                </li>
                <li>
                    <a href="/">Mes dossiers</a>
                </li>
                <li>
                    <a href="/">Contacter</a>
                </li>
                <!--
                    <li>
                        <a href="/">Compte</a>
                    </li>
                -->
            </ul>
        </nav>
        <div class="menu" id="menu">
            <svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z"></path></svg>
            <svg class="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path></svg>
        </div>
    </header><!-- header -->

    @yield('content')

    <!-- <script src="/js/default.js"></script> Custom js link-->
    <script src="{{ asset('/js/default.js') }}"></script>
</body>
</html>