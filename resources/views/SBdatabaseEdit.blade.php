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
                    <a href="SBdatabase" class="link_first_section"><abbr title="Small-Body DataBase">SBDB</abbr></a>
                </nav>
        </header>
        <div class="flex-center position-ref full-height">
            <div class="blue_circle"></div>
            <section class="content">
                <div id="edit">
                    <h2>Update of<br>a small body</h2>
                    <hr>
                    <form action="{{ route('smallbodies-update', $idU) }}" method="post">
                        @csrf
                        <label for="name">* Name : </label><input type="text" name="rename" value="{{ $nameU }}">
                        <label for="planet">* Planet : </label><input type="text" name="replanet" value="{{ $planetU }}">
                        <label for="kind">* Kind : </label><input type="text" name="rekind" value="{{ $kindU }}">
                        <label for="distance">Distance : </label><input type="text" name="redistance" value="{{ $distanceU }}">
                        <label for="class">Class : </label><input type="text" name="reclass" value="{{ $classU }}">
                        <a href="https://ssd-api.jpl.nasa.gov/doc/cad.html#sbdb_class_table" target="_blank">to see what can you enter in Class</a>
                        <div>
                            <button class="update_button">Update the small body</button><a href="/SBdatabase"><img src="{{URL::asset('images/cancel.png') }}" alt="cancel button"></a>
                        </div>
                        
                    </form>
                </div>
        </div>
        <footer>Developed by Fanny Maison - 2020</footer>
    </body>
    <script type="text/javascript">
        var msg = '{{ Session::get('alert') }}';
        var exist = '{{ Session::has('alert') }}';
        if (exist) {
            alert(msg);
        }
    </script>
</html>
