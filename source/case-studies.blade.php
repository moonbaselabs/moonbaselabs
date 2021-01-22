@extends('_layouts.page')

@section('content')
<x-page-heading title="Case Studies" description="Nothing shows what we do better than the projects we have completed with past and current partners." />
<div class="relative overflow-hidden">
  <div class="relative overflow-hidden bg-onyx-600 py-6 sm:py-12 lg:py-24 px-4 sm:px-6 lg:py-16 lg:px-8">
    <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
      <div class="relative h-full text-lg max-w-prose mx-auto">
        <x-star-dust class="absolute top-0 left-full transform translate-x-32" />
        <x-star-dust class="absolute bottom-0 right-full transform -translate-x-48" />
      </div>
    </div>
    <div class="relative max-w-lg mx-auto lg:max-w-7xl">
      <div class="sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
        @foreach ($case_studies as $caseStudy)
          <x-case-study :case-study="$caseStudy" />
        @endforeach
      </div>
    </div>
  </div>
</div>
<x-cta.meeting team />
@overwrite
