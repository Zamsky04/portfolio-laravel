<!doctype html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{{ $title ?? 'Portfolio — Modern & Elegant' }}</title>
  <meta name="description" content="{{ $meta ?? 'Portfolio pribadi dengan proyek, skill, dan kontak.' }}">
  <meta name="robots" content="index,follow">
  <link rel="icon" href="/favicon.ico">
  <link rel="canonical" href="{{ url()->current() }}">

  {{-- Open Graph (minimal) --}}
  <meta property="og:type" content="website">
  <meta property="og:title" content="{{ $title ?? 'Portfolio — Modern & Elegant' }}">
  <meta property="og:description" content="{{ $meta ?? 'Portfolio pribadi dengan proyek, skill, dan kontak.' }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

  {{-- Vite (Tailwind 4.1 build) --}}
  @vite(['resources/css/app.css','resources/js/app.js'])

  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


  <style>
    /* Optional: cegah FOUC kecil & utility aksesibilitas */
    [x-cloak]{display:none!important}
  </style>
</head>
<body id="top" class="min-h-dvh bg-zinc-50 text-zinc-900 antialiased selection:bg-blue-600/15 selection:text-blue-700">
  {{-- Skip link --}}
  <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 z-50 px-4 py-2 bg-blue-600 text-white rounded-lg">
    Lewati ke konten utama
  </a>

  <x-nav />

  <main id="main" class="mx-auto max-w-7xl px-4">
    {{ $slot }}
  </main>

  <x-footer />

</body>
</html>
