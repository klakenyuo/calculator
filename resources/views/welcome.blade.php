<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Calculator</title>
    </head>
    <body class="w-full flex flex-col min-h-screen" >
        <a href="/calculator" class=" rounded bg-slate-500 m-auto px-5 py-3 text-white text-center duration-300 hover:bg-slate-500/80">
            Accéder à la calculatrice
        </a>
    </body>
</html>
