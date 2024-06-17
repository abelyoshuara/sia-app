<x-layouts.app title="Akun 2">
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <x-admin.card class="overflow-hidden">
          <x-admin.card.header>
            <x-slot:inputs>
              <x-admin.card.search />
            </x-slot>
            <x-slot:actions>
              <x-admin.button as="a" href="{{ route('akun2.create') }}" size="sm">Buat Akun 2</x-admin.button>
            </x-slot>
          </x-admin.card.header>

          <x-admin.table>
            <x-admin.table.thead>
              <tr>
                <x-admin.table.th class="ps-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Kode Akun 2
                    </span>
                  </div>
                </x-admin.table.th>

                <x-admin.table.th class="px-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Nama Akun 2
                    </span>
                  </div>
                </x-admin.table.th>

                <x-admin.table.th class="px-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Nama Akun 1
                    </span>
                  </div>
                </x-admin.table.th>

                <x-admin.table.th class="px-6 text-start whitespace-nowrap">
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
              @forelse ($akun2s as $akun2)
                <tr>

                  <x-admin.table.td>
                    <div class="px-6 py-3">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $akun2->kode }}</span>
                    </div>
                  </x-admin.table.td>

                  <x-admin.table.td class="h-px w-72">
                    <div class="px-6 py-3">
                      <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $akun2->nama }}</span>
                    </div>
                  </x-admin.table.td>

                  <x-admin.table.td class="h-px w-72">
                    <div class="px-6 py-3">
                      <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $akun2->akun1->nama }}</span>
                    </div>
                  </x-admin.table.td>

                  <x-admin.table.td>
                    <div class="px-6 py-3">
                      <span
                        class="text-sm text-gray-500 dark:text-neutral-500">{{ $akun2->created_at->diffForHumans() }}</span>
                    </div>
                  </x-admin.table.td>

                  <x-admin.table.td>
                    <div class="inline-flex">
                      <x-admin.button as="a" href="{{ route('akun2.edit', $akun2->id) }}" variant="link"
                        size="sm">
                        Edit
                      </x-admin.button>
                      <form action="{{ route('akun2.destroy', $akun2->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <x-admin.button type="submit" variant="link" size="sm">
                          Delete
                        </x-admin.button>
                      </form>
                    </div>
                  </x-admin.table.td>
                </tr>
              @empty
                <tr>
                  <x-admin.table.td colspan="5">
                    <div class="px-6 py-3 text-center">
                      <span class="text-sm font-semibold text-red-500">Data belum tersedia!</span>
                    </div>
                  </x-admin.table.td>
                </tr>
              @endforelse
            </x-admin.table.tbody>
          </x-admin.table>

          <x-admin.card.footer>{{ $akun2s->links() }}</x-admin.card.footer>
        </x-admin.card>
      </div>
    </div>
  </div>
</x-layouts.app>
