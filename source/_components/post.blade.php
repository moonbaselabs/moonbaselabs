@props(['post'])

<div>
  <div>
    @foreach ($post->tags as $tag)
      <a href="{{ '/blog/tags/'.$tag }}" class="inline-block">
        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-gray-300 text-onyx-500">
          {{ $tag }}
        </span>
      </a>
    @endforeach
  </div>
  <a href="{{ $post->getUrl() }}" class="block">
    <h3 class="mt-4 text-xl leading-7 font-display font-semibold text-blue-300">
      {{ $post->title }}
    </h3>
    <p class="mt-3 text-base leading-6 text-sliver-700">
      {!! $post->getExcerpt(140) !!}
    </p>
  </a>
  <div class="mt-6 flex items-center">
    <div class="flex-shrink-0">
      <img class="h-10 w-10 rounded-full" src="{{ $post->getAuthorAvatarUrl() }}" alt="{{ $post->author }}">
    </div>
    <div class="ml-3">
      <p class="text-sm leading-5 font-medium text-white">
        {{ $post->author }}
      </p>
      <div class="flex text-sm leading-5 text-sliver-700">
        <time datetime="{{ $post->getDate()->format(DATE_W3C) }}">
          {{ $post->getDate()->format('M j, Y') }}
        </time>
      </div>
    </div>
  </div>
</div>
