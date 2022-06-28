
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
        <title>Movies-list</title>
    </head>
    <body>
        <h1>Lista di film</h1>
    
    <section>
        <div class="card">
            <ul>
                @foreach ($movies as $movie)
                    <li>
                        <h3>{{ $movie->title }}</h3>
                        <h4> {{ $movie->nationality }}</h4>
                        <p>{{ $movie->date}}</p>
                        <p>{{ $movie->original_title}}</p>
                        <p>{{ $movie->vote}}</p>
                    </li>
                @endforeach
            </ul> 
        </div>
    </section>
    
  
    </body>
    </html>