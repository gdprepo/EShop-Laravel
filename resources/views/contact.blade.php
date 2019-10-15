<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
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
        </style>
    </head>
    <body>
        @include('components/navbar')
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <a style="color: black; text-decoration:none;" href="#contact"> Contact </a>
                </div>

            </div>
        </div>


        <div id="contact" style="margin-top: -100px" class="content animated bounceInRight">
            <div>
                <form style="margin:10%;" action="/mail.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input style="width: 50%; margin-left: 25%; margin-right: auto" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">Entrer une adresse e-mail valide.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Sujet du Message</label>
                        <input style="width: 50%; margin-left: 25%; margin-right: auto" name="name" type="text" class="form-control" id="exampleInputPassword1" placeholder="sujet">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Votre Message</label>
                        <textarea style="width: 50%; margin-left: 25%; margin-right: auto; height: 200px;" name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <button name="answer" type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>



    </body>
</html>
