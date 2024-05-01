<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="{{ asset('/favicon.png') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['/resources/css/app.css', '/resources/js/app.js'])
    </head>
    <body>
        <header class="header_full">
            <div class="header_nav">
                <img src="{{ asset('/images/logo-sound-sisters-2022.png') }}" alt="Logo">
                <nav class="nav_bar">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>
                            <a href="{{ route('mentorat') }}">Mentorat</a>
                            <ul>
                                <li><a href="{{ route('documentaire') }}">Documentaire</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('safe') }}">Actions Safe</a>
                            <ul>
                                <li><a href="{{ route('dispositifs-safe') }}">Protocoles & Dispositifs</a></li>
                                <li><a href="{{ route('sensibilisation') }}">Sensibilisations</a></li>
                                <li><a href="{{ route('brigadedulove') }}">La Brigade Du Love</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('reseau') }}">Le Réseau</a></li>
                        <li><a href="{{ route('charte') }}">La Charte</a></li>
                        <li><a href="{{ route('medias') }}">Médias</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header_body">
                <h1 class="first_title">Sound<br>Sisters</h1>
                <p class="sub_title">pour l’égalité des genres dans les métiers des musiques actuelles</p>
                <p class="legend">
                    A travers un programme de mentorat en mixité choisie, 
                    des sensibilisations et un accompagnement personnalisé des structures, 
                    nous avons à coeur d'agir pour co-construire un monde culturel 
                    plus égalitaire et plus sûr.
                </p>
            </div>
        </header>

        @yield('content')

        <footer>
            <p>&copy; 2024 {{ config('app.name', 'Laravel') }}</p>
        </footer>
    </body>
</html>
