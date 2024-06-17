<x-layouts.app title="Jurnal Umum">
  <div class="space-y-1">
    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
      Jurnal Umum
    </h2>
    <p class="text-sm text-gray-600 dark:text-neutral-400">
      Expor jurnal umum ke PDF.
    </p>
  </div>

  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <x-card class="overflow-hidden">

          <x-card.header>
            <x-slot:inputs>
              <form class="flex gap-x-2 items-end">
                <x-forms.text-input type="date" id="start_date" name="start_date" :value="request('start_date')" required />
                <x-forms.text-input type="date" id="end_date" name="end_date" :value="request('end_date')" required />
                <x-button type="submit">Filter</x-admin.button>
              </form>
            </x-slot>
            <x-slot:actions>
              <x-button as="a" href="/export" variant="white" size="sm" color="dark">
                Expor
                </x-admin.button>
            </x-slot>
            </x-admin.card.header>

            <x-table id="table-jurnal-umum">
              <x-table.thead>
                <tr>
                  <x-table.th class="ps-6 text-start whitespace-nowrap">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Tanggal
                      </span>
                    </div>
                    </x-admin.table.th>

                    <x-table.th class="px-6 text-start whitespace-nowrap">
                      <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                          Keterangan
                        </span>
                      </div>
                      </x-admin.table.th>

                      <x-table.th class="px-6 text-start whitespace-nowrap">
                        <div class="flex items-center gap-x-2">
                          <span
                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            Ref
                          </span>
                        </div>
                        </x-admin.table.th>

                        <x-table.th class="px-6 text-start whitespace-nowrap">
                          <div class="flex items-center gap-x-2">
                            <span
                              class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                              Debit
                            </span>
                          </div>
                          </x-admin.table.th>

                          <x-table.th class="px-6 text-start whitespace-nowrap">
                            <div class="flex items-center gap-x-2">
                              <span
                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                Kredit
                              </span>
                            </div>
                            </x-admin.table.th>
                </tr>
                </x-admin.table.thead>

                <x-table.tbody>
                  @forelse ($jurnalUmum as $item)
                    <tr>
                      <x-table.td>
                        <div class="px-6 py-3">
                          <span
                            class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $item->tanggal }}</span>
                        </div>
                        </x-admin.table.td>

                        <x-table.td class="h-px w-72">
                          <div class="px-6 py-3">
                            <span class="text-sm text-gray-500 dark:text-neutral-500">{{ 'keterangan' }}</span>
                          </div>
                          </x-admin.table.td>

                          <x-table.td class="h-px w-72">
                            <div class="px-6 py-3">
                              <span class="text-sm text-gray-500 dark:text-neutral-500">{{ 'ref' }}</span>
                            </div>
                            </x-admin.table.td>

                            <x-table.td>
                              <div class="px-6 py-3">
                                <span class="text-sm text-gray-500 dark:text-neutral-500">{{ 'debit' }}</span>
                              </div>
                              </x-admin.table.td>

                              <x-table.td>
                                <div class="px-6 py-3">
                                  <span class="text-sm text-gray-500 dark:text-neutral-500">{{ 'kredit' }}</span>
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

                  <x-card.footer>{{ $jurnalUmum->links() }}</x-admin.card.footer>

                    </x-admin.card>
      </div>
    </div>
  </div>
</x-layouts.app>
