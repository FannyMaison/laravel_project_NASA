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
            <a href="/"><img src="{{URL::asset('images/nasa_logo.png') }}" alt="Nasa's logo"></a>
                <nav>
                    <a href="/"><abbr title="Astronomy Picture Of the Day">APOD</abbr></a>
                    <a href="/" target="second_section" class="link_second_section">Details</a>
                    <a href="SBdatabase"><abbr title="Small-Body DataBase">SBDB</abbr></a>
                </nav>
        </header>
        <div class="flex-center position-ref full-height">
            <div class="blue_circle"></div>
            <section class="content">
                <div>
                    <h2>Update of<br> a small body</h2>
                    @foreach($smallbodies as $smallbody)
                    <form action="{{ route('smallbodies-update', $smallbody->id) }}" method="post">
                        @csrf
                        <label for="name">Name : </label><input type="text" name="rename" value="{{ $smallbody->name }}">
                        <label for="planet">Planet : </label><input type="text" name="replanet" value="{{ $smallbody->planet }}">
                        <label for="kind">Kind : </label><input type="text" name="rekind" value="{{ $smallbody->kind }}">
                        <label for="distance">Distance : </label><input type="text" name="redistance" value="{{ $smallbody->distance }}">
                        <label for="class">Class : </label><input type="text" name="reclass" value="{{ $smallbody->class }}">
                        <a href="https://ssd-api.jpl.nasa.gov/doc/cad.html#sbdb_class_table">to see what can you enter in Class</a>
                        <button>Update the small body</button>
                    </form>
                    @endforeach
                </div>
        </div>
    </body>
</html>
