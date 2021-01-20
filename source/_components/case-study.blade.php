@props(['caseStudy'])

<div class="relative space-y-4">
  <div class="relative h-48">
    <img class="absolute object-cover h-full w-full shadow-lg rounded-lg" src="{{ $caseStudy->image }}" alt="{{ $caseStudy->title }}">
  </div>
  <a href="{{ $caseStudy->getUrl() }}" class="block">
    <div class="text-lg font-medium space-y-1">
      <h3 class="mt-4 text-xl font-display font-semibold text-blue-300">{{ $caseStudy->title }}</h3>
      <p class="mt-3 text-base text-silver-700">{{ $caseStudy->getExcerpt(140) }}</p>
    </div>
    <span class="absolute inset-0"></span>
  </a>
  {{-- <a href="{{ '/clients/'.\Illuminate\Support\Str::slug($caseStudy->client) }}" class="inline-block">
    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-gray-300 text-onyx-500">
      {{ $caseStudy->client }}
    </span>
  </a> --}}
</div>
