<div {{ $attributes->merge(['class' => 'px-6 py-4 border-t border-gray-200 dark:border-neutral-700']) }}>
  {{ $slot }}

  @if (isset($total))
    <div>
      <p class="text-sm text-gray-600 dark:text-neutral-400">
        <span class="font-semibold text-gray-800 dark:text-neutral-200">{{ $total }}</span> results
      </p>
    </div>
  @endif

  @if (isset($pagination))
    <div>
      {{ $pagination }}
    </div>
  @endif
</div>
