---
pagination:
  collection: projects
  perPage: 9
---
@extends('_layouts.page')

@section('content')
<div class="relative overflow-hidden">
  <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
    <div class="relative h-full text-lg max-w-prose mx-auto">
      <x-star-dust class="absolute top-0 left-full transform translate-x-32" />
      <x-star-dust class="absolute bottom-0 right-full transform -translate-x-48" />
    </div>
  </div>
  <div class="py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
    <div class="relative max-w-lg mx-auto lg:max-w-7xl">
      <div>
        <h2 class="text-3xl leading-9 font-display font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
          Case Studies
        </h2>
        <p class="mt-3 text-xl leading-7 text-white-500 sm:mt-4">
          Successful journeys with current clients.
        </p>
      </div>
      <x-hr class="mt-12" />
      <div class="mt-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
        @foreach ($pagination->items as $project)
          <x-project :project="$project" />
        @endforeach
      </div>
    </div>
  </div>
</div>
@overwrite
