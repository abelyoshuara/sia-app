<x-layouts.admin title="Transaksi Jurnal">
  <x-admin.card>
    <x-admin.card.header>
      <x-slot:title>Transaksi Jurnal</x-slot>
      <x-slot:subtitle>Buat Transaksi Jurnal</x-slot>
    </x-admin.card.header>

    <x-admin.card.content class="lg:w-full">
      <form action="{{ route('transaksi-jurnal.store') }}" method="POST" class="flex flex-wrap -mx-4 gap-y-5">
        @csrf

        <div class="w-full lg:w-1/4 px-4 space-y-4">
          <div class="space-y-2">
            <x-admin.forms.input-label for="kwitansi"
              class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-200" :value="__('Kwitansi')" />
            <x-admin.forms.text-input id="kwitansi" name="kwitansi" :value="old('kwitansi')" placeholder="Masukan Kwitansi"
              :error="$errors->first('kwitansi')" />
            <x-admin.forms.input-error :message="$errors->first('kwitansi')" />
          </div>

          <div class="space-y-2">
            <x-admin.forms.input-label for="tanggal"
              class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-200" :value="__('Tanggal')" />
            <x-admin.forms.text-input type="date" id="tanggal" name="tanggal" :value="old('tanggal')"
              placeholder="Masukan Tanggal" :error="$errors->first('tanggal')" />
            <x-admin.forms.input-error :message="$errors->first('tanggal')" />
          </div>

          <div class="space-y-2">
            <x-admin.forms.input-label for="deskripsi"
              class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-200" :value="__('Deskripsi')" />
            <x-admin.forms.textarea id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi"
              :error="$errors->first('deskripsi')">{{ old('deskripsi') }}</x-admin.forms.textarea>
            <x-admin.forms.input-error :message="$errors->first('deskripsi')" />
          </div>

          <div class="space-y-2">
            <x-admin.forms.input-label for="keterangan_jurnal"
              class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-200" :value="__('Keterangan Jurnal')" />
            <x-admin.forms.textarea id="keterangan_jurnal" name="keterangan_jurnal"
              placeholder="Masukan Keterangan Jurnal"
              :error="$errors->first('keterangan_jurnal')">{{ old('keterangan_jurnal') }}</x-admin.forms.textarea>
            <x-admin.forms.input-error :message="$errors->first('keterangan_jurnal')" />
          </div>
        </div>

        <div class="w-full lg:w-3/4 px-4">
          <x-admin.button variant="white" color="dark" size="sm" class="mb-4"
            data-hs-overlay="#hs-slide-down-animation-modal">
            Tambah
          </x-admin.button>
          <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
              <div class="border rounded-lg overflow-hidden dark:border-neutral-700">
                <x-admin.table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                  <x-admin.table.thead>
                    <tr>
                      <x-admin.table.th class="ps-6 text-start whitespace-nowrap">
                        <div class="flex items-center gap-x-2">
                          <span
                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            No
                          </span>
                        </div>
                      </x-admin.table.th>

                      <x-admin.table.th class="px-6 text-start whitespace-nowrap">
                        <div class="flex items-center gap-x-2">
                          <span
                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            Kode Akun
                          </span>
                        </div>
                      </x-admin.table.th>

                      <x-admin.table.th class="px-6 text-start whitespace-nowrap">
                        <div class="flex items-center gap-x-2">
                          <span
                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            Debit
                          </span>
                        </div>
                      </x-admin.table.th>

                      <x-admin.table.th class="px-6 text-start whitespace-nowrap">
                        <div class="flex items-center gap-x-2">
                          <span
                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            Kredit
                          </span>
                        </div>
                      </x-admin.table.th>

                      <x-admin.table.th class="px-6 text-start whitespace-nowrap">
                        <div class="flex items-center gap-x-2">
                          <span
                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            Status
                          </span>
                        </div>
                      </x-admin.table.th>

                      <x-admin.table.th class="px-6 text-end"></x-admin.table.th>
                    </tr>
                  </x-admin.table.thead>

                  <x-admin.table.tbody>
                    <tr>
                      <x-admin.table.td>
                        <div class="px-6 py-3">
                          <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">x</span>
                        </div>
                      </x-admin.table.td>

                      <x-admin.table.td class="h-px w-72">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">Lorem ipsum dolor sit!</span>
                        </div>
                      </x-admin.table.td>

                      <x-admin.table.td class="h-px w-72">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">Lorem ipsum dolor sit!</span>
                        </div>
                      </x-admin.table.td>

                      <x-admin.table.td class="h-px w-72">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">Lorem ipsum dolor sit!</span>
                        </div>
                      </x-admin.table.td>

                      <x-admin.table.td>
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">Lorem ipsum dolor sit!</span>
                        </div>
                      </x-admin.table.td>

                      <x-admin.table.td>
                        <div class="inline-flex">
                          <form action="{{ route('transaksi-jurnal.destroy', 1) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <x-admin.button type="submit" variant="link" size="sm">
                              Delete
                            </x-admin.button>
                          </form>
                        </div>
                      </x-admin.table.td>
                    </tr>
                  </x-admin.table.tbody>
                </x-admin.table>
              </div>
            </div>
          </div>
        </div>

        <div class="px-4 flex justify-end gap-x-2">
          <x-admin.button type="submit">Save</x-admin.button>
          <x-admin.button as="a" href="{{ route('transaksi-jurnal.index') }}" variant="white"
            color="dark">Cancel</x-admin.button>
        </div>

      </form>
    </x-admin.card.content>
  </x-admin.card>

  <div id="hs-slide-down-animation-modal"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div
      class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
      <div
        class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
          <h3 class="font-bold text-gray-800 dark:text-white">
            Modal title
          </h3>
          <button type="button"
            class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
            data-hs-overlay="#hs-slide-down-animation-modal">
            <span class="sr-only">Close</span>
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
        <div class="p-4 overflow-y-auto">
          <p class="mt-1 text-gray-800 dark:text-neutral-400">
            This is a wider card with supporting text below as a natural lead-in to additional content.
          </p>
        </div>
        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
          <button type="button"
            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
            data-hs-overlay="#hs-slide-down-animation-modal">
            Close
          </button>
          <button type="button"
            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            Save changes
          </button>
        </div>
      </div>
    </div>
  </div>
</x-layouts.admin>
