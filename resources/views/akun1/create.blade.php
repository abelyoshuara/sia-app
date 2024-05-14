<x-layouts.admin title="Akun 1">
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle space-y-5">

        <!-- Card -->
        <x-admin.card>
          <x-admin.card.header>
            <x-slot:title>Akun 1</x-slot>
            <x-slot:subtitle>Buat Akun 1</x-slot>
          </x-admin.card.header>

          <x-admin.card.content>
            <form action="{{ route('akun1.store') }}" method="POST">
              @csrf

              <div class="space-y-3">
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

                <div class="flex justify-end gap-x-2 pt-4">
                  <x-admin.button as="a" href="{{ route('akun1.index') }}" variant="white"
                    color="gray">Cancel</x-admin.button>
                  <x-admin.button type="submit">Save</x-admin.button>
                </div>
              </div>
            </form>
          </x-admin.card.content>
        </x-admin.card>
        <!-- End Card -->

      </div>
    </div>
  </div>
</x-layouts.admin>
