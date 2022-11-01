<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TODO</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    @livewireStyles

</head>

<body>
    <br>
    <div class="container max-auto flex justify-center">
        <div class="box-border   w-1/2 p-4 border-4 border-gray-400 bg-gray-200">


            {{ $slot }}
        </div>
    </div>
    @livewireScripts
</body>

</html>
