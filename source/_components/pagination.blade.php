@props(['pagination'])

@if ($pagination->pages->count())
  <nav {{ $attributes->merge(['class' => 'border-t border-gray-700 px-4 flex items-center justify-between sm:px-0']) }}>
    <div class="w-0 flex-1 flex">
      @if ($previous = $pagination->previous)
        <a href="{{ $previous }}" class="-mt-px border-t-2 border-transparent pt-4 pr-1 inline-flex items-center text-sm leading-5 font-medium text-gray-300 hover:text-white-500 hover:border-gray-500 focus:outline-none focus:text-white-500 focus:border-gray-500 transition ease-in-out duration-150">
          <svg class="mr-3 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
          </svg>
          Previous
        </a>
      @endif
    </div>
    <div class="hidden md:flex">
      @foreach ($pagination->pages as $pageNumber => $path)
        <a
            href="{{ $path }}"
            class="-mt-px border-t-2 pt-4 px-4 inline-flex items-center text-sm leading-5 font-medium focus:outline-none transition ease-in-out duration-150 {{ $pagination->currentPage == $pageNumber ? 'border-blue-500 text-blue-300 focus:text-blue-300 focus:border-blue-500' : 'border-transparent text-gray-300 hover:text-white-500 hover:border-gray-500 focus:text-white-500 focus:border-gray-500' }}"
        >{{ $pageNumber }}</a>
      @endforeach
    </div>
    <div class="w-0 flex-1 flex justify-end">
      @if ($next = $pagination->next)
        <a href="{{ $next }}" class="-mt-px border-t-2 border-transparent pt-4 pl-1 inline-flex items-center text-sm leading-5 font-medium text-gray-300 hover:text-white-500 hover:border-gray-500 focus:outline-none focus:text-white-500 focus:border-gray-500 transition ease-in-out duration-150">
          Next
          <svg class="ml-3 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      @endif
    </div>
  </nav>
@endif
