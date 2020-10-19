<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="bg-black-500 text-white">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        @stack('meta')
        <meta property="og:image" content="">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@moonbaselabs">
        <meta name="twitter:creator" content="@moonbaselabs">
        <meta name="twitter:image" content="">
        <meta name="twitter:image:alt" content="">
        <x-custom-font src="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&family=Barlow:wght@400;500;600;700&display=swap" />
        <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    </head>
    <body>
      @if ($nav ?? true)
        <div class="py-6 px-4 sm:px-6 lg:py-12 lg:px-8">
          <div class="relative max-w-lg mx-auto lg:max-w-7xl">
            <div class="flex items-center justify-between">
              <a href="/" title="{{ $page->siteName }} home">
                <img class="h-12" height="48" src="/assets/svg/logo.svg" alt="Moonbase Labs">
              </a>
              <nav class="-mx-5 -my-2 flex flex-wrap justify-center">
                <div class="px-5 py-2">
                  <a href="/about" class="text-base leading-6 {{ $page->isActive('/about') ? 'text-gold-300 hover:text-gold-500' : 'text-gray-300 hover:text-white' }}">
                    About
                  </a>
                </div>
                <div class="px-5 py-2">
                  <a href="/case-studies" class="text-base leading-6 {{ $page->isActive('/case-studies') ? 'text-gold-300 hover:text-gold-500' : 'text-gray-300 hover:text-white' }}">
                    Case Studies
                  </a>
                </div>
                <div class="px-5 py-2">
                  <a href="/blog" class="text-base leading-6 {{ $page->isActive('/blog') ? 'text-gold-300 hover:text-gold-500' : 'text-gray-300 hover:text-white' }}">
                    Blog
                  </a>
                </div>
              </div>
            </nav>
          </div>
        </div>
      @endif
      @yield('content')
      <x-footer />
    </body>
</html>
