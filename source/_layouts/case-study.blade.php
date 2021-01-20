@extends('_layouts.page')

@section('content')
<div class="relative overflow-hidden">
  <div class="py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
    <div class="relative max-w-lg mx-auto lg:max-w-7xl">
      <x-star-dust class="absolute bottom-0 left-1/2 transform -translate-y-32" />
      <div class="mx-auto text-base max-w-prose lg:max-w-none">
        <div class="flex items-baseline space-x-2 text-navy-500 uppercase tracking-widest text-xs"><dt>Mission:</dt><dd>MLB#{{ substr(md5($page->getFilename()), 0, 5) }}</dd></div>
        <h1 class="mt-2 text-3xl font-display font-extrabold tracking-tight text-white sm:text-4xl">{{ $page->title }}</h1>
        <dl class="mt-4 space-y-2">
          <div class="flex items-baseline space-x-2 text-silver-700 uppercase tracking-widest text-xs"><dt class="text-gray-700">Client:</dt><dd><a href="{{ '/industries/'.\Illuminate\Support\Str::slug($caseStudy->client) }}">{{ $page->client }}</a></dd></div>
          <div class="flex items-baseline space-x-2 text-silver-700 uppercase tracking-widest text-xs"><dt class="text-gray-700">Industry:</dt><dd><a href="{{ '/industries/'.\Illuminate\Support\Str::slug($caseStudy->industry) }}">{{ $page->industry }}</a></dd></div>
        </dl>
      </div>
      <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
        <div class="relative mb-8 lg:mb-0 lg:row-start-1 lg:col-start-2">
          <x-orbit class="hidden lg:block absolute top-0 right-0 transform -translate-y-1/4 translate-x-1/2" width="404" height="404" />
          <div class="relative text-base mx-auto max-w-prose lg:max-w-none">
            <figure>
              <div class="relative pb-7/12 lg:pb-0">
                <img src="{{ $page->image }}" alt="{{ $page->title }}" width="1184" height="1376" class="rounded-lg shadow-lg object-cover object-center absolute inset-0 w-full h-full lg:static lg:h-auto">
              </div>
            </figure>
          </div>
        </div>
        <div class="relative">
          <div class="text-base max-w-prose mx-auto lg:max-w-none">
            <p class="text-lg text-silver-500 mb-5">{{ $page->description }}</p>
          </div>
          <div class="prose mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1">
            @yield('content')
          </div>
          <div class="max-w-prose mx-auto mt-12">
            <x-hr />
            <nav class="mt-12 sm:flex justify-between text-sm sm:text-base leading-tight">
                <div class="mr-4 mb-4">
                    @if ($next = $page->getNext())
                        <a class="hover:text-white flex justify-start items-center" href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                            <span class="flex-none mr-2">&LeftArrow;</span>
                            <span>{{ $next->title }}</span>
                        </a>
                    @endif
                </div>

                <div class="ml-4 mb-4">
                    @if ($previous = $page->getPrevious())
                        <a class="hover:text-white flex justify-end items-center text-right" href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                            <span>{{ $previous->title }}</span>
                            <span class="flex-none ml-2">&RightArrow;</span>
                        </a>
                    @endif
                </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@overwrite
