<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ mix('assets/css/app.css') }}">

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="{{ mix('assets/js/vendor/jquery.min.js') }}"><\/script>')</script>

    </head>
    <body>

        <div class="row" style="min-height: 100vh;">
            <div class="columns align-self-middle text-center">
                <h1>{{ config('app.name') }}</h1>
                <h4>Welcome to your new Laravel project</h4>
                <br>
                <ul class="menu align-center">
                    <li><a href="https://foundation.zurb.com/sites/docs/">Zurb Foundation Docs</a></li>
                    <li><a href="https://laravel.com/docs/master">Laravel Docs</a></li>
                    <li><a href="https://github.com/ompmega/laravel-fdn">ompmega/laravel-fdn</a></li>
                </ul>
            </div>
        </div>

        <script src="{{ mix('assets/js/plugins.js') }}"></script>
        <script src="{{ mix('assets/js/app.js') }}"></script>
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXXXXX-X','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
