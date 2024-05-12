<x-layouts.admin title="Akun 1">
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div
          class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
          <!-- Header -->
          <div
            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
            <div>
              <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                Kode Akun
              </h2>
              <p class="text-sm text-gray-600 dark:text-neutral-400">
                Buat Akun 1
              </p>
            </div>
          </div>
          <!-- End Header -->

          <!-- Form -->
          <div class="px-6 py-4 w-full lg:w-1/2">
            <form action="{{ route('akun1.store') }}" method="POST">
              @csrf

              <div class="space-y-4">
                <div class="space-y-2">
                  <x-admin.forms.input-label for="kode"
                    class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-200" :value="__('Kode')" />
                  <x-admin.forms.text-input id="kode" name="kode" :value="old('kode')" placeholder="Masukan Kode"
                    :error="$errors->first('kode')" />
                  <x-admin.forms.input-error :message="$errors->first('kode')" />
                </div>

                <div class="space-y-2">
                  <x-admin.forms.input-label for="nama"
                    class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-200" :value="__('Nama')" />
                  <x-admin.forms.text-input id="nama" name="nama" :value="old('nama')" placeholder="Masukan Nama"
                    :error="$errors->first('nama')" />
                  <x-admin.forms.input-error :message="$errors->first('nama')" />
                </div>

                <div class="flex justify-end gap-x-2">
                  <a href="{{ route('akun1.index') }}"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    Cancel
                  </a>
                  <button type="submit"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Save
                  </button>
                </div>
              </div>
            </form>
          </div>
          <!-- End Form -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Card -->
</x-layouts.admin>
