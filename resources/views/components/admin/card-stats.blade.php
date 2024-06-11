<div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
  <div class="p-4 md:p-5 flex gap-x-4">
    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-neutral-700">
      {{ $icon }}
    </div>

    <div class="grow">
      <div class="flex items-center gap-x-2">
        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
          {{ $label }}
        </p>
      </div>
      <div class="mt-1 flex items-center gap-x-2">
        <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
          {{ $value }}
        </h3>
      </div>
    </div>
  </div>
</div>
