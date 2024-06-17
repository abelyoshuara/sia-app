<x-layouts.app title="Pengguna">
  <div class="space-y-1">
    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
      Pengguna
    </h2>
    <p class="text-sm text-gray-600 dark:text-neutral-400">
      Form ubah pengguna.
    </p>
  </div>

  <x-admin.card>
    <x-admin.card.content>
      <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-3">
          <div class="space-y-2">
            <x-admin.forms.input-label for="name" :value="__('Nama')" />
            <x-admin.forms.text-input id="name" name="name" :value="old('name', $user->name)" placeholder="Masukan Nama"
              :error="$errors->first('name')" />
            <x-admin.forms.input-error :message="$errors->first('name')" />
          </div>

          <div class="space-y-2">
            <x-admin.forms.input-label for="email" :value="__('Email')" />
            <x-admin.forms.text-input id="email" name="email" :value="old('email', $user->email)" placeholder="Masukan Email"
              :error="$errors->first('email')" />
            <x-admin.forms.input-error :message="$errors->first('email')" />
          </div>

          <div class="flex gap-x-3">
            <div class="flex">
              <x-admin.forms.radio-input name="role" id="role_regular" value="regular" :checked="old('role', $user->role) == 'regular'" />
              <x-admin.forms.input-label for="role_regular" class="text-gray-500 ms-2 dark:text-neutral-400"
                :value="__('Regular')" />
            </div>

            <div class="flex">
              <x-admin.forms.radio-input name="role" id="role_admin" value="admin" :checked="old('role', $user->role) == 'admin'" />
              <x-admin.forms.input-label for="role_admin" class="text-gray-500 ms-2 dark:text-neutral-400"
                :value="__('Admin')" />
            </div>
          </div>

          <div class="flex gap-x-2 pt-4">
            <x-admin.button type="submit">Simpan</x-admin.button>
            <x-admin.button as="a" href="{{ route('users.index') }}" variant="white"
              color="dark">Kembali</x-admin.button>
          </div>

        </div>
      </form>
    </x-admin.card.content>
  </x-admin.card>
</x-layouts.app>
