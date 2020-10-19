@extends('_layouts.base')

@push('meta')
<meta property="og:title" content="{{ $page->title }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{ $page->getUrl() }}"/>
<meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('content')
<div class="relative py-16 overflow-hidden">
  <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
    <div class="relative h-full text-lg max-w-prose mx-auto">
      <x-star-dust class="absolute top-12 left-full transform translate-x-32" />
      <x-star-dust class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" />
      <x-star-dust class="absolute bottom-12 left-full transform translate-x-32" />
    </div>
  </div>
  <div class="relative px-4 sm:px-6 lg:px-8">
    <div class="text-lg max-w-prose mx-auto mb-6">
      <h1 class="mt-2 mb-8 text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">{{ $page->title }}</h1>
      <div class="sm:flex justify-between items-start mt-4">
        <time class="my-2 inline-block mr-8 leading-none text-gray-600 text-xs uppercase tracking-wide" datetime="{{ $page->getDate()->format(DATE_W3C) }}">{{ date('F j, Y', $page->date) }}</time>
        <div>
          @foreach ($page->tags as $tag)
            <a href="{{ '/blog/tags/'.$tag }}" class="inline-block">
              <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-blue-300 text-black-500">
                {{ $tag }}
              </span>
            </a>
          @endforeach
        </div>
      </div>
    </div>
    <div class="prose prose-lg text-white-500 mx-auto">
      @yield('content')
    </div>
  </div>
</div>

<div class="max-w-prose mx-auto mb-6">
  <x-hr />
  <nav class="mt-12 sm:flex justify-between text-sm sm:text-base leading-tight">
      <div class="mr-4 mb-4">
          @if ($next = $page->getNext())
              <a class="hover:text-gray-900 flex justify-start items-center" href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                  <span class="flex-none mr-2">&LeftArrow;</span>
                  <span>{{ $next->title }}</span>
              </a>
          @endif
      </div>

      <div class="ml-4 mb-4">
          @if ($previous = $page->getPrevious())
              <a class="hover:text-gray-900 flex justify-end items-center text-right" href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                  <span>{{ $previous->title }}</span>
                  <span class="flex-none ml-2">&RightArrow;</span>
              </a>
          @endif
      </div>
  </nav>
</div>
@overwrite
