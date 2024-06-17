@props(['size' => 'sm'])

@php
  $sizeClasses = [
      'sm' => 'sm:max-w-lg sm:w-full m-3 sm:mx-auto',
      'md' => 'md:max-w-2xl md:w-full m-3 md:mx-auto',
      'lg' => 'lg:max-w-4xl lg:w-full m-3 lg:mx-auto',
  ];

  $clasess = "hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all $sizeClasses[$size]";
@endphp

<div
  {{ $attributes->merge(['class' => 'hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none']) }}>
  <div class="{{ $clasess }}">
    <div
      class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">

      {{ $slot }}

    </div>
  </div>
</div>
