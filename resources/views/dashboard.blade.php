<x-layouts.admin title="Dashboard">
  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
    <x-admin.card>
      <div class="p-4 md:p-5">
        <div class="flex items-center gap-x-2">
          <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
            Pageviews
          </p>
        </div>

        <div class="mt-1 flex items-center gap-x-2">
          <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
            92,913
          </h3>
        </div>
      </div>
    </x-admin.card>

    <x-admin.card>
      <div class="p-4 md:p-5">
        <div class="flex items-center gap-x-2">
          <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
            Pageviews
          </p>
        </div>

        <div class="mt-1 flex items-center gap-x-2">
          <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
            92,913
          </h3>
        </div>
      </div>
    </x-admin.card>

    <x-admin.card>
      <div class="p-4 md:p-5">
        <div class="flex items-center gap-x-2">
          <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
            Pageviews
          </p>
        </div>

        <div class="mt-1 flex items-center gap-x-2">
          <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
            92,913
          </h3>
        </div>
      </div>
    </x-admin.card>

    <x-admin.card>
      <div class="p-4 md:p-5">
        <div class="flex items-center gap-x-2">
          <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
            Pageviews
          </p>
        </div>

        <div class="mt-1 flex items-center gap-x-2">
          <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
            92,913
          </h3>
        </div>
      </div>
    </x-admin.card>
  </div>

  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <x-admin.card class="overflow-hidden">
          <x-admin.card.header>
            <x-slot:title>Users</x-slot>
            <x-slot:subtitle>Add users, edit and more.</x-slot>
            <x-slot:actions>
              <x-admin.button as="a" href="{{ route('akun1.index') }}" size="sm" variant="white"
                color="dark">View
                all</x-admin.button>
              <x-admin.button as="a" href="{{ route('akun1.create') }}" size="sm">Add user</x-admin.button>
            </x-slot>
          </x-admin.card.header>
          <x-admin.table>
            <x-admin.table.thead>
              <tr>
                <x-admin.table.th class="ps-6 text-start">
                  <label for="hs-at-with-checkboxes-main" class="flex">
                    <input type="checkbox"
                      class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                      id="hs-at-with-checkboxes-main">
                    <span class="sr-only">Checkbox</span>
                  </label>
                </x-admin.table.th>

                <x-admin.table.th class="ps-6 lg:ps-3 xl:ps-0 pe-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Name
                    </span>
                  </div>
                </x-admin.table.th>

                <x-admin.table.th class="px-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Position
                    </span>
                  </div>
                </x-admin.table.th>

                <x-admin.table.th class="px-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Status
                    </span>
                  </div>
                </x-admin.table.th>

                <x-admin.table.th class="px-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Portfolio
                    </span>
                  </div>
                </x-admin.table.th>

                <x-admin.table.th class="px-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Created
                    </span>
                  </div>
                </x-admin.table.th>

                <x-admin.table.th class="px-6 text-end"></x-admin.table.th>
              </tr>
            </x-admin.table.thead>

            <x-admin.table.tbody>
              <tr>
                <x-admin.table.td>
                  <div class="ps-6 py-3">
                    <label for="hs-at-with-checkboxes-1" class="flex">
                      <input type="checkbox"
                        class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                        id="hs-at-with-checkboxes-1">
                      <span class="sr-only">Checkbox</span>
                    </label>
                  </div>
                </x-admin.table.td>
                <x-admin.table.td>
                  <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                    <div class="flex items-center gap-x-3">
                      <img class="inline-block size-[38px] rounded-full"
                        src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                        alt="Image Description">
                      <div class="grow">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Christina
                          Bersh</span>
                        <span class="block text-sm text-gray-500 dark:text-neutral-500">christina@site.com</span>
                      </div>
                    </div>
                  </div>
                </x-admin.table.td>
                <x-admin.table.td class="h-px w-72">
                  <div class="px-6 py-3">
                    <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Director</span>
                    <span class="block text-sm text-gray-500 dark:text-neutral-500">Human resources</span>
                  </div>
                </x-admin.table.td>
                <x-admin.table.td>
                  <div class="px-6 py-3">
                    <span
                      class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                      <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path
                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                      </svg>
                      Active
                    </span>
                  </div>
                </x-admin.table.td>
                <x-admin.table.td>
                  <div class="px-6 py-3">
                    <div class="flex items-center gap-x-3">
                      <span class="text-xs text-gray-500 dark:text-neutral-500">1/5</span>
                      <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                          role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                          aria-valuemax="100">
                        </div>
                      </div>
                    </div>
                  </div>
                </x-admin.table.td>
                <x-admin.table.td>
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500 dark:text-neutral-500">28 Dec, 12:12</span>
                  </div>
                </x-admin.table.td>
                <x-admin.table.td>
                  <div class="px-6 py-1.5">
                    <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500"
                      href="#">
                      Edit
                    </a>
                  </div>
                </x-admin.table.td>
              </tr>
            </x-admin.table.tbody>
          </x-admin.table>
          <x-admin.card.footer>
            <x-slot:total>10</x-slot>
            <x-slot:pagination>
              <div class="inline-flex gap-x-2">
                <button type="button"
                  class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6" />
                  </svg>
                  Prev
                </button>

                <button type="button"
                  class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                  Next
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                  </svg>
                </button>
              </div>
            </x-slot>
          </x-admin.card.footer>
        </x-admin.card>
      </div>
    </div>
  </div>
</x-layouts.admin>
