@props(['type' => 'button'])

<button type="{{ $type }}"
  {{ $attributes->merge(['class' => 'py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none']) }}>
  {{ $slot }}
</button>
