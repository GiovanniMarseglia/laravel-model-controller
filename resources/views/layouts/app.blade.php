<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
    @vite('resources/js/app.js')
</head>
<body>

    <!-- header -->



    <div class="container">

        <div class="row row-cols-3 g-5 mt-3 d-flex justify-content-center">
            @foreach ( $movie as $element)
            <div class="col d-flex flex-column">
                <div class="bg-primary text-center rounded" style="height: 250px">
                    <h1>{{$element["title"]}}</h1>
                    <h2>{{$element["nationality"]}}</h2>
                    <h3>{{$element["date"]}}</h3>
                    <h4>{{$element["vote"]}}</h4>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</body>
</html>
