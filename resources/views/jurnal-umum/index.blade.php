<x-layouts.app title="Jurnal Umum">
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">

        <x-admin.card class="overflow-hidden">
          <x-admin.card.header>
            <x-slot:title>Jurnal Umum</x-slot>
            <x-slot:subtitle>Laporan Jurnal Umum</x-slot>
            <x-slot:actions>
              <x-admin.button as="a" href="{{ route('users.create') }}" size="sm" color="gray">
                Cetak
              </x-admin.button>
            </x-slot>
          </x-admin.card.header>
          <x-admin.card.content class="lg:w-full space-y-4">

            <form method="GET" action="{{ route('jurnal-umum.index') }}" class="flex gap-x-4 items-end">
              @csrf
              <div class="w-full lg:w-1/6 space-y-2">
                <x-admin.forms.input-label for="tanggal_mulai" :value="__('Tanggal Mulai')" />
                <x-admin.forms.text-input type="date" id="tanggal_mulai" name="tanggal_mulai" :value="old('tanggal_mulai')"
                  required />
              </div>
              <div class="w-full lg:w-1/6 space-y-2">
                <x-admin.forms.input-label for="tanggal_akhir" :value="__('Tanggal Akhir')" />
                <x-admin.forms.text-input type="date" id="tanggal_akhir" name="tanggal_akhir" :value="old('tanggal_akhir')"
                  required />
              </div>
              <x-admin.button type="submit">
                Terapkan
              </x-admin.button>
            </form>

            <div class="border rounded-lg overflow-hidden dark:border-neutral-700">
              <x-admin.table id="table-jurnal-umum">
                <x-admin.table.thead>
                  <tr>
                    <x-admin.table.th class="ps-6 text-start whitespace-nowrap">
                      <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                          Tanggal
                        </span>
                      </div>
                    </x-admin.table.th>

                    <x-admin.table.th class="px-6 text-start whitespace-nowrap">
                      <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                          Keterangan
                        </span>
                      </div>
                    </x-admin.table.th>

                    <x-admin.table.th class="px-6 text-start whitespace-nowrap">
                      <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                          Ref
                        </span>
                      </div>
                    </x-admin.table.th>

                    <x-admin.table.th class="px-6 text-start whitespace-nowrap">
                      <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                          Debit
                        </span>
                      </div>
                    </x-admin.table.th>

                    <x-admin.table.th class="px-6 text-start whitespace-nowrap">
                      <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                          Kredit
                        </span>
                      </div>
                    </x-admin.table.th>
                  </tr>
                </x-admin.table.thead>

                <x-admin.table.tbody>
                  @forelse ([] as $user)
                    <tr>
                      <x-admin.table.td>
                        <div class="px-6 py-3">
                          <span
                            class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $loop->iteration }}</span>
                        </div>
                      </x-admin.table.td>

                      <x-admin.table.td class="h-px w-72">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $user->name }}</span>
                        </div>
                      </x-admin.table.td>

                      <x-admin.table.td class="h-px w-72">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $user->email }}</span>
                        </div>
                      </x-admin.table.td>

                      <x-admin.table.td>
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $user->role }}</span>
                        </div>
                      </x-admin.table.td>

                      <x-admin.table.td>
                        <div class="inline-flex">
                          <x-admin.button as="a" href="{{ route('users.edit', $user->id) }}" variant="link"
                            size="sm">
                            Ubah
                          </x-admin.button>
                          <form action="{{ route('users.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <x-admin.button type="submit" variant="link" size="sm">
                              Hapus
                            </x-admin.button>
                          </form>
                        </div>
                      </x-admin.table.td>
                    </tr>
                  @empty
                    <tr>
                      <x-admin.table.td colspan="6">
                        <div class="px-6 py-3 text-center">
                          <span class="text-sm font-semibold text-red-500">Data belum tersedia!</span>
                        </div>
                      </x-admin.table.td>
                    </tr>
                  @endforelse
                </x-admin.table.tbody>
              </x-admin.table>
            </div>

          </x-admin.card.content>
          <x-admin.card.footer>
            <x-slot:total>{{ count([]) }}</x-slot>
          </x-admin.card.footer>
        </x-admin.card>

      </div>
    </div>
  </div>
</x-layouts.app>
