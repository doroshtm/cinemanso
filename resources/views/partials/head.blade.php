<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $title ?? config('app.name', 'Cinemanso') }}">
<meta property="og:description" content="Cinemanso é uma plataforma de revisão de filmes e séries.">
<meta property="og:image" content="{{ asset('images/discord-cover_1200.jpeg') }}">
<meta property="og:url" content="{{ url()->current() }}">

<meta name="theme-color" content="#5865F2">

<title>{{ $title ?? config('app.name') }}</title>

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
