---
extends: _layouts.page
title: Blog
description: Transmissions from the moonbase.
pagination:
  collection: posts
  perPage: 9
---

@section('content')
<x-page-heading title="The Blog" description="Transmissions from the moonbase." />
<div class="relative overflow-hidden">
  <div class="relative overflow-hidden bg-onyx-600 py-6 sm:py-12 lg:py-24 px-4 sm:px-6 lg:py-16 lg:px-8">
    <div class="hidden absolute inset-y-0 h-full w-full 2xl:block">
      <div class="relative h-full text-lg max-w-prose mx-auto">
        <x-star-dust class="absolute top-0 left-full transform translate-x-32" />
        <x-star-dust class="absolute bottom-0 right-full transform -translate-x-48" />
      </div>
    </div>
    <div class="relative max-w-lg mx-auto lg:max-w-7xl">
      <div class="sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
        @foreach ($pagination->items as $post)
          <x-post :post="$post" />
        @endforeach
      </div>
      <x-pagination class="mt-12" :pagination="$pagination" />
    </div>
  </div>
</div>
<x-cta.meeting team />
@overwrite
