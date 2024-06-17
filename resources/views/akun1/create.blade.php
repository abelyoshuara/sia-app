<x-layouts.app title="Akun 1">
  <div class="space-y-1">
    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
      Akun 1
    </h2>
    <p class="text-sm text-gray-600 dark:text-neutral-400">
      Form tambah akun1.
    </p>
  </div>

  <x-admin.card>
    <x-admin.card.content>
      <form action="{{ route('akun1.store') }}" method="POST">
        @csrf

        <div class="space-y-3">
          <div class="space-y-2">
            <x-admin.forms.input-label for="kode" :value="__('Kode Akun 1')" />
            <x-admin.forms.text-input id="kode" name="kode" :value="old('kode')" placeholder="Masukan Kode Akun 1"
              :error="$errors->first('kode')" />
            <x-admin.forms.input-error :message="$errors->first('kode')" />
          </div>

          <div class="space-y-2">
            <x-admin.forms.input-label for="nama" :value="__('Nama Akun 1')" />
            <x-admin.forms.text-input id="nama" name="nama" :value="old('nama')" placeholder="Masukan Nama Akun 1"
              :error="$errors->first('nama')" />
            <x-admin.forms.input-error :message="$errors->first('nama')" />
          </div>

          <div class="space-x-2 pt-4">
            <x-admin.button type="submit">Simpan</x-admin.button>
            <x-admin.button as="a" href="{{ route('akun1.index') }}" variant="white"
              color="dark">Kembali</x-admin.button>
          </div>
        </div>
      </form>
    </x-admin.card.content>
  </x-admin.card>
</x-layouts.app>
