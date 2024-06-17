<x-layouts.app title="Akun 3">
  <div class="space-y-1">
    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
      Akun 3
    </h2>
    <p class="text-sm text-gray-600 dark:text-neutral-400">
      Form ubah akun3.
    </p>
  </div>

  <x-card>
    <x-card.content>
      <form action="{{ route('akun3.update', $akun3->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-4">

          <div class="space-y-2">
            <x-forms.input-label for="kode" :value="__('Kode Akun 3')" />
            <x-forms.text-input id="kode" name="kode" :value="old('kode', $akun3->kode)" placeholder="Masukan Kode Akun 3"
              :error="$errors->first('kode')" />
            <x-forms.input-error :message="$errors->first('kode')" />
          </div>

          <div class="space-y-2">
            <x-forms.input-label for="nama" :value="__('Nama Akun 3')" />
            <x-forms.text-input id="nama" name="nama" :value="old('nama', $akun3->nama)" placeholder="Masukan Nama Akun 3"
              :error="$errors->first('nama')" />
            <x-forms.input-error :message="$errors->first('nama')" />
          </div>

          <div class="space-y-2 @error('akun1_kode') error @enderror">
            <x-forms.input-label for="akun1_kode" :value="__('Nama Akun 1')" />
            <x-advanced-forms.advanced-select id="akun1_kode" name="akun1_kode">
              <option value="">Choose</option>
              @foreach ($akun1s as $akun1)
                <option value="{{ $akun1->kode }}" @selected(old('akun1_kode', $akun3->akun1_kode) == $akun1->kode)>{{ $akun1->nama }}</option>
              @endforeach
              </x-admin.advanced-forms.advanced-select>
              <x-forms.input-error class="hidden hs-error:block" :message="$errors->first('akun1_kode')" />
          </div>

          <div class="space-y-2 @error('akun2_kode') error @enderror">
            <x-forms.input-label for="akun2_kode" :value="__('Nama Akun 2')" />
            <x-advanced-forms.advanced-select id="akun2_kode" name="akun2_kode">
              <option value="">Choose</option>
              @foreach ($akun2s as $akun2)
                <option value="{{ $akun2->kode }}" @selected(old('akun2_kode', $akun3->akun2_kode) == $akun2->kode)>{{ $akun2->nama }}</option>
              @endforeach
              </x-admin.advanced-forms.advanced-select>
              <x-forms.input-error class="hidden hs-error:block" :message="$errors->first('akun2_kode')" />
          </div>

          <div class="space-x-2 pt-1">
            <x-button type="submit">Simpan</x-admin.button>
              <x-button as="a" href="{{ route('akun3.index') }}" variant="white"
                color="dark">Kembali</x-admin.button>
          </div>

        </div>
      </form>
      </x-admin.card.content>
      </x-admin.card>
</x-layouts.app>
