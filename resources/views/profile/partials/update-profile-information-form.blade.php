<div class="space-y-1">
  <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
    Informasi Profil
  </h2>
  <p class="text-sm text-gray-600 dark:text-neutral-400">
    Perbarui informasi profil dan alamat email akun Anda.
  </p>
</div>

<x-card>
  <x-card.content>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
      @csrf
    </form>

    <form action="{{ route('profile.update') }}" method="POST">
      @csrf
      @method('patch')

      <div class="space-y-3">
        <div class="space-y-2">
          <x-forms.input-label for="name" :value="__('Nama')" />
          <x-forms.text-input id="name" name="name" :value="old('name', $user->name)" autofocus autocomplete="name"
            :error="$errors->first('name')" />
          <x-forms.input-error :message="$errors->first('name')" />
        </div>

        <div class="space-y-2">
          <x-forms.input-label for="email" :value="__('Email')" />
          <x-forms.text-input id="email" name="email" :value="old('email', $user->email)" autocomplete="email" :error="$errors->first('email')" />
          <x-forms.input-error :message="$errors->first('email')" />

          @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
            <div>
              <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                {{ __('Alamat email Anda belum diverifikasi.') }}

                <button form="send-verification"
                  class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                  {{ __('Klik di sini untuk mengirim ulang email verifikasi.') }}
                </button>
              </p>

              @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                  {{ __('Tautan verifikasi baru telah dikirimkan ke alamat email Anda.') }}
                </p>
              @endif
            </div>
          @endif
        </div>

        <div class="flex items-center gap-x-4 pt-4">
          <x-button type="submit">Simpan</x-button>

          @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)"
              class="text-sm text-green-600 dark:text-green-400">{{ __('Informasi profil berhasil diperbarui.') }}
            </p>
          @endif
        </div>

      </div>
    </form>
  </x-card.content>
</x-card>
