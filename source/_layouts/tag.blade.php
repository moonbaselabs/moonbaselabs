@extends('_layouts.base')

@push('meta')
<meta property="og:title" content="{{ $page->title }}" />
<meta property="og:type" content="website" />
<meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('content')
<div class="py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
  <div class="relative max-w-lg mx-auto lg:max-w-7xl">
    <div>
      <h2 class="text-3xl leading-9 font-display font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
        {{ $page->title }}
      </h2>
      <p class="mt-3 text-xl leading-7 text-white-500 sm:mt-4">
        @yield('content')
      </p>
    </div>
    <x-hr class="mt-6" />
    <div class="mt-6 grid gap-16 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
      @foreach ($page->posts($posts) as $post)
        <x-post :post="$post" />
      @endforeach
    </div>
  </div>
</div>
@overwrite
