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

<body class="font-sans antialiased bg-gray-50 dark:bg-neutral-900 overflow-x-hidden">
  <!-- ========== HEADER ========== -->
  <x-header />
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <!-- Breadcrumb -->
  <x-breadcrumb />
  <!-- End Breadcrumb -->

  <!-- Sidebar -->
  <x-sidebar />
  <!-- End Sidebar -->

  <!-- Content -->
  <div class="w-full lg:ps-64">
    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
      {{ $slot }}
    </div>
  </div>
  <!-- End Content -->

  <!-- Toast -->
  <div class="fixed bottom-4 end-4 z-50" x-data="{ show: true }" x-show="show"
    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
    x-init="setTimeout(() => show = false, 3000)">
    @if (session('success'))
      <x-toast class="min-w-80" :message="session('success')" status="success" />
    @elseif (session('error'))
      <x-toast class="min-w-80" :message="session('error')" status="error" />
    @elseif (session('info'))
      <x-toast class="min-w-80" :message="session('info')" />
    @endif
  </div>
  <!-- End Toast -->
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- Dark Mode -->
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

  <script>
    const rupiah = (value) => {
      return Intl.NumberFormat('id', {
        style: 'currency',
        currency: 'IDR',
        maximumFractionDigits: 0
      }).format(value);
    }
  </script>

  {{ $scripts ?? '' }}
</body>

</html>
