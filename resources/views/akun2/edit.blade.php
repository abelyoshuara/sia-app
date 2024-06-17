<x-layouts.app title="Akun 2">
  <div class="space-y-1">
    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
      Akun 2
    </h2>
    <p class="text-sm text-gray-600 dark:text-neutral-400">
      Form ubah akun2.
    </p>
  </div>

  <x-card>
    <x-card.content>
      <form action="{{ route('akun2.update', $akun2->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-4">

          <div class="space-y-2">
            <x-forms.input-label for="kode" :value="__('Kode Akun 2')" />
            <x-forms.text-input id="kode" name="kode" :value="old('kode', $akun2->kode)" placeholder="Masukan Kode Akun 2"
              :error="$errors->first('kode')" />
            <x-forms.input-error :message="$errors->first('kode')" />
          </div>

          <div class="space-y-2">
            <x-forms.input-label for="nama" :value="__('Nama Akun 2')" />
            <x-forms.text-input id="nama" name="nama" :value="old('nama', $akun2->nama)" placeholder="Masukan Nama Akun 2"
              :error="$errors->first('nama')" />
            <x-forms.input-error :message="$errors->first('nama')" />
          </div>

          <div class="space-y-2 @error('akun1_kode') error @enderror">
            <x-forms.input-label for="akun1_kode" :value="__('Nama Akun 1')" />
            <x-advanced-forms.advanced-select id="akun1_kode" name="akun1_kode">
              <option value="">Choose</option>
              @foreach ($akun1s as $akun1)
                <option value="{{ $akun1->kode }}" @selected(old('akun1_kode', $akun2->akun1_kode) == $akun1->kode)>{{ $akun1->nama }}</option>
              @endforeach
            </x-advanced-forms.advanced-select>
            <x-forms.input-error class="hidden hs-error:block" :message="$errors->first('akun1_kode')" />
          </div>

          <div class="space-x-2 pt-1">
            <x-button type="submit">Simpan</x-button>
            <x-button as="a" href="{{ route('akun2.index') }}" variant="white" color="dark">Kembali</x-button>
          </div>

        </div>
      </form>
    </x-card.content>
  </x-card>
</x-layouts.app>
