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

<body class="font-sans antialiased bg-gray-50 dark:bg-neutral-900">
  <!-- ========== HEADER ========== -->
  <x-admin.header />
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <!-- Breadcrumb -->
  <x-admin.breadcrumb />
  <!-- End Breadcrumb -->

  <!-- Sidebar -->
  <x-admin.sidebar />
  <!-- End Sidebar -->

  <!-- Content -->
  <div class="w-full lg:ps-64">
    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">

      @if (session('success'))
        <x-admin.alert type="success" :message="session('success')" />
      @elseif (session('error'))
        <x-admin.alert type="error" :message="session('error')" />
      @elseif (session('info'))
        <x-admin.alert type="info" :message="session('info')" />
      @endif

      {{ $slot }}
    </div>
  </div>
  <!-- End Content -->
  <!-- ========== END MAIN CONTENT ========== -->

  <script>
    const html = document.querySelector('html');
    const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') === 'auto' &&
      !window.matchMedia('(prefers-color-scheme: dark)').matches);
    const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' &&
      window.matchMedia('(prefers-color-scheme: dark)').matches);

    if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
    else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
    else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
    else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
  </script>

  {{ $scripts ?? '' }}
</body>

</html>
