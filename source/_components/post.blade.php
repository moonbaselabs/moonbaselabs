@props(['post'])

<div>
  <div>
    @foreach ($post->tags as $tag)
      <a href="{{ '/tags/'.$tag }}" class="inline-block">
        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-gray-300 text-onyx-700">
          {{ $tag }}
        </span>
      </a>
    @endforeach
  </div>
  <a href="{{ $post->getUrl() }}" class="block">
    <h3 class="mt-4 text-xl font-display font-semibold text-blue-300">
      {{ $post->title }}
    </h3>
    <p class="mt-3 text-base text-silver-700">
      {!! $post->getExcerpt(140) !!}
    </p>
  </a>
  <div class="mt-6 flex items-center">
    <div class="flex-shrink-0">
      <img class="h-10 w-10 rounded-full" src="{{ $post->getAuthorAvatarUrl() }}" alt="{{ $post->author }}">
    </div>
    <div class="ml-3">
      <p class="text-sm font-medium text-white">
        {{ $post->author }}
      </p>
      <div class="flex text-sm text-silver-700">
        <time datetime="{{ $post->getDate()->format(DATE_W3C) }}">
          {{ $post->getDate()->format('M j, Y') }}
        </time>
      </div>
    </div>
  </div>
</div>
