<h1>Lista di film</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>
                <h3>{{ $movie->title }}</h3>
                <p>{{ $movie->original_title}}</p>
            </li>
        @endforeach
    </ul> 