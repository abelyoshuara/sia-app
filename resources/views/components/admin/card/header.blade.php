<div
  class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
  <div class="space-y-1">
    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
      {{ $title }}
    </h2>
    @if (isset($subtitle))
      <p class="text-sm text-gray-600 dark:text-neutral-400">
        {{ $subtitle }}
      </p>
    @endif
  </div>
  @if (isset($actions))
    <div>
      <div class="inline-flex gap-x-2">
        {{ $actions }}
      </div>
    </div>
  @endif
</div>
