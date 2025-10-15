<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <title>Home</title>
    </head>
    <body>
    <x-nav-link></x-nav-link>
    <x-mobile-nav-links></x-mobile-nav-links>
        <div class="mx-20 p-5 border-gray-400 rounded-xl">
            {{$slot}}
        </div>
    </body>
</html>
