<x-layouts.app title="Pengguna">
  <div class="space-y-1">
    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
      Pengguna
    </h2>
    <p class="text-sm text-gray-600 dark:text-neutral-400">
      Form ubah pengguna.
    </p>
  </div>

  <x-card>
    <x-card.content>
      <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-3">
          <div class="space-y-2">
            <x-forms.input-label for="name" :value="__('Nama')" />
            <x-forms.text-input id="name" name="name" :value="old('name', $user->name)" placeholder="Masukan Nama"
              :error="$errors->first('name')" />
            <x-forms.input-error :message="$errors->first('name')" />
          </div>

          <div class="space-y-2">
            <x-forms.input-label for="email" :value="__('Email')" />
            <x-forms.text-input id="email" name="email" :value="old('email', $user->email)" placeholder="Masukan Email"
              :error="$errors->first('email')" />
            <x-forms.input-error :message="$errors->first('email')" />
          </div>

          <div class="flex gap-x-3">
            <div class="flex">
              <x-forms.radio-input name="role" id="role_regular" value="regular" :checked="old('role', $user->role) == 'regular'" />
              <x-forms.input-label for="role_regular" class="text-gray-500 ms-2 dark:text-neutral-400"
                :value="__('Regular')" />
            </div>

            <div class="flex">
              <x-forms.radio-input name="role" id="role_admin" value="admin" :checked="old('role', $user->role) == 'admin'" />
              <x-forms.input-label for="role_admin" class="text-gray-500 ms-2 dark:text-neutral-400"
                :value="__('Admin')" />
            </div>
          </div>

          <div class="flex gap-x-2 pt-4">
            <x-button type="submit">Simpan</x-button>
            <x-button as="a" href="{{ route('users.index') }}" variant="white" color="dark">Kembali</x-button>
          </div>

        </div>
      </form>
    </x-card.content>
  </x-card>
</x-layouts.app>
