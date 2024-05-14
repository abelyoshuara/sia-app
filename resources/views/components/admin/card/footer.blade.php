<div
  {{ $attributes->merge(['class' => 'px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700']) }}>
  <div>
    <p class="text-sm text-gray-600 dark:text-neutral-400">
      <span class="font-semibold text-gray-800 dark:text-neutral-200">{{ $total }}</span> results
    </p>
  </div>
  @if (isset($pagination))
    <div>
      {{ $pagination }}
    </div>
  @endif
</div>
