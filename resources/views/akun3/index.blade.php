<x-layouts.app title="Akun 3">
  <div class="space-y-1">
    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
      Akun 3
    </h2>
    <p class="text-sm text-gray-600 dark:text-neutral-400">
      Tambah, ubah, dan hapus akun3.
    </p>
  </div>

  <div class="flex flex-col" x-data>
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <x-card class="overflow-hidden">
          <x-card.header>
            <x-slot:inputs>
              <x-card.search />
            </x-slot>
            <x-slot:actions>
              <x-button as="a" href="{{ route('akun3.create') }}" size="sm">Tambah</x-button>
            </x-slot>
          </x-card.header>

          <x-table>
            <x-table.thead>
              <tr>
                <x-table.th class="ps-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Kode Akun 3
                    </span>
                  </div>
                </x-table.th>

                <x-table.th class="px-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Nama Akun 3
                    </span>
                  </div>
                </x-table.th>

                <x-table.th class="px-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Nama Akun 1
                    </span>
                  </div>
                </x-table.th>

                <x-table.th class="px-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Nama Akun 2
                    </span>
                  </div>
                </x-table.th>

                <x-table.th class="px-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Created
                    </span>
                  </div>
                </x-table.th>

                <x-table.th class="px-6 text-end"></x-table.th>
              </tr>
            </x-table.thead>

            <x-table.tbody>
              @forelse ($akun3s as $akun3)
                <tr>

                  <x-table.td>
                    <div class="px-6 py-3">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $akun3->kode }}</span>
                    </div>
                  </x-table.td>

                  <x-table.td class="h-px w-72">
                    <div class="px-6 py-3">
                      <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $akun3->nama }}</span>
                    </div>
                  </x-table.td>

                  <x-table.td class="h-px w-72">
                    <div class="px-6 py-3">
                      <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $akun3->akun1->nama }}</span>
                    </div>
                  </x-table.td>

                  <x-table.td class="h-px w-72">
                    <div class="px-6 py-3">
                      <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $akun3->akun2->nama }}</span>
                    </div>
                  </x-table.td>

                  <x-table.td>
                    <div class="px-6 py-3">
                      <span
                        class="text-sm text-gray-500 dark:text-neutral-500">{{ $akun3->created_at->diffForHumans() }}</span>
                    </div>
                  </x-table.td>

                  <x-table.td>
                    <div class="inline-flex">
                      <x-button as="a" href="{{ route('akun3.edit', $akun3->id) }}" variant="link"
                        size="sm">
                        Ubah
                      </x-button>
                      <x-button variant="link" size="sm" data-hs-overlay="#confirm-deletion"
                        @click="$dispatch('set-id', { id: {{ $akun3->id }} })">
                        Hapus
                      </x-button>
                    </div>
                  </x-table.td>
                </tr>
              @empty
                <tr>
                  <x-table.td colspan="5">
                    <div class="px-6 py-3 text-center">
                      <span class="text-sm font-semibold text-red-500">Data belum tersedia!</span>
                    </div>
                  </x-table.td>
                </tr>
              @endforelse
            </x-table.tbody>
          </x-table>

          <x-card.footer>{{ $akun3s->links() }}</x-card.footer>
        </x-card>
      </div>
    </div>
  </div>

  <x-modal id="confirm-deletion" x-data="{ id: null }" @set-id.window="id = $event.detail.id">
    <x-modal.header dismiss="#confirm-deletion">Hapus Konfirmasi</x-modal.header>

    <x-modal.body>
      <p class="text-gray-800 dark:text-neutral-400">Apakah anda yakin data ingin dihapus?</p>
    </x-modal.body>

    <x-modal.footer>
      <x-button variant="white" color="dark" size="sm" data-hs-overlay="#confirm-deletion">
        Tutup
      </x-button>
      <form :action="`{{ route('akun3.destroy', '') }}/${id}`" method="post">
        @csrf
        @method('DELETE')
        <x-button type="submit" variant="solid" color="red" size="sm">
          Hapus
        </x-button>
      </form>
    </x-modal.footer>
  </x-modal>
</x-layouts.app>
