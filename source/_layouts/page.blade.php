@extends('_layouts.base')

@section('content')
  <div class="py-6 px-4 sm:px-6 lg:py-12 lg:px-8">
    <div class="relative max-w-lg mx-auto lg:max-w-7xl">
      <div class="flex items-center justify-between">
        <a href="/" title="{{ $page->siteName }} home">
          <img class="h-12" height="48" src="/assets/svg/logo.svg" alt="Moonbase Labs">
        </a>
        <nav class="-mx-5 -my-2 flex flex-wrap justify-center">
          <div class="px-5 py-2">
            <a href="/about" class="text-base {{ $page->isActive('/about') ? 'text-gold-300 hover:text-gold-500' : 'text-gray-300 hover:text-white' }}">
              About
            </a>
          </div>
          <div class="px-5 py-2">
            <a href="/case-studies" class="text-base {{ $page->isActive('/case-studies') ? 'text-gold-300 hover:text-gold-500' : 'text-gray-300 hover:text-white' }}">
              Case Studies
            </a>
          </div>
          <div class="px-5 py-2">
            <a href="/blog" class="text-base {{ $page->isActive('/blog') ? 'text-gold-300 hover:text-gold-500' : 'text-gray-300 hover:text-white' }}">
              Blog
            </a>
          </div>
        </div>
      </nav>
    </div>
  </div>
  @yield('content')
  <x-footer />
@overwrite
