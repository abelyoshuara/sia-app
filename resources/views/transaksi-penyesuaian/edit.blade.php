<x-layouts.admin title="Transaksi Penyesuaian">
  <x-slot:scripts>
    <script>
      const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      const formModal = document.querySelector('#modal-nilai form');
      const formTransaksi = document.querySelector('.form-transaksi');
      const buttonSubmit = formTransaksi.querySelector('button[type="submit"]');
      const table = document.querySelector('#tabel-nilai');
      const card = document.querySelector('#card');
      let nilai = [];

      const showResponseMessage = (message) => {
        alert(message);
      }

      const renderAllNilai = () => {
        const tbody = document.querySelector('#tabel-nilai tbody');
        let html = '';

        if (nilai.length) {
          nilai.forEach((n, i) => {
            html += `
              <tr>
                <x-admin.table.td>
                  <div class="px-6 py-3">
                    <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">${i+1}</span>
                  </div>
                </x-admin.table.td>

                <x-admin.table.td class="h-px w-72">
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500 dark:text-neutral-500">${n.akun3.nama}</span>
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

                <x-admin.table.td>
                  <x-admin.button variant="link" size="sm" class="nilai-delete" data-id="${i}">
                    Delete
                  </x-admin.button>
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

        tbody.innerHTML = html;
      }

      const fetchAllNilaiByTransaksiPenyesuaianId = async (id) => {
        try {
          const response = await fetch(`/transaksi-penyesuaian/${id}`, {
            method: 'GET',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': csrfToken,
            },
          });

          const responseJson = await response.json();
          nilai = responseJson.data.nilai_penyesuaian;
        } catch (error) {
          showResponseMessage(error);
        } finally {
          renderAllNilai();
        }
      }

      const addNilai = (values) => {
        // nilai = [...nilai, values];
        nilai.push(values);
      };

      const deleteNilai = (index) => {
        nilai.splice(index, 1);
      };

      const updateNilai = async (data) => {
        try {
          buttonSubmit.disabled = true;
          const response = await fetch(`/transaksi-penyesuaian/${card.dataset.id}`, {
            method: 'PUT',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify(data),
          });

          const responseJson = await response.json();
          showResponseMessage(responseJson.message);
        } catch (error) {
          showResponseMessage(error);
        } finally {
          buttonSubmit.disabled = false;
          fetchAllNilaiByTransaksiPenyesuaianId(card.dataset.id);
        }
      }

      const countJumlah = () => {
        if (formTransaksi.nilai.value && formTransaksi.waktu.value) {
          formTransaksi.jumlah.value = Number(formTransaksi.nilai.value) / Number(formTransaksi.waktu.value);
        }
      }

      renderAllNilai();
      fetchAllNilaiByTransaksiPenyesuaianId(card.dataset.id);

      formModal.addEventListener('submit', (e) => {
        e.preventDefault();
        const selKode = formModal.kode_akun;
        const selStatus = formModal.status;

        addNilai({
          akun3_kode: formModal.kode_akun.value,
          debit: formModal.debit.value,
          kredit: formModal.kredit.value,
          status_id: formModal.status.value,
          akun3: {
            nama: selKode.options[selKode.selectedIndex].text
          },
          status: {
            nama: selStatus.options[selStatus.selectedIndex].text
          }
        });

        formModal.reset();
        renderAllNilai();
      });

      table.addEventListener('click', (e) => {
        if (e.target.classList.contains('nilai-delete')) {
          const index = e.target.dataset.id;
          deleteNilai(index);
          renderAllNilai();
        }
      });

      formTransaksi.addEventListener('submit', (e) => {
        e.preventDefault();

        const formData = {
          tanggal: formTransaksi.tanggal.value,
          deskripsi: formTransaksi.deskripsi.value,
          nilai: formTransaksi.nilai.value,
          waktu: formTransaksi.waktu.value,
          jumlah: formTransaksi.jumlah.value,
          nilai_penyesuaian: nilai,
        };

        updateNilai(formData);
      });
    </script>
  </x-slot>

  <x-admin.card id="card" data-id="{{ $transaksiPenyesuaian->id }}">
    <x-admin.card.header>
      <x-slot:title>Transaksi Penyesuaian</x-slot>
      <x-slot:subtitle>Ubah Transaksi Penyesuaian</x-slot>
    </x-admin.card.header>

    <x-admin.card.content class="lg:w-full">
      <form action="{{ route('transaksi-penyesuaian.update', $transaksiPenyesuaian->id) }}" method="POST"
        class="flex flex-wrap -mx-4 gap-y-5 form-transaksi">
        @csrf

        <div class="w-full lg:w-1/4 px-4 space-y-4">
          <div class="space-y-2">
            <x-admin.forms.input-label for="tanggal" :value="__('Tanggal')" />
            <x-admin.forms.text-input type="date" id="tanggal" name="tanggal" :value="old('tanggal', $transaksiPenyesuaian->tanggal)"
              placeholder="Masukan Tanggal" :error="$errors->first('tanggal')" required />
            <x-admin.forms.input-error :message="$errors->first('tanggal')" />
          </div>

          <div class="space-y-2">
            <x-admin.forms.input-label for="deskripsi" :value="__('Deskripsi')" />
            <x-admin.forms.textarea id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi" :error="$errors->first('deskripsi')"
              required>{{ old('deskripsi', $transaksiPenyesuaian->deskripsi) }}</x-admin.forms.textarea>
            <x-admin.forms.input-error :message="$errors->first('deskripsi')" />
          </div>

          <div class="space-y-2">
            <x-admin.forms.input-label for="nilai" :value="__('Nilai yang disesuaikan')" />
            <x-admin.forms.text-input type="number" id="nilai" name="nilai" :value="old('nilai', $transaksiPenyesuaian->nilai)"
              onkeyup="countJumlah()" placeholder="Masukan Nilai" :error="$errors->first('nilai')" required />
            <x-admin.forms.input-error :message="$errors->first('nilai')" />
          </div>

          <div class="space-y-2">
            <x-admin.forms.input-label for="waktu" :value="__('Waktu yang disesuaikan')" />
            <x-admin.forms.text-input type="number" id="waktu" name="waktu" :value="old('waktu', $transaksiPenyesuaian->waktu)"
              onkeyup="countJumlah()" placeholder="Masukan Waktu" :error="$errors->first('waktu')" required />
            <x-admin.forms.input-error :message="$errors->first('waktu')" />
          </div>

          <div class="space-y-2">
            <x-admin.forms.input-label for="jumlah" :value="__('Jumlah')" />
            <x-admin.forms.text-input id="jumlah" name="jumlah" :value="old('jumlah', $transaksiPenyesuaian->jumlah)" :error="$errors->first('jumlah')"
              placeholder="Hasil penjumlahan" readonly />
            <x-admin.forms.input-error :message="$errors->first('jumlah')" />
          </div>
        </div>

        <div class="w-full lg:w-3/4 px-4">
          <x-admin.button variant="white" color="dark" size="sm" class="mb-4" data-hs-overlay="#modal-nilai">
            Tambah
          </x-admin.button>
          <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
              <div class="border rounded-lg overflow-hidden dark:border-neutral-700">

                <x-admin.table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700" id="tabel-nilai">
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

        <div class="px-4 flex justify-end gap-x-2">
          <x-admin.button type="submit">Ubah</x-admin.button>
          <x-admin.button as="a" href="{{ route('transaksi-penyesuaian.index') }}" variant="white"
            color="dark">Kembali</x-admin.button>
        </div>

      </form>
    </x-admin.card.content>
  </x-admin.card>

  <div id="modal-nilai"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div
      class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
      <div
        class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
          <h3 class="font-bold text-gray-800 dark:text-white">
            Form Tambah Nilai
          </h3>
          <button type="button"
            class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
            data-hs-overlay="#modal-nilai">
            <span class="sr-only">Close</span>
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
        <form action="" method="POST">
          <div class="p-4 overflow-y-auto space-y-4">

            <div class="space-y-2">
              <x-admin.forms.input-label for="kode_akun" :value="__('Kode Akun')" />
              <x-admin.forms.select id="kode_akun" name="kode_akun" required>
                @foreach ($akun3 as $item)
                  <option value="{{ $item->kode }}">{{ $item->nama }}</option>
                @endforeach
              </x-admin.forms.select>
              <x-admin.forms.input-error class="hidden hs-error:block" :message="$errors->first('kode_akun')" />
            </div>

            <div class="space-y-2">
              <x-admin.forms.input-label for="debit" :value="__('Debit')" />
              <x-admin.forms.text-input type="number" id="debit" name="debit" :value="old('debit')"
                placeholder="Masukan Debit" :error="$errors->first('debit')" />
              <x-admin.forms.input-error :message="$errors->first('debit')" />
            </div>

            <div class="space-y-2">
              <x-admin.forms.input-label for="kredit" :value="__('Kredit')" />
              <x-admin.forms.text-input type="number" id="kredit" name="kredit" :value="old('kredit')"
                placeholder="Masukan Kredit" :error="$errors->first('kredit')" />
              <x-admin.forms.input-error :message="$errors->first('kredit')" />
            </div>

            <div class="space-y-2">
              <x-admin.forms.input-label for="status" :value="__('Status')" />
              <x-admin.forms.select id="status" name="status">
                @foreach ($status as $item)
                  <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
              </x-admin.forms.select>
              <x-admin.forms.input-error class="hidden hs-error:block" :message="$errors->first('status')" />
            </div>

          </div>
          <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
            <x-admin.button type="button" variant="white" color="dark"
              data-hs-overlay="#modal-nilai">Batal</x-admin.button>
            <x-admin.button type="submit" data-hs-overlay="#modal-nilai">Tambah</x-admin.button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-layouts.admin>
