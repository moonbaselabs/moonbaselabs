@extends('_layouts.base')

@section('content')
  <div class="py-6 px-4 sm:px-6 lg:py-12 lg:px-8">
    <div class="relative max-w-lg mx-auto lg:max-w-7xl">
      <div class="lg:flex items-center justify-between">
        <a href="/" title="{{ $page->siteName }} home">
          <img class="block h-14 mx-auto" width="192" height="56" src="/assets/images/logo.svg" alt="Moonbase Labs">
        </a>
        <x-navigation :page="$page" />
      </div>
    </div>
  </div>
  @yield('content')
  <x-footer />
@overwrite
