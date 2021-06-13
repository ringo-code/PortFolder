<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Article</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Article Name</h1>
        <p>今日のご飯</p>
        <div class='reposts'>
            @foreach ($reposts as $repost)
                <div class='repost'>
                    <h2 class='title'>{{ $repost->title }}</h2>
                    <p class='body'>{{ $repost->body }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>