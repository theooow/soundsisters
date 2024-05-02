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
                <img src="{{ asset('/images/logo-sound-sisters-2022.png') }}" alt="Logo Sound Sisters">
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

        <section class="section_keyword">
            <p>
                Sound Sisters est un projet de luttes pour l'égalité des genres dans les musiques actuelles 
                qui se décline en deux axes forts : son programme de mentorat, en faveur de l’insertion 
                professionnelle des femmes et minorisé·e·s ; et son dispositif d’accompagnement contres 
                les violences et harcèlement sexistes et sexuelles en milieu festif.
            </p>
            <div class="cards">
                <div class="card">
                    <img src="{{ asset('/images/adelphite.png') }}" alt="Adelphité">
                    <h3>Adelphité</h3>
                    <p>
                        mettre en place un réel contexte de réseau entre professionnel·le·s et mentoré·e·s 
                        et co-construire le changement avec les différent·e·s acteur·ice·s engagé·s sur les 
                        questions d'égalité et d'inclusion.
                    </p>
                </div>
                <div class="card">
                    <img src="{{ asset('/images/mentorat.png') }}" alt="Mentorat">
                    <h3>Mentorat</h3>
                    <p>
                        Un programme de mentorat : phase théorique, ateliers d'éducation populaire, mise en pratique, 
                        adelphité et mise en réseau : un programme fait pour et par les bénéficiaires !
                    </p>
                </div>
                <div class="card">
                    <img src="{{ asset('/images/accompagnement.png') }}" alt="Accompagnement">
                    <h3>Accompagnement</h3>
                    <p>
                        des strucuture pour la lutte contre les violences et harcèlement sexistes et sexuelles 
                        en amorçant des plans de lutte en interne et en déployant des dispositifs sur les événements.
                    </p>
                </div>
                <div class="card">
                    <img src="{{ asset('/images/empowerment.png') }}" alt="Empowerment">
                    <h3>Empowerment</h3>
                    <p>
                        prendre conscience de ses ressources intérieures et déconstruire les stéréotypes hétéronormés, 
                        analyser, construire et transmettre les forces nécessaires aux changements.
                    </p>
                </div>
            </div>
        </section>

        <section class="section_news">
            <h2>Quoi de neuf chez les sisters ?</h2>
            <span></span>
        </section>

        <section class="section_images">
            <h2>En images</h2>
            <span></span>
        </section>

        <section class="section_programme">
            <h2>Le programme d'accompagnement en vidéo</h2>
            <span></span>
            <p>Phase théorique 2021</p>
            <iframe class="video" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fprojetsoundsisters%2Fvideos%2F1266234537192153%2F&show_text=false&width=560&t=0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        </section>

        <section class="section_partenaires">
            <img src="{{ asset('/images/partenaires/centre-national-de-la-musique.png') }}" alt="Centre National de la Musique" title="Centre National de la Musique">
            <img src="{{ asset('/images/partenaires/friche.png') }}" alt="Friche de la Belle de Mai" title="Friche de la Belle de Mai">
            <img src="{{ asset('/images/partenaires/act-right.png') }}" alt="Act Right" title="Act Right">
            <img src="{{ asset('/images/partenaires/regalons-nous.png') }}" alt="Régalons-nous" title="Régalons-nous">
            <img src="{{ asset('/images/partenaires/crefada.png') }}" alt="Crefada" title="Crefada">
            <img src="{{ asset('/images/partenaires/move-ur-gambettes.png') }}" alt="Move Ur Gambettes" title="Move Ur Gambettes">
            <img src="{{ asset('/images/partenaires/cabaret.png') }}" alt="Cabaret Aléatoire" title="Cabaret Aléatoire">
        </section>

        @yield('content')

        <footer class="footer">
            <p>&copy; 2024 {{ config('app.name', 'Laravel') }}</p>
        </footer>
    </body>
</html>
