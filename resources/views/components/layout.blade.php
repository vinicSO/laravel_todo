<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{$page ?? "ToDo"}}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/style.css" />
    </head>
    <body>
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png">
        </div>

        <div class="content">
            <nav>
                {{$btn ?? null}}
            </nav>

            <main>
                {{$slot}}
            </main>
        </div>
    </div>
    </body>
</html>
