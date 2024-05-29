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
              <x-admin.forms.input-label for="email"
                class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-200" :value="__('Email address')" />
              <x-admin.forms.text-input class="dark:bg-neutral-900" id="email" name="email" :value="old('email')"
                placeholder="Enter email address" :error="$errors->first('email')" />
              <x-admin.forms.input-error :message="$errors->first('email')" />
            </div>
            <!-- End Form Group -->

            <!-- Form Group -->
            <div class="space-y-2">
              <x-admin.forms.input-label for="password"
                class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-200" :value="__('Password')" />
              <x-admin.forms.text-input type="password" class="dark:bg-neutral-900" id="password" name="password"
                :value="old('password')" placeholder="Enter password" :error="$errors->first('password')" />
              <x-admin.forms.input-error :message="$errors->first('password')" />
            </div>
            <!-- End Form Group -->

            <!-- Checkbox -->
            <div class="flex items-center">
              <div class="flex">
                <input id="remember-me" name="remember-me" type="checkbox"
                  class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
              </div>
              <div class="ms-3">
                <label for="remember-me" class="text-sm dark:text-white">Remember me</label>
              </div>
            </div>
            <!-- End Checkbox -->

            <x-admin.button type="submit" class="justify-center">Login</x-admin.button>
          </div>
        </form>
        <!-- End Form -->

      </div>
    </div>
  </div>
</x-layouts.guest>
