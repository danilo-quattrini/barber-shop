<!doctype html>
<html lang="en" class="h-full">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{$title}}</title>
    </head>
    <body class="h-full">
    <x-nav.index></x-nav.index>
    <x-mobile-nav-links></x-mobile-nav-links>
        {{$slot}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </body>
    <x-footer></x-footer>
</html>
