@extends('_layouts.page')

@section('content')
<div class="py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
  <div class="relative max-w-lg mx-auto lg:max-w-7xl">
    <div>
      <h2 class="text-3xl font-display font-bold text-white sm:text-4xl">
        {{ $page->title }}
      </h2>
      <p class="mt-3 text-xl text-silver-500 sm:mt-4">
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
