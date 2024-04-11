<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Akshar:wght@300..700&family=Encode+Sans+Condensed&family=News+Cycle&family=Pontano+Sans:wght@300..700&display=swap"
        rel="stylesheet">

    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{ $slot }}

    <x-footer />
</body>

</html>
