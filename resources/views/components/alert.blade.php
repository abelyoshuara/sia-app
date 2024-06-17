@props(['type' => 'info', 'message' => ''])

@php
  if ($type === 'success') {
      $classes =
          'mt-2 bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500';
  } elseif ($type === 'error') {
      $classes =
          'mt-2 bg-red-100 border border-red-200 text-sm text-red-800 rounded-lg p-4 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500';
  } else {
      $classes =
          'mt-2 bg-blue-100 border border-blue-200 text-sm text-blue-800 rounded-lg p-4 dark:bg-blue-800/10 dark:border-blue-900 dark:text-blue-500';
  }
@endphp

@if ($message)
  <div {{ $attributes->merge(['class' => $classes]) }} role="alert">
    {{ $message }}
  </div>
@endif
