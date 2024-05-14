@props(['type' => 'button', 'as' => 'button', 'variant' => 'solid', 'size' => 'default', 'color' => 'blue'])

@php
  $variantClasses = [
      'solid' =>
          'inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none',
      'outline' =>
          'inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600',
      'ghost' =>
          'inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:bg-blue-100 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:bg-blue-800/30 dark:hover:text-blue-400',
      'soft' =>
          'inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-blue-900 dark:text-blue-400',
      'white' =>
          'inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800',
      'link' =>
          'inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400',
  ];

  $sizeClasses = [
      'sm' => 'py-2 px-3',
      'default' => 'py-3 px-4',
      'lg' => 'p-4 sm:p-5',
  ];

  if ($variant === 'solid') {
      $colorClasses = [
          'dark' => 'border-transparent bg-gray-800 text-white hover:bg-gray-900 dark:bg-white dark:text-neutral-800',
          'gray' => 'border-transparent bg-gray-500 text-white hover:bg-gray-600',
          'teal' => 'border-transparent bg-teal-500 text-white hover:bg-teal-600',
          'blue' => 'border-transparent bg-blue-600 text-white hover:bg-blue-700',
          'red' => 'border-transparent bg-red-500 text-white hover:bg-red-600',
          'yellow' => 'border-transparent bg-yellow-500 text-white hover:bg-yellow-600',
          'transparent' => 'border-transparent bg-white text-gray-800 hover:bg-gray-200',
      ];
  } elseif ($variant === 'outline') {
      $colorClasses = [
          'dark' =>
              'border-gray-800 text-gray-800 hover:border-gray-500 hover:text-gray-500 dark:border-white dark:text-white dark:hover:text-neutral-300 dark:hover:border-neutral-300',
          'gray' =>
              'border-gray-500 text-gray-500 hover:border-gray-800 hover:text-gray-800 dark:border-neutral-400 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hover:border-neutral-300',
          'teal' => 'border-teal-500 text-teal-500 hover:border-teal-400 hover:text-teal-400',
          'blue' =>
              'border-blue-600 text-blue-600 hover:border-blue-500 hover:text-blue-500 dark:border-blue-500 dark:text-blue-500 dark:hover:text-blue-400 dark:hover:border-blue-400',
          'red' => 'border-red-500 text-red-500 hover:border-red-400 hover:text-red-400',
          'yellow' => 'border-yellow-500 text-yellow-500 hover:border-yellow-400 hover:text-yellow-400',
          'transparent' => 'border-white text-white hover:border-white/70 hover:text-white/70',
      ];
  } elseif ($variant === 'ghost') {
      $colorClasses = [
          'dark' => 'border-transparent text-gray-800 hover:bg-gray-100 dark:text-white dark:hover:bg-neutral-700',
          'gray' =>
              'border-transparent text-gray-500 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-800',
          'teal' =>
              'border-transparent text-teal-500 hover:bg-teal-100 hover:text-teal-800 dark:hover:bg-teal-800/30 dark:hover:text-teal-400',
          'blue' =>
              'border-transparent text-blue-600 hover:bg-blue-100 hover:text-blue-800 dark:text-blue-500 dark:hover:bg-blue-800/30 dark:hover:text-blue-400',
          'red' =>
              'border-transparent text-red-500 hover:bg-red-100 hover:text-red-800 dark:hover:bg-red-800/30 dark:hover:text-red-400',
          'yellow' =>
              'border-transparent text-yellow-500 hover:bg-yellow-100 hover:text-yellow-800 dark:hover:bg-yellow-800/30 dark:hover:text-yellow-400',
          'transparent' =>
              'border-transparent text-white hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-white/10 dark:hover:text-white',
      ];
  } elseif ($variant === 'soft') {
      $colorClasses = [
          'dark' =>
              'border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 dark:bg-white/10 dark:hover:bg-white/20 dark:text-white dark:hover:text-white',
          'gray' =>
              'border-transparent bg-gray-100 text-gray-500 hover:bg-gray-200 dark:bg-white/10 dark:hover:bg-white/20 dark:text-neutral-400 dark:hover:text-neutral-300',
          'teal' =>
              'border-transparent bg-teal-100 text-teal-800 hover:bg-teal-200 dark:hover:bg-teal-900 dark:text-teal-500 dark:hover:text-teal-400',
          'blue' =>
              'border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 dark:hover:bg-blue-900 dark:text-blue-400',
          'red' =>
              'border-transparent bg-red-100 text-red-800 hover:bg-red-200 dark:hover:bg-red-900 dark:text-red-500 dark:hover:text-red-400',
          'yellow' =>
              'border-transparent bg-yellow-100 text-yellow-800 hover:bg-yellow-200 dark:hover:bg-yellow-900 dark:text-yellow-500 dark:hover:text-yellow-400',
          'transparent' => 'border-transparent bg-white/10 text-white hover:bg-white/20',
      ];
  } elseif ($variant === 'white') {
      $colorClasses = [
          'dark' =>
              'border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800',
          'gray' =>
              'border-gray-200 bg-white text-gray-500 shadow-sm hover:bg-gray-50 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-800',
          'teal' =>
              'border-gray-200 bg-white text-teal-500 shadow-sm hover:bg-gray-50 dark:bg-neutral-900 dark:border-neutral-700 dark:hover:bg-neutral-800',
          'blue' =>
              'border-gray-200 bg-white text-blue-600 shadow-sm hover:bg-gray-50 dark:bg-neutral-900 dark:border-neutral-700 dark:text-blue-500 dark:hover:bg-neutral-800',
          'red' =>
              'border-gray-200 bg-white text-red-500 shadow-sm hover:bg-gray-50 dark:bg-neutral-900 dark:border-neutral-700 dark:hover:bg-neutral-800',
          'yellow' =>
              'border-gray-200 bg-white text-yellow-500 shadow-sm hover:bg-gray-50 dark:bg-neutral-900 dark:border-neutral-700 dark:hover:bg-neutral-800',
          'transparent' => '',
      ];
  } else {
      $colorClasses = [
          'dark' => 'text-gray-800 hover:text-blue-600 dark:text-white dark:hover:text-white/70',
          'gray' => 'text-gray-500 hover:text-blue-600 dark:text-neutral-400 dark:hover:text-white',
          'teal' => '',
          'blue' => 'text-blue-600 hover:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400',
          'red' => '',
          'yellow' => '',
          'transparent' => 'text-white hover:text-white/80',
      ];
  }

  $classes = "$sizeClasses[$size] $variantClasses[$variant] $colorClasses[$color]";
@endphp

@if ($as === 'a')
  <a {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
@else
  <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
  </button>
@endif
