@extends('_layouts.page')

@section('content')
<div class="relative py-16 overflow-hidden">
  <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
    <div class="relative h-full text-lg max-w-prose mx-auto">
      <x-star-dust class="absolute top-12 left-full transform translate-x-32" />
      <x-star-dust class="absolute top-1/4 right-full transform -translate-x-32" />
      <x-star-dust class="absolute bottom-12 left-full transform translate-x-32" />
    </div>
  </div>
  <article class="relative px-4 sm:px-6 lg:px-8">
    <div class="text-xl max-w-prose mx-auto mb-6">
      <time class="inline-block mr-8 leading-none text-gray-600 text-xs uppercase tracking-wide" datetime="{{ $page->getDate()->format(DATE_W3C) }}">{{ date('F j, Y', $page->date) }}</time>
      <h1 class="mt-2 mb-8 text-4xl font-display font-bold tracking-tight text-white sm:text-5xl">{{ $page->title }}</h1>
      <div class="sm:flex justify-between items-start mt-4">
        <div class="mt-2 flex-none flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8 rounded-full" src="{{ $page->getAuthorAvatarUrl() }}" alt="{{ $page->author }}">
          </div>
          <div class="ml-3">
            <p class="text-sm font-medium text-white">
              {{ $page->author }}
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-12 prose prose-xl text-silver-500 mx-auto">
      @yield('content')
    </div>
  </article>
</div>

<div class="px-4 sm:px-6 lg:px-8">
  <div class="text-xl max-w-prose mx-auto mb-6">
    <x-hr />
    @php $webmentions = $page->getWebmentions() @endphp
    @if($webmentions->count())
      <div id="mentions" class="mt-16 space-y-8">
        <h2 class="mb-8 text-3xl font-display font-bold tracking-tight text-white sm:text-4xl">Mentions</h2>
        @foreach($webmentions as $webmention)
          <div class="text-base">
            <div class="flex items-center">
              <div class="mr-2 flex-shrink-0">
                <img loading="lazy" src="{{ $webmention->author->photo }}" class="h-8 w-8 rounded-full border border-gray-200 bg-white text-silver-700"/>
              </div>
              <div>
                <h3>
                  <a href="{{ $webmention->author->url }}" class="font-bold hover:underline">{{ $webmention->author->name }}</a>
                  <a href="{{ $webmention->url }}" class="underline hover:bg-blue-300">{{ $webmention->verb }}</a>
                  <span class="text-silver-700">on {{ $webmention->date->format('F j, Y') }}</span>
                </h3>
              </div>
            </div>
            @if ($webmention->text)
              <div class="mt-2">{{ $webmention->text }}</div>
            @endif
          </div>
        @endforeach
      </div>
    @endif
    <nav class="mt-12 sm:flex justify-between text-sm sm:text-base leading-tight">
      <div class="mr-4 mb-4">
        @if ($next = $page->getNext())
          <a class="text-gold-300 hover:gold-400 flex justify-start items-center" href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
            <span class="flex-none mr-2">&LeftArrow;</span>
            <span>{{ $next->title }}</span>
          </a>
        @endif
      </div>

      <div class="ml-4 mb-4">
          @if ($previous = $page->getPrevious())
            <a class="text-gold-300 hover:gold-400 flex justify-end items-center text-right" href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
              <span>{{ $previous->title }}</span>
              <span class="flex-none ml-2">&RightArrow;</span>
            </a>
          @endif
      </div>
    </nav>
  </div>
</div>
<x-cta.meeting class="pt-16" team />
@overwrite
