<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
    </head>
    <body>
        <header class="flex items-center justify-between">
        <div>Logo</div>
        <nav class="flex items-center gap-4">
            <a>Fitur</a><a>Harga</a><a>Kontak</a>
        </nav>
        </header>

        <div class="flex flex-col md:flex-row gap-6">
        <aside class="md:basis-1/3">Sidebar</aside>
        <main class="md:flex-1">Konten</main>
        </div>

        


    </body>
</html>
