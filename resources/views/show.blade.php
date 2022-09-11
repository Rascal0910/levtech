<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='post'>
            <h2 class = 'title'>{{ $posts ->title }}</h2>
            <p class = 'body'>{{ $posts ->body }}</p>
            <p class 'update_at'>{{ $posts ->update_at }}</p>    
            </div>
        <div class='back'> [<a href="/">back</a>]</div>
        
    </body>
</html>