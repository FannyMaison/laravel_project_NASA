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
                <div>
                    <h2>Addition of a small body</h2>
                    <form action="{{ route('smallbodies-insert') }}" method="post">
                        @csrf
                        <label for="name">Name: </label><input type="text" name="name" placeholder="Name">
                        <label for="planet">Planet: </label><input type="text" name="planet" placeholder="Planet">
                        <label for="kind">Kind: </label><input type="text" name="kind" placeholder="Asteroid, Comet or Object">
                        <label for="distance">Distance: </label><input type="text" name="distance" placeholder="Enter a distance under 1">
                        <label for="class">Class: </label><input type="text" name="class" placeholder="Class">
                        <button>Add the small body</button>
                    </form>
                </div>
                <div>
                    <h3>List of small bodies</h3>
                    <table class="smallbodies" border="1">
                        <thead>
                            <tr class="smallbody">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Planet</th>
                                <th>Kind</th>
                                <th>Distance</th>
                                <th>Class</th>
                            </tr>
                       </thead>
                       <tbody>
                        @foreach($smallbodies as $smallbody)
                            <tr class="smallbody">
                                <td>{{ $smallbody->id }}</td>
                                <td>{{ $smallbody->name }}</td>
                                <td>{{ $smallbody->planet }}</td>
                                <td>{{ $smallbody->kind }}</td>
                                <td>{{ $smallbody->distance }}</td>
                                <td>{{ $smallbody->class }}</td>
                           </tr>
                        @endforeach  
                       </tbody>
                    </table>
                </div>
            </section>
        </div>
    </body>
    <script src="{{ asset('js/app.js')}}"></script>
</html>
