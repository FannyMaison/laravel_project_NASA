<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NASA - APOD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>
        <header>
            <a href="/"><img src="{{URL::asset('images/nasa_logo.png') }}" alt="Nasa's logo"></a>
                <nav>
                    <a class="link_first_section"><abbr title="Astronomy Picture Of the Day">APOD</abbr></a>
                    <a class="link_second_section">Details</a>
                    <a href="SBdatabase"><abbr title="Small-Body DataBase">SBDB</abbr></a>
                </nav>
        </header>
        <div class="some_routes">
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
                    <img src="{{URL::asset('images/cancel.png') }}" class="close_button" alt="close button">
                    <img src="{{$hdurl}}" alt="astronomy picture of the day">
                    <div>
                        <h3>{{$title}}</h3>
                        <p>{{$explanation}}</p>
                    </div>
                </section>
                <section class="content" id="first_section">
                    <div class="detail_picture">
                        <h2>Astronomy picture of the day</h2>
                        <p class="detail">author : <span>{{$copyright}}</span></p> 
                        <p class="detail">date: <span>{{$date}}</span></p>
                        <input type="button" name="show" value="learn more" class="more_button">
                    </div>
                   
                    <div>
                        <img src="{{$hdurl}}" alt="astronomy picture of the day">
                        <p>{{$title}}</p>
                    </div>
                </section>
        </div>
    </body>
    <script src="{{ asset('js/app.js')}}"></script>
</html>
