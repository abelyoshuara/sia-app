<x-layouts.app title="Transaksi Jurnal">
  <x-slot:scripts>
    {{-- Moment JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>

    <script>
      const table = document.querySelector('#table-transaksi-jurnal');
      const tabelNilaiTransaksiJurnal = document.querySelector('#detail-modal #tabel-detail-nilai-transaksi-jurnal');
      const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

      const renderTableNilaiTransaksiJurnal = (data) => {
        let html = '';

        if (data.length > 0) {
          data.forEach((n, i) => {
            html += `
              <tr>
                <x-table.td>
                  <div class="px-6 py-3">
                    <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">${i+1}</span>
                  </div>
                </x-table.td>

                <x-table.td class="h-px w-72">
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500 dark:text-neutral-500">${n.akun3.kode} | ${n.akun3.nama}</span>
                  </div>
                </x-table.td>

                <x-table.td class="h-px w-72">
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500 dark:text-neutral-500">${n.debit}</span>
                  </div>
                </x-table.td>

                <x-table.td class="h-px w-72">
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500 dark:text-neutral-500">${n.kredit}</span>
                  </div>
                </x-table.td>

                <x-table.td>
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500 dark:text-neutral-500">${n.status.nama}</span>
                  </div>
                </x-table.td>
              </tr>`;
          });
        } else {
          html += `<tr>
                    <x-table.td class="h-px w-72 text-center" colspan="6">
                      <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-500">Data belum tersedia</span>
                      </div>
                    </x-table.td>
                  </tr>`;
        }

        tabelNilaiTransaksiJurnal.querySelector('tbody').innerHTML = html;
      }

      const fetchTransaksiJurnalById = async (id) => {
        try {
          const response = await fetch(`/transaksi-jurnal/${id}`, {
            method: 'GET',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': csrfToken
            }
          });

          const responseJson = await response.json();
          const {
            kwitansi,
            tanggal,
            deskripsi,
            keterangan_jurnal,
            nilai_jurnal: nilai
          } = responseJson.data;

          document.querySelector('#kwitansi').textContent = kwitansi;
          document.querySelector('#tanggal').textContent = moment(tanggal).format('DD MMM YYYY');
          document.querySelector('#deskripsi').textContent = deskripsi;
          document.querySelector('#keterangan_jurnal').textContent = keterangan_jurnal;

          renderTableNilaiTransaksiJurnal(nilai);
        } catch (error) {
          console.error(error);
        }
      };

      table.addEventListener('click', (event) => {
        if (event.target.classList.contains('button-detail')) {
          const id = event.target.dataset.id;
          fetchTransaksiJurnalById(id);
        }
      });
    </script>
  </x-slot>

  <div class="space-y-1">
    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
      Transaksi Jurnal
    </h2>
    <p class="text-sm text-gray-600 dark:text-neutral-400">
      Tambah, ubah, dan hapus transaksi jurnal.
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
              <x-button as="a" href="{{ route('transaksi-jurnal.create') }}" size="sm">
                Tambah
              </x-button>
            </x-slot>
          </x-card.header>

          <x-table id="table-transaksi-jurnal">
            <x-table.thead>
              <tr>
                <x-table.th class="ps-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      No
                    </span>
                  </div>
                </x-table.th>

                <x-table.th class="px-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Kwitansi
                    </span>
                  </div>
                </x-table.th>

                <x-table.th class="px-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Tanggal
                    </span>
                  </div>
                </x-table.th>

                <x-table.th class="px-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Keterangan Jurnal
                    </span>
                  </div>
                </x-table.th>

                <x-table.th class="px-6 text-start whitespace-nowrap">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Deskripsi
                    </span>
                  </div>
                </x-table.th>

                <x-table.th class="px-6 text-end"></x-table.th>
              </tr>
            </x-table.thead>

            <x-table.tbody>
              @forelse ($transaksiJurnal as $tj)
                <tr>
                  <x-table.td>
                    <div class="px-6 py-3">
                      <span
                        class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $loop->iteration + $transaksiJurnal->firstItem() - 1 }}</span>
                    </div>
                  </x-table.td>

                  <x-table.td class="h-px w-72">
                    <div class="px-6 py-3">
                      <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $tj->kwitansi }}</span>
                    </div>
                  </x-table.td>

                  <x-table.td class="h-px w-72">
                    <div class="px-6 py-3">
                      <span
                        class="text-sm text-gray-500 dark:text-neutral-500">{{ date('d M Y', strtotime($tj->tanggal)) }}</span>
                    </div>
                  </x-table.td>

                  <x-table.td class="h-px w-72">
                    <div class="px-6 py-3">
                      <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $tj->keterangan_jurnal }}</span>
                    </div>
                  </x-table.td>

                  <x-table.td>
                    <div class="px-6 py-3">
                      <span
                        class="text-sm text-gray-500 dark:text-neutral-500">{{ Str::limit($tj->deskripsi, 90) }}</span>
                    </div>
                  </x-table.td>

                  <x-table.td>
                    <div class="inline-flex">
                      <x-button variant="link" size="sm" data-hs-overlay="#detail-modal"
                        data-id="{{ $tj->id }}" class="button-detail">
                        Detail
                      </x-button>
                      <x-button as="a" href="{{ route('transaksi-jurnal.edit', $tj->id) }}" variant="link"
                        size="sm">
                        Ubah
                      </x-button>
                      <x-button variant="link" size="sm" data-hs-overlay="#confirm-deletion"
                        @click="$dispatch('set-id', { id: {{ $tj->id }} })">
                        Hapus
                      </x-button>
                    </div>
                  </x-table.td>
                </tr>
              @empty
                <tr>
                  <x-table.td colspan="6">
                    <div class="px-6 py-3 text-center">
                      <span class="text-sm font-semibold text-red-500">Data belum tersedia!</span>
                    </div>
                  </x-table.td>
                </tr>
              @endforelse
            </x-table.tbody>
          </x-table>

          <x-card.footer>{{ $transaksiJurnal->links() }}</x-card.footer>
        </x-card>
      </div>
    </div>
  </div>

  <x-modal id="detail-modal" size="lg">
    <x-modal.header dismiss="#detail-modal">Detail Transaksi Jurnal</x-modal.header>

    <x-modal.body class="flex flex-col gap-y-4">
      <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <div class="border rounded-lg dark:border-neutral-700">
            <x-table id="tabel-detail-transaksi-jurnal">
              <x-table.tbody>

                <tr>
                  <x-table.td class="w-1/5">
                    <div class="px-6 py-3">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">Kwitansi</span>
                    </div>
                  </x-table.td>
                  <x-table.td class="h-px w-72">
                    <div class="px-6 py-3">
                      <span class="text-sm text-gray-500 dark:text-neutral-500" id="kwitansi"></span>
                    </div>
                  </x-table.td>
                </tr>

                <tr>
                  <x-table.td>
                    <div class="px-6 py-3">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">Tanggal</span>
                    </div>
                  </x-table.td>
                  <x-table.td class="h-px w-72">
                    <div class="px-6 py-3">
                      <span class="text-sm text-gray-500 dark:text-neutral-500" id="tanggal"></span>
                    </div>
                  </x-table.td>
                </tr>

                <tr>
                  <x-table.td>
                    <div class="px-6 py-3">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">Keterangan
                        Jurnal</span>
                    </div>
                  </x-table.td>
                  <x-table.td class="h-px w-72">
                    <div class="px-6 py-3">
                      <span class="text-sm text-gray-500 dark:text-neutral-500" id="keterangan_jurnal"></span>
                    </div>
                  </x-table.td>
                </tr>

                <tr>
                  <x-table.td>
                    <div class="px-6 py-3">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">Deskripsi</span>
                    </div>
                  </x-table.td>
                  <x-table.td class="h-px w-72">
                    <div class="px-6 py-3">
                      <span class="text-sm text-gray-500 dark:text-neutral-500" id="deskripsi"></span>
                    </div>
                  </x-table.td>
                </tr>

              </x-table.tbody>
            </x-table>
          </div>
        </div>
      </div>

      <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <div class="border rounded-lg dark:border-neutral-700">
            <x-table id="tabel-detail-nilai-transaksi-jurnal">
              <x-table.thead>
                <tr>
                  <x-table.th class="ps-6 text-start whitespace-nowrap">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        No
                      </span>
                    </div>
                  </x-table.th>

                  <x-table.th class="px-6 text-start whitespace-nowrap">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Kode Akun
                      </span>
                    </div>
                  </x-table.th>

                  <x-table.th class="px-6 text-start whitespace-nowrap">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Debit
                      </span>
                    </div>
                  </x-table.th>

                  <x-table.th class="px-6 text-start whitespace-nowrap">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Kredit
                      </span>
                    </div>
                  </x-table.th>

                  <x-table.th class="px-6 text-start whitespace-nowrap">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Status
                      </span>
                    </div>
                  </x-table.th>

                  <x-table.th class="px-6 text-end"></x-table.th>
                </tr>
              </x-table.thead>

              <x-table.tbody></x-table.tbody>
            </x-table>
          </div>
        </div>
      </div>
    </x-modal.body>

    <x-modal.footer>
      <x-button variant="white" color="dark" size="sm" data-hs-overlay="#detail-modal">
        Tutup
      </x-button>
    </x-modal.footer>
  </x-modal>

  <x-modal id="confirm-deletion" x-data="{ id: null }" @set-id.window="id = $event.detail.id">
    <x-modal.header dismiss="#confirm-deletion">Hapus Konfirmasi</x-modal.header>

    <x-modal.body>
      <p class="text-gray-800 dark:text-neutral-400">Apakah anda yakin data ingin dihapus?</p>
    </x-modal.body>

    <x-modal.footer>
      <x-button variant="white" color="dark" size="sm" data-hs-overlay="#confirm-deletion">
        Tutup
      </x-button>
      <form :action="`{{ route('transaksi-jurnal.destroy', '') }}/${id}`" method="post">
        @csrf
        @method('DELETE')
        <x-button type="submit" variant="solid" color="red" size="sm">
          Hapus
        </x-button>
      </form>
    </x-modal.footer>
  </x-modal>
</x-layouts.app>
