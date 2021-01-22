@extends('_layouts.page')

@section('content')
<div class="relative overflow-hidden">
  <div class="py-6 sm:py-12 lg:py-24 px-4 sm:px-6 lg:px-8">
    <div class="relative max-w-lg mx-auto lg:max-w-7xl">
      <div class="space-y-5 sm:space-y-4 max-w-lg">
        <h2 class="text-3xl font-display font-extrabold text-white sm:text-4xl">{{ $page->title }}</h2>
        <p class="text-xl text-silver-500">{{ $page->description }}</p>
      </div>
    </div>
  </div>
  <div class="relative max-w-lg mx-auto lg:max-w-7xl">
    <hr class="border-onyx-300 border-t-2">
  </div>
  <div class="py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
    <div class="relative max-w-lg mx-auto lg:max-w-7xl">
      <x-star-dust class="absolute bottom-0 left-1/2 transform -translate-y-32" />
      <div class="lg:grid lg:grid-cols-2 lg:gap-16">
        <div class="relative mb-8 lg:mb-0 lg:row-start-1 lg:col-start-2">
          <!-- Stats -->
          <div class="relative z-10">
            <dl class="grid grid-cols-2 gap-x-4 gap-y-8">
                <div>
                  <dt class="uppercase tracking-wider text-sm font-medium text-navy-500">Mission</dt>
                  <dd class="text-xl font-medium tracking-tight text-navy-300">MBL#{{ strtoupper(substr(md5($page->getFilename()), 0, 5)) }}</dd>
                </div>
                <div>
                  <dt class="uppercase tracking-wider text-sm font-medium text-navy-500">Partner</dt>
                  <dd class="text-xl font-medium tracking-tight text-navy-300">
                    <a class="underline text-gold-500 hover:text-gold-400" href="/clients/{{ \Illuminate\Support\Str::slug($page->client) }}">{{ $page->client }}</a>
                  </dd>
                </div>
                <div>
                  <dt class="uppercase tracking-wider text-sm font-medium text-navy-500">Industry</dt>
                  <dd class="text-xl font-medium tracking-tight text-navy-300">
                    <a class="underline text-gold-500 hover:text-gold-400" href="/industries/{{ \Illuminate\Support\Str::slug($page->industry) }}">{{ $page->industry }}</a>
                  </dd>
                </div>
                <div>
                  <dt class="uppercase tracking-wider text-sm font-medium text-navy-500">Location</dt>
                  <dd class="text-xl font-medium tracking-tight text-navy-300">
                    <a class="underline text-gold-500 hover:text-gold-400" href="{{ $page->url }}">{{ str_replace('www.', '', parse_url($page->url)['host']) }}</a>
                  </dd>
                </div>
            </dl>
          </div>
          <!-- Image -->
          <div class="relative mt-10">
            <x-orbit class="hidden lg:block absolute top-0 right-0 transform -translate-y-1/4 translate-x-1/2" width="404" height="404" />
            <div class="relative text-base mx-auto max-w-prose lg:max-w-none">
              <figure>
                <img src="{{ $page->image }}" alt="{{ $page->title }}" width="1184" height="1376" class="rounded-lg shadow-lg object-cover object-center absolute inset-0 w-full h-full lg:static lg:h-auto">
              </figure>
            </div>
          </div>
        </div>
        <div class="relative">
          <div class="prose prose-lg mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1">
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
<x-cta.meeting team />
@overwrite
