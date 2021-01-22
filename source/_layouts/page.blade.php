@extends('_layouts.base')

@section('content')
  <div class="py-6 px-4 sm:px-6 lg:py-12 lg:px-8">
    <div class="relative max-w-lg mx-auto lg:max-w-7xl">
      <div class="flex items-center justify-between">
        <a href="/" title="{{ $page->siteName }} home">
          <img class="h-12" height="48" src="/assets/svg/logo.svg" alt="Moonbase Labs">
        </a>
        <x-navigation :page="$page" />
      </div>
    </div>
  </div>
  @yield('content')
  <x-footer />
@overwrite
