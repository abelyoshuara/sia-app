<x-layouts.app title="Transaksi Penyesuaian">
  <x-slot:scripts>
    {{-- Moment JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>

    <script>
      const table = document.querySelector('#table-transaksi-penyesuaian');
      const tabelNilaiTransaksiPenyesuaian = document.querySelector(
        '#detail-modal #tabel-detail-nilai-transaksi-penyesuaian');
      const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

      const renderTableNilaiTransaksiPenyesuaian = (data) => {
        let html = '';

        if (data.length > 0) {
          data.forEach((n, i) => {
            html += `
              <tr>
                <x-admin.table.td>
                  <div class="px-6 py-3">
                    <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">${i+1}</span>
                  </div>
                </x-admin.table.td>

                <x-admin.table.td class="h-px w-72">
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500 dark:text-neutral-500">${n.akun3.kode} | ${n.akun3.nama}</span>
                  </div>
                </x-admin.table.td>

                <x-admin.table.td class="h-px w-72">
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500 dark:text-neutral-500">${n.debit}</span>
                  </div>
                </x-admin.table.td>

                <x-admin.table.td class="h-px w-72">
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500 dark:text-neutral-500">${n.kredit}</span>
                  </div>
                </x-admin.table.td>

                <x-admin.table.td>
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500 dark:text-neutral-500">${n.status.nama}</span>
                  </div>
                </x-admin.table.td>
              </tr>`;
          });
        } else {
          html += `<tr>
                    <x-admin.table.td class="h-px w-72 text-center" colspan="6">
                      <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-500">Data belum tersedia</span>
                      </div>
                    </x-admin.table.td>
                  </tr>`;
        }

        tabelNilaiTransaksiPenyesuaian.querySelector('tbody').innerHTML = html;
      }

      const fetchTransaksiPenyesuaianById = async (id) => {
        try {
          const response = await fetch(`/transaksi-penyesuaian/${id}`, {
            method: 'GET',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': csrfToken
            }
          });

          const responseJson = await response.json();
          const {
            waktu,
            jumlah,
            tanggal,
            deskripsi,
            nilai,
            nilai_penyesuaian
          } = responseJson.data;

          document.querySelector('#tanggal').textContent = moment(tanggal).format('DD MMM YYYY');
          document.querySelector('#deskripsi').textContent = deskripsi;
          document.querySelector('#nilai').textContent = nilai;
          document.querySelector('#waktu').textContent = waktu;
          document.querySelector('#jumlah').textContent = jumlah;

          renderTableNilaiTransaksiPenyesuaian(nilai_penyesuaian);
        } catch (error) {
          console.error(error);
        }
      };

      table.addEventListener('click', (event) => {
        if (event.target.classList.contains('button-detail')) {
          const id = event.target.dataset.id;
          fetchTransaksiPenyesuaianById(id);
        }
      });
    </script>
  </x-slot>

  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <x-admin.card class="overflow-hidden">
          <x-admin.card.header>
            <x-slot:title>Transaksi Penyesuaian</x-slot>
            <x-slot:subtitle>Daftar Transaksi Penyesuaian</x-slot>
            <x-slot:actions>
              <x-admin.button as="a" href="{{ route('transaksi-penyesuaian.create') }}" size="sm">
                Tambah
              </x-admin.button>
            </x-slot>
          </x-admin.card.header>

          <x-admin.table id="table-transaksi-penyesuaian">
            <x-admin.table.thead>
              <tr>
                <x-admin.table.th class="ps-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      No
                    </span>
                  </div>
                </x-admin.table.th>

                <x-admin.table.th class="px-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Tanggal
                    </span>
                  </div>
                </x-admin.table.th>

                <x-admin.table.th class="px-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Deskripsi
                    </span>
                  </div>
                </x-admin.table.th>

                <x-admin.table.th class="px-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Nilai
                    </span>
                  </div>
                </x-admin.table.th>

                <x-admin.table.th class="px-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Waktu
                    </span>
                  </div>
                </x-admin.table.th>

                <x-admin.table.th class="px-6 text-end"></x-admin.table.th>
              </tr>
            </x-admin.table.thead>

            <x-admin.table.tbody>
              @forelse ($transaksiPenyesuaian as $item)
                <tr>
                  <x-admin.table.td>
                    <div class="px-6 py-3">
                      <span
                        class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $loop->iteration }}</span>
                    </div>
                  </x-admin.table.td>

                  <x-admin.table.td class="h-px w-72">
                    <div class="px-6 py-3">
                      <span
                        class="text-sm text-gray-500 dark:text-neutral-500">{{ date('d M Y', strtotime($item->tanggal)) }}</span>
                    </div>
                  </x-admin.table.td>

                  <x-admin.table.td class="h-px w-72">
                    <div class="px-6 py-3">
                      <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $item->deskripsi }}</span>
                    </div>
                  </x-admin.table.td>

                  <x-admin.table.td class="h-px w-72">
                    <div class="px-6 py-3">
                      <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $item->nilai }}</span>
                    </div>
                  </x-admin.table.td>

                  <x-admin.table.td>
                    <div class="px-6 py-3">
                      <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $item->waktu }}</span>
                    </div>
                  </x-admin.table.td>

                  <x-admin.table.td>
                    <div class="inline-flex">
                      <x-admin.button variant="link" size="sm" data-hs-overlay="#detail-modal"
                        data-id="{{ $item->id }}" class="button-detail">
                        Detail
                      </x-admin.button>
                      <x-admin.button as="a" href="{{ route('transaksi-penyesuaian.edit', $item->id) }}"
                        variant="link" size="sm">
                        Ubah
                      </x-admin.button>
                      <form action="{{ route('transaksi-penyesuaian.destroy', $item->id) }}" method="post">
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

          <x-admin.card.footer>
            <x-slot:total>{{ count($transaksiPenyesuaian) }}</x-slot>
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
      </div>
    </div>
  </div>

  <div id="detail-modal"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div
      class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all lg:max-w-4xl lg:w-full m-3 lg:mx-auto">
      <div
        class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
          <h3 class="font-bold text-gray-800 dark:text-white">
            Detail Transaksi Penyesuaian
          </h3>
          <button type="button"
            class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
            data-hs-overlay="#detail-modal">
            <span class="sr-only">Close</span>
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
        <div class="p-4 overflow-y-auto flex flex-col gap-y-4">

          <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
              <div class="border rounded-lg dark:border-neutral-700">
                <x-admin.table id="tabel-detail-transaksi-penyesuaian">
                  <x-admin.table.tbody>

                    <tr>
                      <x-admin.table.td>
                        <div class="px-6 py-3">
                          <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">Tanggal</span>
                        </div>
                      </x-admin.table.td>
                      <x-admin.table.td class="h-px w-72">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500" id="tanggal"></span>
                        </div>
                      </x-admin.table.td>
                    </tr>

                    <tr>
                      <x-admin.table.td>
                        <div class="px-6 py-3">
                          <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">Deskripsi</span>
                        </div>
                      </x-admin.table.td>
                      <x-admin.table.td class="h-px w-72">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500" id="deskripsi"></span>
                        </div>
                      </x-admin.table.td>
                    </tr>

                    <tr>
                      <x-admin.table.td>
                        <div class="px-6 py-3">
                          <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">Nilai</span>
                        </div>
                      </x-admin.table.td>
                      <x-admin.table.td class="h-px w-72">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500" id="nilai"></span>
                        </div>
                      </x-admin.table.td>
                    </tr>

                    <tr>
                      <x-admin.table.td class="w-1/5">
                        <div class="px-6 py-3">
                          <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">Waktu</span>
                        </div>
                      </x-admin.table.td>
                      <x-admin.table.td class="h-px w-72">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500" id="waktu"></span>
                        </div>
                      </x-admin.table.td>
                    </tr>

                    <tr>
                      <x-admin.table.td class="w-1/5">
                        <div class="px-6 py-3">
                          <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">Jumlah</span>
                        </div>
                      </x-admin.table.td>
                      <x-admin.table.td class="h-px w-72">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500" id="jumlah"></span>
                        </div>
                      </x-admin.table.td>
                    </tr>

                  </x-admin.table.tbody>
                </x-admin.table>
              </div>
            </div>
          </div>

          <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
              <div class="border rounded-lg dark:border-neutral-700">
                <x-admin.table id="tabel-detail-nilai-transaksi-penyesuaian">
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

                  <x-admin.table.tbody></x-admin.table.tbody>
                </x-admin.table>
              </div>
            </div>
          </div>

        </div>
        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
          <button type="button"
            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
            data-hs-overlay="#detail-modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
</x-layouts.app>
