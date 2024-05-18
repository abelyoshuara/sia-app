<x-layouts.admin title="Akun 2">
  <x-admin.card>
    <x-admin.card.header>
      <x-slot:title>Akun 2</x-slot>
      <x-slot:subtitle>Edit Akun 2</x-slot>
    </x-admin.card.header>

    <x-admin.card.content>
      <form action="{{ route('akun2.update', $akun2->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-4">

          <div class="space-y-2">
            <x-admin.forms.input-label for="kode"
              class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-200" :value="__('Kode Akun 2')" />
            <x-admin.forms.text-input id="kode" name="kode" :value="old('kode', $akun2->kode)" placeholder="Masukan Kode Akun 2"
              :error="$errors->first('kode')" />
            <x-admin.forms.input-error :message="$errors->first('kode')" />
          </div>

          <div class="space-y-2">
            <x-admin.forms.input-label for="nama"
              class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-200" :value="__('Nama Akun 2')" />
            <x-admin.forms.text-input id="nama" name="nama" :value="old('nama', $akun2->nama)" placeholder="Masukan Nama Akun 2"
              :error="$errors->first('nama')" />
            <x-admin.forms.input-error :message="$errors->first('nama')" />
          </div>

          <div class="space-y-2 @error('akun1_kode') error @enderror">
            <x-admin.forms.input-label for="akun1_kode"
              class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-200" :value="__('Nama Akun 1')" />
            <x-admin.forms.advanced-select id="akun1_kode" name="akun1_kode">
              <option value="">Choose</option>
              @foreach ($akun1s as $akun1)
                <option value="{{ $akun1->id }}" @selected(old('akun1_kode', $akun2->akun1_kode) == $akun1->id)>{{ $akun1->nama }}</option>
              @endforeach
            </x-admin.forms.advanced-select>
            <x-admin.forms.input-error class="hidden hs-error:block" :message="$errors->first('akun1_kode')" />
          </div>

          <div class="flex justify-end gap-x-2 pt-1">
            <x-admin.button as="a" href="{{ route('akun2.index') }}" variant="white"
              color="dark">Cancel</x-admin.button>
            <x-admin.button type="submit">Update</x-admin.button>
          </div>

        </div>
      </form>
    </x-admin.card.content>
  </x-admin.card>
</x-layouts.admin>
