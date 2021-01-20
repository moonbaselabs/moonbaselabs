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
        <h2 class="text-3xl font-display font-extrabold text-white sm:text-4xl">
          Case Studies
        </h2>
        <p class="mt-3 text-xl text-silver-500 sm:mt-4">
          Successful journeys with current clients.
        </p>
      </div>
      <x-hr class="mt-12" />
      <div class="mt-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
        @foreach ($case_studies as $caseStudy)
          <x-case-study :case-study="$caseStudy" />
        @endforeach
      </div>
    </div>
  </div>
</div>
@overwrite
