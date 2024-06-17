@props(['active' => false])

@php
  // request()->fullUrlIs(url($href))
  $classes =
      $active ?? false
          ? 'flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 hover:dark:bg-neutral-700 dark:bg-neutral-700 dark:text-white'
          : 'w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</a>
