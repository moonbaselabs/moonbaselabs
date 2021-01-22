@props(['post'])

{{-- <div class="relative bg-onyx-500 flex flex-col rounded-lg shadow-lg overflow-hidden">
  <div class="p-6 flex-auto flex flex-col justify-between">
    <h3 class="text-xl text-center font-display font-semibold text-blue-300">
      <a href="{{ $post->getUrl() }}">
        {{ $post->title }}
        <span class="absolute inset-0"></span>
      </a>
    </h3>
    <div class="mt-2 text-center text-xs tracking-wider uppercase text-silver-700">
      <time datetime="{{ $post->getDate()->format(DATE_W3C) }}">
        {{ $post->getDate()->format('M j, Y') }}
      </time>
    </div>
  </div>
  <div class="flex-none mt-6 flex flex-col items-center border-t-2 border-onyx-600">
    <div class="flex-shrink-0 rounded-full bg-onyx-600 border-2 border-onyx-600 -mt-8 overflow-hidden shadow-inner">
      <img class="h-16 w-16 rounded-full" src="{{ $post->getAuthorAvatarUrl() }}" alt="{{ $post->author }}">
    </div>
    <div class="pt-4 p-6 text-center">
      <p class="text-sm font-medium text-silver-700">
        {{ $post->author }}
      </p>
      <div class="mt-6 flex items-center">
        <x-button color="onyx">
          Read more
        </x-button>
      </div>
    </div>
  </div>
</div> --}}

<div class="relative bg-onyx-500 flex flex-col rounded-lg shadow-lg overflow-hidden">
  <div class="relative p-6 h-full flex flex-col">
    <div class="h-full flex-auto">
      <div class="text-xs uppercase tracking-wider text-silver-700">
        <time datetime="{{ $post->getDate()->format(DATE_W3C) }}">
          {{ $post->getDate()->format('M j, Y') }}
        </time>
      </div>
      <h3 class="mt-2 text-2xl font-display font-semibold text-blue-300">
        <a href="{{ $post->getUrl() }}">
          {{ $post->title }}
          <span class="absolute inset-0"></span>
        </a>
      </h3>
    </div>
    <div class="mt-4 flex-none flex items-center">
      <div class="flex-shrink-0">
        <img class="h-8 w-8 rounded-full" src="{{ $post->getAuthorAvatarUrl() }}" alt="{{ $post->author }}">
      </div>
      <div class="ml-3">
        <p class="text-sm font-medium text-white">
          {{ $post->author }}
        </p>
      </div>
      <div class="text-gold-300 absolute bottom-0 right-0 px-6 py-7 leading-none text-xl">&RightArrow;</div>
    </div>
  </div>
</div>
