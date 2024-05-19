@props(['rows' => 3, 'error' => false, 'disabled' => false])

@php
  $classes =
      $error ?? false
          ? 'py-3 px-4 block w-full border-red-500 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-red-500 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-red-500'
          : 'py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-blue-500';
@endphp

<textarea rows="{{ $rows }}" {{ $attributes->merge(['class' => $classes]) }} {{ $disabled ? 'disabled' : '' }}>{{ $slot }}</textarea>
