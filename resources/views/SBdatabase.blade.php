<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NASA - Small-Body DataBase</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>
        <header>
            <img src="{{URL::asset('images/nasa_logo.png') }}" alt="Nasa's logo">
                <nav>
                    <a class="link_first_section"><abbr title="Astronomy Picture Of the Day">APOD</abbr></a>
                    <a class="link_second_section">Details</a>
                    <a href=""><abbr title="Small-Body DataBase">SBDB</abbr></a>
                </nav>
        </header>
        <div class="flex-center position-ref full-height">
            <div class="blue_circle"></div>
            <section class="content">
                <h2>Addition of a small body</h2>
                <form action="{{ route('smallbodies-insert') }}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="planet" placeholder="Planet">
                    <input type="text" name="kind" placeholder="Asteroid, Comet or Object">
                    <input type="text" name="distance" placeholder="Enter a distance under 1">
                    <input type="text" name="class" placeholder="Class">
                    <button>Add the small body</button>
                </form>
                <h1>List of small bodies</h1>
                <div class="smallbodies">
                    <div class="smallbody">
                        <p>Name</p>
                        <p>Planet</p>
                        <p>Kind</p>
                        <p>Distance</p>
                        <p>Class</p>
                    </div>
                     @foreach($smallbodies as $smallbody)
                        <div class="smallbody">
                            <p>{{ $smallbody->name }}</p>
                            <p>{{ $smallbody->planet }}</p>
                            <p>{{ $smallbody->kind }}</p>
                            <p>{{ $smallbody->distance }}</p>
                            <p>{{ $smallbody->class }}</p>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </body>
    <script src="{{ asset('js/app.js')}}"></script>
</html>
