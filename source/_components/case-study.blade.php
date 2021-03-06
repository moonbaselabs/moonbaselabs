@props(['caseStudy'])

<div class="relative flex flex-col rounded-lg shadow-lg overflow-hidden">
  <div class="flex-shrink-0 bg-navy-600">
    <img class="h-48 w-full object-cover object-top" src="{{ str_replace('.jpg', '-768.jpg',  $caseStudy->image) }}" alt="{{ $caseStudy->title }}">
  </div>
  <div class="flex-1 bg-onyx-500 p-6 flex flex-col justify-between">
    <div class="flex-1">
      <p class="text-xl font-display font-bold text-blue-300">
        {{ $caseStudy->title }}
      </p>
      <p class="mt-3 text-base text-silver-700">
        {{ $caseStudy->description }}
      </p>
    </div>
    <div class="mt-6 flex items-center">
      <x-button color="onyx" href="{{ $caseStudy->getUrl() }}">
        View case study
        <span class="absolute inset-0"></span>
      </x-button>
    </div>
  </div>
</div>
