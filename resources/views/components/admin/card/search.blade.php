@props(['action' => '', 'name' => 'search', 'placeholder' => 'Cari...'])

<form action="{{ $action }}" class="sm:col-span-1">
  <label for="search" class="sr-only">Search</label>
  <div class="relative">
    <x-admin.forms.text-input class="pt-2 pb-2 px-3 ps-11" id="{{ $name }}" name="{{ $name }}"
      value="{{ request('search') }}" placeholder="{{ $placeholder }}" />
    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
      <svg class="flex-shrink-0 size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8" />
        <path d="m21 21-4.3-4.3" />
      </svg>
    </div>
  </div>
</form>
