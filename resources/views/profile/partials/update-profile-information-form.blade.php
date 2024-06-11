<x-admin.card>
  <x-admin.card.header>
    <x-slot:title>Profile Information</x-slot>
    <x-slot:subtitle>Update your account's profile information and email address.</x-slot>
  </x-admin.card.header>

  <x-admin.card.content>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
      @csrf
    </form>

    <form action="{{ route('profile.update') }}" method="POST">
      @csrf
      @method('patch')

      <div class="space-y-3">
        <div class="space-y-2">
          <x-admin.forms.input-label for="name" :value="__('Name')" />
          <x-admin.forms.text-input id="name" name="name" :value="old('name', $user->name)" autofocus autocomplete="name"
            :error="$errors->first('name')" />
          <x-admin.forms.input-error :message="$errors->first('name')" />
        </div>

        <div class="space-y-2">
          <x-admin.forms.input-label for="email" :value="__('Email')" />
          <x-admin.forms.text-input id="email" name="email" :value="old('email', $user->email)" autocomplete="email"
            :error="$errors->first('email')" />
          <x-admin.forms.input-error :message="$errors->first('email')" />

          @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
            <div>
              <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                {{ __('Your email address is unverified.') }}

                <button form="send-verification"
                  class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                  {{ __('Click here to re-send the verification email.') }}
                </button>
              </p>

              @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                  {{ __('A new verification link has been sent to your email address.') }}
                </p>
              @endif
            </div>
          @endif
        </div>

        <div class="flex items-center gap-x-4 pt-4">
          <x-admin.button type="submit">Update</x-admin.button>

          @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)"
              class="text-sm text-green-600 dark:text-green-400">{{ __('The profile has been successfully updated.') }}
            </p>
          @endif
        </div>

      </div>
    </form>
  </x-admin.card.content>
</x-admin.card>
