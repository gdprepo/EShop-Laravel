<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accueil - EShop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

        <!-- Styles -->

        <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            :root {
                --mainColor: #CACACA;
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .lien {
                background:
                    linear-gradient(
                    to right,
                    var(--mainColor) 1%,
                    var(--mainColor) 1px,
                    transparent 5px
                );
                background-repeat: repeat-x;
                background-size: 100%;
                color: #000;
                padding-left: 10px;
                text-decoration: none;
            }

            .lien:hover {
                background:
                    linear-gradient(
                    to right,
                    var(--mainColor) 0%,
                    var(--mainColor) 5px,
                    transparent
            );
}

            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div style="margin-top: 0px" class="content">
                <div class="title m-b-md">
                    Bienvenue 
                    <img style="width: 10%; margin-left: 20px" src="online-store.png" class="img-fluid" alt="Responsive image">
                </div>

                <div class="links animated bounce">
                    <a style="font-weight: bold; color: black; font-family: 'Plume', Georgia, serif;;" href="{{ url('/') }}">Accueil</a>
                    <a class="lien" href="{{ url('presentation') }}">Presentation</a>
                    <a class="lien" href="{{ route('contact') }}">Contact</a>
                    <a class="lien" href="{{ route('autre') }}">Autre</a>
                </div>

                <img style="width: 30%; margin-top: 50px" src="avatar2.png" class="img-fluid" alt="Responsive image">

            </div>
        </div>
    </body>
</html>
