<x-layouts.admin title="Akun 3">
  <x-admin.card>
    <x-admin.card.header>
      <x-slot:title>Akun 3</x-slot>
      <x-slot:subtitle>Edit Akun 3</x-slot>
    </x-admin.card.header>

    <x-admin.card.content>
      <form action="{{ route('akun3.update', $akun3->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-4">

          <div class="space-y-2">
            <x-admin.forms.input-label for="kode"
              class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-200" :value="__('Kode Akun 3')" />
            <x-admin.forms.text-input id="kode" name="kode" :value="old('kode', $akun3->kode)" placeholder="Masukan Kode Akun 3"
              :error="$errors->first('kode')" />
            <x-admin.forms.input-error :message="$errors->first('kode')" />
          </div>

          <div class="space-y-2">
            <x-admin.forms.input-label for="nama"
              class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-200" :value="__('Nama Akun 3')" />
            <x-admin.forms.text-input id="nama" name="nama" :value="old('nama', $akun3->nama)" placeholder="Masukan Nama Akun 3"
              :error="$errors->first('nama')" />
            <x-admin.forms.input-error :message="$errors->first('nama')" />
          </div>

          <div class="space-y-2 @error('akun1_id') error @enderror">
            <x-admin.forms.input-label for="akun1_id"
              class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-200" :value="__('Nama Akun 1')" />
            <x-admin.forms.advanced-select id="akun1_id" name="akun1_id">
              <option value="">Choose</option>
              @foreach ($akun1s as $akun1)
                <option value="{{ $akun1->kode }}" @selected(old('akun1_id', $akun3->akun1_id) == $akun1->kode)>{{ $akun1->nama }}</option>
              @endforeach
            </x-admin.forms.advanced-select>
            <x-admin.forms.input-error class="hidden hs-error:block" :message="$errors->first('akun1_id')" />
          </div>

          <div class="space-y-2 @error('akun2_id') error @enderror">
            <x-admin.forms.input-label for="akun2_id"
              class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-200" :value="__('Nama Akun 2')" />
            <x-admin.forms.advanced-select id="akun2_id" name="akun2_id">
              <option value="">Choose</option>
              @foreach ($akun2s as $akun2)
                <option value="{{ $akun2->kode }}" @selected(old('akun2_id', $akun3->akun2_id) == $akun2->kode)>{{ $akun2->nama }}</option>
              @endforeach
            </x-admin.forms.advanced-select>
            <x-admin.forms.input-error class="hidden hs-error:block" :message="$errors->first('akun2_id')" />
          </div>

          <div class="flex justify-end gap-x-2 pt-1">
            <x-admin.button as="a" href="{{ route('akun3.index') }}" variant="white"
              color="dark">Cancel</x-admin.button>
            <x-admin.button type="submit">Update</x-admin.button>
          </div>

        </div>
      </form>
    </x-admin.card.content>
  </x-admin.card>
</x-layouts.admin>