<x-layouts.app title="Akun 3">
  <x-admin.card>
    <x-admin.card.header>
      <x-slot:title>Akun 3</x-slot>
      <x-slot:subtitle>Buat Akun 3</x-slot>
    </x-admin.card.header>

    <x-admin.card.content>
      <form action="{{ route('akun3.store') }}" method="POST">
        @csrf
        <div class="space-y-4">

          <div class="space-y-2">
            <x-admin.forms.input-label for="kode" :value="__('Kode Akun 3')" />
            <x-admin.forms.text-input id="kode" name="kode" :value="old('kode')" placeholder="Masukan Kode Akun 3"
              :error="$errors->first('kode')" />
            <x-admin.forms.input-error :message="$errors->first('kode')" />
          </div>

          <div class="space-y-2">
            <x-admin.forms.input-label for="nama" :value="__('Nama Akun 3')" />
            <x-admin.forms.text-input id="nama" name="nama" :value="old('nama')" placeholder="Masukan Nama Akun 3"
              :error="$errors->first('nama')" />
            <x-admin.forms.input-error :message="$errors->first('nama')" />
          </div>

          <div class="space-y-2 @error('akun1_kode') error @enderror">
            <x-admin.forms.input-label for="akun1_kode" :value="__('Nama Akun 1')" />
            <x-admin.advanced-forms.advanced-select id="akun1_kode" name="akun1_kode">
              <option value="">Choose</option>
              @foreach ($akun1s as $akun1)
                <option value="{{ $akun1->kode }}" @selected(old('akun1_kode') == $akun1->kode)>{{ $akun1->nama }}</option>
              @endforeach
            </x-admin.advanced-forms.advanced-select>
            <x-admin.forms.input-error class="hidden hs-error:block" :message="$errors->first('akun1_kode')" />
          </div>

          <div class="space-y-2 @error('akun2_kode') error @enderror">
            <x-admin.forms.input-label for="akun2_kode" :value="__('Nama Akun 2')" />
            <x-admin.advanced-forms.advanced-select id="akun2_kode" name="akun2_kode">
              <option value="">Choose</option>
              @foreach ($akun2s as $akun2)
                <option value="{{ $akun2->kode }}" @selected(old('akun2_kode') == $akun2->kode)>{{ $akun2->nama }}</option>
              @endforeach
            </x-admin.advanced-forms.advanced-select>
            <x-admin.forms.input-error class="hidden hs-error:block" :message="$errors->first('akun2_kode')" />
          </div>

          <div class="space-x-2 pt-1">
            <x-admin.button type="submit">Simpan</x-admin.button>
            <x-admin.button as="a" href="{{ route('akun3.index') }}" variant="white"
              color="dark">Kembali</x-admin.button>
          </div>

        </div>
      </form>
    </x-admin.card.content>
  </x-admin.card>
</x-layouts.app>
