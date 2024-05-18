@props(['placeholder' => 'Pilih Item'])

<select
  {{ $attributes->merge(['class' => 'py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600']) }}>
  <option value="">{{ $placeholder }}</option>
  {{ $slot }}
</select>
