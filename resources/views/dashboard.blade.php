<x-layouts.app title="Beranda">
  <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
    Beranda
  </h2>

  <!-- Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">

    <!-- Card -->
    <x-card-stats label="Pengguna" value="29">
      <x-slot:icon>
        <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-neutral-300" xmlns="http://www.w3.org/2000/svg"
          width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users">
          <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
          <circle cx="9" cy="7" r="4" />
          <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
          <path d="M16 3.13a4 4 0 0 1 0 7.75" />
        </svg>
      </x-slot>
      </x-admin.card-stats>
      <!-- End Card -->

      <!-- Card -->
      <x-card-stats label="Akun" value="29">
        <x-slot:icon>
          <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <circle cx="18" cy="15" r="3" />
            <circle cx="9" cy="7" r="4" />
            <path d="M10 15H6a4 4 0 0 0-4 4v2" />
            <path d="m21.7 16.4-.9-.3" />
            <path d="m15.2 13.9-.9-.3" />
            <path d="m16.6 18.7.3-.9" />
            <path d="m19.1 12.2.3-.9" />
            <path d="m19.6 18.7-.4-1" />
            <path d="m16.8 12.3-.4-1" />
            <path d="m14.3 16.6 1-.4" />
            <path d="m20.7 13.8 1-.4" />
          </svg>
        </x-slot>
        </x-admin.card-stats>
        <!-- End Card -->

        <!-- Card -->
        <x-card-stats label="Transaksi Jurnal" value="29">
          <x-slot:icon>
            <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card-pay">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M12 19h-6a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" />
              <path d="M3 10h18" />
              <path d="M16 19h6" />
              <path d="M19 16l3 3l-3 3" />
              <path d="M7.005 15h.005" />
              <path d="M11 15h2" />
            </svg>
          </x-slot>
          </x-admin.card-stats>
          <!-- End Card -->

          <!-- Card -->
          <x-card-stats label="Transaksi Penyesuaian" value="29">
            <x-slot:icon>
              <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card-pay">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 19h-6a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" />
                <path d="M3 10h18" />
                <path d="M16 19h6" />
                <path d="M19 16l3 3l-3 3" />
                <path d="M7.005 15h.005" />
                <path d="M11 15h2" />
              </svg>
            </x-slot>
            </x-admin.card-stats>
            <!-- End Card -->

  </div>
  <!-- End Grid -->
</x-layouts.app>
