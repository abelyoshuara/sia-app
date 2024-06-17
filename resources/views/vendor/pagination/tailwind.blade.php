@if ($paginator->hasPages())
  <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
    <div class="flex justify-between flex-1 sm:hidden">
      @if ($paginator->onFirstPage())
        <span
          class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md dark:text-gray-600 dark:bg-gray-800 dark:border-gray-600">
          {!! __('pagination.previous') !!}
        </span>
      @else
        <a href="{{ $paginator->previousPageUrl() }}"
          class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
          {!! __('pagination.previous') !!}
        </a>
      @endif

      @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}"
          class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
          {!! __('pagination.next') !!}
        </a>
      @else
        <span
          class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md dark:text-gray-600 dark:bg-gray-800 dark:border-gray-600">
          {!! __('pagination.next') !!}
        </span>
      @endif
    </div>

    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
      <div>
        <p class="text-sm text-gray-600 dark:text-neutral-400">
          {!! __('Showing') !!}
          @if ($paginator->firstItem())
            <span class="font-semibold text-gray-800 dark:text-neutral-200">{{ $paginator->firstItem() }}</span>
            {!! __('to') !!}
            <span class="font-semibold text-gray-800 dark:text-neutral-200">{{ $paginator->lastItem() }}</span>
          @else
            {{ $paginator->count() }}
          @endif
          {!! __('of') !!}
          <span class="font-semibold text-gray-800 dark:text-neutral-200">{{ $paginator->total() }}</span>
          {!! __('results') !!}
        </p>
      </div>

      <nav class="flex items-center gap-x-1">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
          <button type="button"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
            aria-disabled="true" aria-label="{{ __('pagination.previous') }}" disabled>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd" />
            </svg>
            <span aria-hidden="true" class="sr-only">Previous</span>
          </button>
        @else
          <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
            aria-label="{{ __('pagination.previous') }}">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd" />
            </svg>
            <span aria-hidden="true" class="sr-only">Previous</span>
          </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
          {{-- "Three Dots" Separator --}}
          @if (is_string($element))
            <button type="button"
              class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
              aria-disabled="true" aria-label="more pages" disabled>
              <span>•••</span>
              <span aria-hidden="true" class="sr-only">More pages</span>
            </button>
          @endif

          {{-- Array Of Links --}}
          @if (is_array($element))
            <div class="flex items-center gap-x-1">
              @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                  <button type="button"
                    class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-gray-200/60 text-gray-800 py-2 px-3 text-sm rounded-lg focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700/60 dark:text-white dark:focus:bg-neutral-500"
                    aria-current="page">{{ $page }}</button>
                @else
                  <a href="{{ $url }}"
                    class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-200/30 py-2 px-3 text-sm rounded-lg focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700/30 dark:focus:bg-white/10"
                    aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                    {{ $page }}
                  </a>
                @endif
              @endforeach
            </div>
          @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
          <a href="{{ $paginator->nextPageUrl() }}" rel="next"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
            aria-label="{{ __('pagination.next') }}">
            <span aria-hidden="true" class="sr-only">Next</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd" />
            </svg>
          </a>
        @else
          <button type="button"
            class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
            aria-disabled="true" aria-label="{{ __('pagination.next') }}" disabled>
            <span aria-hidden="true" class="sr-only">Next</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd" />
            </svg>
          </button>
        @endif
      </nav>
    </div>
  </nav>
@endif
