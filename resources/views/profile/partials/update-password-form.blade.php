<x-admin.card>
  <x-admin.card.header>
    <x-slot:title>Update Password</x-slot>
    <x-slot:subtitle>Ensure your account is using a long, random password to stay secure.</x-slot>
  </x-admin.card.header>

  <x-admin.card.content>
    <form action="{{ route('password.update') }}" method="POST">
      @csrf
      @method('put')

      <div class="space-y-3">
        <div class="space-y-2">
          <x-admin.forms.input-label for="update_password_current_password" :value="__('Current Password')" />
          <x-admin.forms.text-input type="password" id="update_password_current_password" name="current_password"
            autocomplete="current-password" :error="$errors->updatePassword->first('current_password')" />
          <x-admin.forms.input-error :message="$errors->updatePassword->first('current_password')" />
        </div>

        <div class="space-y-2">
          <x-admin.forms.input-label for="update_password_password" :value="__('New Password')" />
          <x-admin.forms.text-input type="password" id="update_password_password" name="password"
            autocomplete="new-password" :error="$errors->updatePassword->first('password')" />
          <x-admin.forms.input-error :message="$errors->updatePassword->first('password')" />
        </div>

        <div class="space-y-2">
          <x-admin.forms.input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
          <x-admin.forms.text-input type="password" id="update_password_password_confirmation"
            name="password_confirmation" autocomplete="new-password" :error="$errors->updatePassword->first('password_confirmation')" />
          <x-admin.forms.input-error :message="$errors->updatePassword->first('password_confirmation')" />
        </div>

        <div class="flex items-center gap-x-4 pt-4">
          <x-admin.button type="submit">Update</x-admin.button>

          @if (session('status') === 'password-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)"
              class="text-sm text-green-600 dark:text-green-400">{{ __('The password has been successfully updated.') }}
            </p>
          @endif
        </div>

      </div>
    </form>
  </x-admin.card.content>
</x-admin.card>
