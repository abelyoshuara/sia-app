<x-layouts.admin title="Akun 1">
  <x-admin.card>
    <x-admin.card.header>
      <x-slot:title>Akun 1</x-slot>
      <x-slot:subtitle>Daftar Akun 1</x-slot>
      <x-slot:actions>
        <x-admin.button as="a" href="{{ route('akun1.create') }}" size="sm">Buat Akun 1</x-admin.button>
      </x-slot>
    </x-admin.card.header>

    <x-admin.table>
      <x-admin.table.thead>
        <tr>
          <x-admin.table.th class="ps-6 text-start">
            <div class="flex items-center gap-x-2">
              <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                Kode
              </span>
            </div>
          </x-admin.table.th>

          <x-admin.table.th class="px-6 text-start">
            <div class="flex items-center gap-x-2">
              <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                Nama
              </span>
            </div>
          </x-admin.table.th>

          <x-admin.table.th class="px-6 text-start">
            <div class="flex items-center gap-x-2">
              <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                Created
              </span>
            </div>
          </x-admin.table.th>

          <x-admin.table.th class="px-6 text-end"></x-admin.table.th>
        </tr>
      </x-admin.table.thead>

      <x-admin.table.tbody>
        @foreach ($akun1s as $akun1)
          <tr>
            <x-admin.table.td>
              <div class="px-6 py-3">
                <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $akun1->kode }}</span>
              </div>
            </x-admin.table.td>
            <x-admin.table.td class="h-px w-72">
              <div class="px-6 py-3">
                <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $akun1->nama }}</span>
              </div>
            </x-admin.table.td>
            <x-admin.table.td>
              <div class="px-6 py-3">
                <span
                  class="text-sm text-gray-500 dark:text-neutral-500">{{ $akun1->created_at->diffForHumans() }}</span>
              </div>
            </x-admin.table.td>
            <x-admin.table.td>
              <div class="inline-flex">
                <x-admin.button as="a" href="{{ route('akun1.edit', $akun1->id) }}" variant="link"
                  size="sm">
                  Edit
                </x-admin.button>
                <form action="{{ route('akun1.destroy', $akun1->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <x-admin.button type="submit" variant="link" size="sm">
                    Delete
                  </x-admin.button>
                </form>
              </div>
            </x-admin.table.td>
          </tr>
        @endforeach
      </x-admin.table.tbody>
    </x-admin.table>

    <x-admin.card.footer>
      <x-slot:total>{{ count($akun1s) }}</x-slot>
      <x-slot:pagination>
        <div class="inline-flex gap-x-2">
          <button type="button"
            class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="m15 18-6-6 6-6" />
            </svg>
            Prev
          </button>

          <button type="button"
            class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
            Next
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="m9 18 6-6-6-6" />
            </svg>
          </button>
        </div>
      </x-slot:pagination>
    </x-admin.card.footer>
  </x-admin.card>
</x-layouts.admin>
