<x-layouts.app title="Pengguna">
  <div class="space-y-1">
    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
      Pengguna
    </h2>
    <p class="text-sm text-gray-600 dark:text-neutral-400">
      Tambah, ubah, dan hapus pengguna.
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
              <x-button as="a" href="{{ route('users.create') }}" size="sm">
                Tambah
                </x-admin.button>
            </x-slot>
            </x-admin.card.header>

            <x-table id="table-users">
              <x-table.thead>
                <tr>
                  <x-table.th class="ps-6 text-start whitespace-nowrap">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        No
                      </span>
                    </div>
                    </x-admin.table.th>

                    <x-table.th class="px-6 text-start whitespace-nowrap">
                      <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                          Nama
                        </span>
                      </div>
                      </x-admin.table.th>

                      <x-table.th class="px-6 text-start whitespace-nowrap">
                        <div class="flex items-center gap-x-2">
                          <span
                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            Email
                          </span>
                        </div>
                        </x-admin.table.th>

                        <x-table.th class="px-6 text-start whitespace-nowrap">
                          <div class="flex items-center gap-x-2">
                            <span
                              class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                              Role
                            </span>
                          </div>
                          </x-admin.table.th>

                          <x-table.th class="px-6 text-end"></x-admin.table.th>
                </tr>
                </x-admin.table.thead>

                <x-table.tbody>
                  @forelse ($users as $user)
                    <tr>
                      <x-table.td>
                        <div class="px-6 py-3">
                          <span
                            class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $loop->iteration + $users->firstItem() - 1 }}</span>
                        </div>
                        </x-admin.table.td>

                        <x-table.td class="h-px w-72">
                          <div class="px-6 py-3">
                            <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $user->name }}</span>
                          </div>
                          </x-admin.table.td>

                          <x-table.td class="h-px w-72">
                            <div class="px-6 py-3">
                              <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $user->email }}</span>
                            </div>
                            </x-admin.table.td>

                            <x-table.td>
                              <div class="px-6 py-3">
                                <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $user->role }}</span>
                              </div>
                              </x-admin.table.td>

                              <x-table.td>
                                <div class="inline-flex">
                                  <x-button as="a" href="{{ route('users.edit', $user->id) }}" variant="link"
                                    size="sm">
                                    Ubah
                                    </x-admin.button>
                                    <x-button variant="link" size="sm" data-hs-overlay="#confirm-deletion"
                                      @click="$dispatch('set-id', { id: {{ $user->id }} })">
                                      Hapus
                                      </x-admin.button>
                                </div>
                                </x-admin.table.td>
                    </tr>
                  @empty
                    <tr>
                      <x-table.td colspan="6">
                        <div class="px-6 py-3 text-center">
                          <span class="text-sm font-semibold text-red-500">Data belum tersedia!</span>
                        </div>
                        </x-admin.table.td>
                    </tr>
                  @endforelse
                  </x-admin.table.tbody>
                  </x-admin.table>

                  <x-card.footer>{{ $users->links() }}</x-admin.card.footer>
                    </x-admin.card>
      </div>
    </div>
  </div>

  <x-modal id="confirm-deletion" x-data="{ id: null }" @set-id.window="id = $event.detail.id">
    <x-modal.header dismiss="#confirm-deletion">Hapus Konfirmasi</x-admin.modal.header>

      <x-modal.body>
        <p class="text-gray-800 dark:text-neutral-400">Apakah anda yakin data ingin dihapus?</p>
        </x-admin.modal.body>

        <x-modal.footer>
          <x-button variant="white" color="dark" size="sm" data-hs-overlay="#confirm-deletion">
            Tutup
            </x-admin.button>
            <form :action="`{{ route('users.destroy', '') }}/${id}`" method="post">
              @csrf
              @method('DELETE')
              <x-button type="submit" variant="solid" color="red" size="sm">
                Hapus
                </x-admin.button>
            </form>
            </x-admin.modal.footer>
            </x-admin.modal>
</x-layouts.app>
