<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }} &middot; {{ $title ? $title : 'Untitle' }}</title>

  <!-- Icon -->
  <link rel="shortcut icon" href="#">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{ $styles ?? '' }}
</head>

<body class="font-sans antialiased bg-gray-100 flex h-full items-center py-16 dark:bg-neutral-800">
  <main class="w-full max-w-lg mx-auto p-6">
    {{ $slot }}
  </main>

  {{ $scripts ?? '' }}
</body>

</html>
