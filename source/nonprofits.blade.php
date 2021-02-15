@extends('_layouts.page')

@section('content')
{{-- <x-page-heading title="We love working with nonprofits" description="Below are a few of our favorite projects we've completed for our nonprofit partners." /> --}}
{{-- <div class="relative overflow-hidden">
  <div class="relative overflow-hidden bg-onyx-600 py-6 sm:py-12 lg:py-24 px-4 sm:px-6 lg:py-16 lg:px-8">
    <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
      <div class="relative h-full text-lg max-w-prose mx-auto">
        <x-star-dust class="absolute top-0 left-full transform translate-x-32" />
        <x-star-dust class="absolute bottom-0 right-full transform -translate-x-48" />
      </div>
    </div>
    <div class="relative max-w-lg mx-auto lg:max-w-7xl">
      <div class="sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
        @foreach ($case_studies->filter(fn ($caseStudy) => in_array('nonprofit', $caseStudy->tags, true)) as $caseStudy)
          <x-case-study :case-study="$caseStudy" />
        @endforeach
      </div>
    </div>
  </div>
</div> --}}
<div class="py-6 sm:py-12 lg:py-24 px-4 sm:px-6 lg:py-16 lg:px-8">
  <div class="relative mx-auto lg:max-w-7xl bg-onyx-500 rounded-lg shadow-lg overflow-hidden">
    <div class="h-56 bg-blue-500 sm:h-72 md:absolute md:top-0 md:right-0 md:h-full md:w-1/2">
      <img aria-hidden class="w-full h-full object-cover" src="/assets/images/connections.svg" alt="Connections">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
      <div class="md:mr-auto md:w-1/2 md:pr-10">
        <h2 class="mt-2 text-white text-3xl font-display font-extrabold tracking-tight sm:text-4xl">
          Building software that matters
        </h2>
        <p class="mt-3 text-lg text-silver-700">
          We build software to empower the doers; our analytics tools create the context for progress. Our clients' missions matter: they matter to our communities, and that matters to us.
        </p>
        <div class="mt-8">
          <div class="inline-flex rounded-md shadow">
            <x-button color="onyx" href="/blog/building-software-that-matters" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-white hover:bg-gray-50">
              Learn why we love working with nonprofits →
            </x-button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<x-cta.case-studies :case-studies="$case_studies->filter(fn ($caseStudy) => in_array('nonprofit', $caseStudy->tags, true))" />
<x-cta.meeting team />
@overwrite
