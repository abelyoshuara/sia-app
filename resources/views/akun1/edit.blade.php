<x-layouts.admin title="Akun 1">
  <x-admin.card>
    <x-admin.card.header>
      <x-slot:title>Akun 1</x-slot>
      <x-slot:subtitle>Edit Akun 1</x-slot>
    </x-admin.card.header>

    <x-admin.card.content>
      <form action="{{ route('akun1.update', $akun1->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-3">
          <div class="space-y-2">
            <x-admin.forms.input-label for="kode" :value="__('Kode Akun 1')" />
            <x-admin.forms.text-input id="kode" name="kode" :value="old('kode', $akun1->kode)" placeholder="Masukan Kode Akun 1"
              :error="$errors->first('kode')" />
            <x-admin.forms.input-error :message="$errors->first('kode')" />
          </div>

          <div class="space-y-2">
            <x-admin.forms.input-label for="nama" :value="__('Nama Akun 1')" />
            <x-admin.forms.text-input id="nama" name="nama" :value="old('nama', $akun1->nama)" placeholder="Masukan Nama Akun 1"
              :error="$errors->first('nama')" />
            <x-admin.forms.input-error :message="$errors->first('nama')" />
          </div>

          <div class="flex justify-end gap-x-2 pt-4">
            <x-admin.button as="a" href="{{ route('akun1.index') }}" variant="white"
              color="dark">Cancel</x-admin.button>
            <x-admin.button type="submit">Update</x-admin.button>
          </div>
        </div>
      </form>
    </x-admin.card.content>
  </x-admin.card>
</x-layouts.admin>
