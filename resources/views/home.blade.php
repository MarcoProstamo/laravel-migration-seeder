<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/sass/app.scss', 'resources/js/app.js')
    <title>Treni</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">I TRENIIIII</h1>
        <div>
            @php
                dd($trains);
            @endphp
        </div>
    </div>
</body>

</html>
