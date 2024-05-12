@props(['value'])

<label {{ $attributes->merge(['class' => 'inline-block text-sm font-medium text-gray-800 dark:text-neutral-200']) }}>
  {{ $value ?? $slot }}
</label>
