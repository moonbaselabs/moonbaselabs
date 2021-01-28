@props(['post'])

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
    </div>
    <div class="text-gold-300 absolute bottom-0 right-0 px-6 py-7 leading-none text-xl">&RightArrow;</div>
  </div>
</div>
