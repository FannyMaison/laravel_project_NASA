<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nasa - APOD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>
        <header>
            <img src="{{URL::asset('images/nasa_logo.png') }}">
                <nav>
                    <p>APOD</p>
                    <p>Details</p>
                    <p>Contact</p>
                </nav>
        </header>
        <div class="des_routes">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                <div class="blue_circle"></div>
                <section class="content" id="second_section">
                    <img src="">
                    <div>
                        <p>title</p>
                        <p>description</p>
                    </div>
                </section>
                <section class="content" id="first_section">
                    <div class="detail_picture">
                        <p>Astronomy picture of the day</p>
                        <p class="detail">author : name</p>
                        <p class="detail">date: 2020 02 21</p>
                        <input type="button" name="show" value="learn more" class="more_button">
                    </div>
                   
                    <div>
                        <img src="">
                        <p>title</p>
                    </div>
                </section>
        </div>
    </body>
    <script src="{{ asset('js/library/jquery.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
</html>
