@props(['active' => false])

@php
  $classes =
      $active ?? false
          ? 'hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600  text-sm text-neutral-700 rounded-lg bg-gray-100 dark:bg-neutral-700 dark:hover:bg-neutral-700 dark:text-neutral-300 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white'
          : 'hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600  text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white';
@endphp

<button type="button" {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}

  <svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
    stroke-linejoin="round">
    <path d="m18 15-6-6-6 6" />
  </svg>

  <svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
    stroke-linejoin="round">
    <path d="m6 9 6 6 6-6" />
  </svg>
</button>
