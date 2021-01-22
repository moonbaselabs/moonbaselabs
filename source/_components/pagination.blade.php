@props(['pagination'])

@if ($pagination->pages->count())
  <div class="flex items-center justify-center">
    <nav {{ $attributes->merge([
        'class' => 'relative z-0 inline-flex shadow-sm -space-x-px"',
        'aria-label' => 'Pagination',
    ]) }}>
      @if ($pagination->previous)
        <a class="relative inline-flex items-center px-3 py-2 rounded-l-md border border-onyx-600 bg-onyx-500 text-sm font-medium text-white hover:bg-onyx-600" href="{{ $pagination->previous }}">
          <span>&LeftArrow;</span>
          <span class="sr-only">Previous</span>
        </a>
      @else
        <span class="relative inline-flex items-center px-3 py-2 rounded-l-md border border-onyx-600 bg-onyx-500 text-sm font-medium text-gray-700 hover:bg-onyx-600">
          <span>&LeftArrow;</span>
          <span class="sr-only">Previous</span>
        </span>
      @endif
      @foreach ($pagination->pages as $pageNumber => $path)
        @if ($pagination->currentPage != $pageNumber)
          <a href="{{ $path }}" class="relative inline-flex items-center px-4 py-2 border border-onyx-600 bg-onyx-500 text-sm font-medium text-white hover:bg-onyx-600">{{ $pageNumber }}</a>
        @else
          <span class="relative inline-flex items-center px-4 py-2 border border-onyx-600 bg-onyx-500 text-sm font-medium text-gray-700 hover:bg-onyx-600">{{ $pageNumber }}</span>
        @endif
      @endforeach
      @if ($pagination->next)
        <a class="relative inline-flex items-center px-3 py-2 rounded-r-md border border-onyx-600 bg-onyx-500 text-sm font-medium text-white hover:bg-onyx-600" href="{{ $pagination->next }}">
          <span class="sr-only">Next</span>
          <span>&RightArrow;</span>
        </a>
      @else
        <span class="relative inline-flex items-center px-3 py-2 rounded-r-md border border-onyx-600 bg-onyx-500 text-sm font-medium text-gray-700 hover:bg-onyx-600">
          <span class="sr-only">Next</span>
          <span>&RightArrow;</span>
        </span>
      @endif
    </nav>
  </div>
@endif
