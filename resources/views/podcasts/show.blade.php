<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $podcast['title'] }}</title>
</head>
<body>
    <h1>{{ $podcast['title'] }}</h1>
    <p><strong>Author:</strong> {{ $podcast['author'] }}</p>
    <p><strong>Description:</strong> {{ $podcast['description'] }}</p>

    <h2>Episodes</h2>
    <ul>
        @foreach($podcast['episodes'] as $episode)
            <li>{{ $episode['title'] }} - {{ $episode['duration'] }}</li>
        @endforeach
    </ul>

    <a href="{{ route('podcasts.show', ['id' => $podcast['id']]) }}">Reload Podcast</a>
</body>
</html>
