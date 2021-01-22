@extends('_layouts.page')

@section('content')
<div class="relative overflow-hidden">
  <div class="py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
    <div class="relative max-w-lg mx-auto lg:max-w-7xl">
      <x-star-dust class="absolute bottom-0 left-1/2 transform -translate-y-32" />
      <div class="mx-auto text-base max-w-prose lg:max-w-none">
        <h1 class="text-4xl font-display font-extrabold tracking-tight text-white sm:text-5xl">{{ $page->title }}</h1>
      </div>
      <div class="mt-10 lg:grid lg:grid-cols-2 lg:gap-16">
        <div class="relative mb-8 lg:mb-0 lg:row-start-1 lg:col-start-2">
          <div class="relative">
            <x-orbit class="hidden lg:block absolute top-0 right-0 transform -translate-y-1/4 translate-x-1/2" width="404" height="404" />
            <div class="relative pt-64 pb-10 rounded-2xl shadow-xl overflow-hidden">
              <img class="absolute inset-0 h-full w-full object-cover" src="{{ $page->image }}" alt="{{ $page->title }} interface">
              <div class="absolute inset-0 bg-gold-500" style="mix-blend-mode: multiply;"></div>
              <div class="absolute inset-0 bg-gradient-to-t from-gold-600 via-gold-600 opacity-90"></div>
              <div class="relative px-8">
                <div>
                  <img class="h-12" src="/assets/images/clients/{{ $page->getFilename().'.svg' }}" alt="{{ $page->title }}">
                </div>
                <blockquote class="mt-8">
                  <div class="relative text-xl font-medium text-white md:flex-grow">
                    <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-gold-400" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                      <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"></path>
                    </svg>
                    <p class="relative">
                      Tincidunt integer commodo, cursus etiam aliquam neque, et. Consectetur pretium in volutpat, diam. Montes, magna cursus nulla feugiat dignissim id lobortis amet.
                    </p>
                  </div>

                  <footer class="mt-4">
                    <p class="text-base font-semibold text-gold-200">Sarah Williams, CEO at Workcation</p>
                  </footer>
                </blockquote>
              </div>
            </div>
          </div>
          <!-- Stats -->
          <div class="mt-10">
            <dl class="grid grid-cols-2 gap-x-4 gap-y-8">
                <div class="border-t-2 border-onyx-300 pt-6">
                  <dt class="uppercase tracking-wider text-base font-medium text-navy-500">Mission Code</dt>
                  <dd class="text-3xl font-medium tracking-tight text-navy-300">MLB#{{ strtoupper(substr(md5($page->getFilename()), 0, 5)) }}</dd>
                </div>
                <div class="border-t-2 border-onyx-300 pt-6">
                  <dt class="uppercase tracking-wider text-base font-medium text-navy-500">Client</dt>
                  <dd class="text-3xl font-medium tracking-tight text-navy-300">{{ $page->client }}</dd>
                </div>
                <div class="border-t-2 border-onyx-300 pt-6">
                  <dt class="uppercase tracking-wider text-base font-medium text-navy-500">Industry</dt>
                  <dd class="text-3xl font-medium tracking-tight text-navy-300">{{ $page->industry }}</dd>
                </div>
                <div class="border-t-2 border-onyx-300 pt-6">
                  <dt class="uppercase tracking-wider text-base font-medium text-navy-500">Location</dt>
                  <dd class="text-3xl font-medium tracking-tight text-navy-300"><a class="underline hover:text-gold-500" href="{{ $page->url }}">{{ str_replace('www.', '', parse_url($page->url)['host']) }}</a></dd>
                </div>

            </dl>
          </div>
        </div>
        <div class="relative">
          <div class="text-xl max-w-prose mx-auto lg:max-w-none">
            <p class="text-2xl text-gray-500 mb-5">{{ $page->description }}</p>
          </div>
          <div class="mt-14 prose prose-xl mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1">
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
