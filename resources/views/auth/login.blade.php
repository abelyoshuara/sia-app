<x-layouts.guest title="Login">
  <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
    <div class="p-4 sm:p-7">

      <div class="text-center">
        <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Login</h1>
        <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
          Please login here to access all features
        </p>
      </div>

      <div class="mt-5">

        <!-- Form -->
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="grid gap-y-4">

            <!-- Form Group -->
            <div class="space-y-2">
              <x-forms.input-label for="email" :value="__('Email address')" />
              <x-forms.text-input class="dark:bg-neutral-900" id="email" name="email" :value="old('email')"
                placeholder="Enter email address" :error="$errors->first('email')" autofocus autocomplete="email" />
              <x-forms.input-error :message="$errors->first('email')" />
            </div>
            <!-- End Form Group -->

            <!-- Form Group -->
            <div class="space-y-2">
              <x-forms.input-label for="password" :value="__('Password')" />
              <x-forms.text-input type="password" class="dark:bg-neutral-900" id="password" name="password"
                :value="old('password')" placeholder="Enter password" :error="$errors->first('password')" autocomplete="current-password" />
              <x-forms.input-error :message="$errors->first('password')" />
            </div>
            <!-- End Form Group -->

            <!-- Checkbox -->
            <div class="flex items-center">
              <div class="flex">
                <x-forms.checkbox-input class="dark:bg-neutral-900" id="remember_me" name="remember" />
              </div>
              <div class="ms-3">
                <x-forms.input-label for="remember_me" :value="__('Remember me')" />
              </div>
            </div>
            <!-- End Checkbox -->

            <x-button type="submit" class="justify-center">Login</x-button>
          </div>
        </form>
        <!-- End Form -->

      </div>
    </div>
  </div>
</x-layouts.guest>
