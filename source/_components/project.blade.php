@props(['project'])

<div class="space-y-4">
  <div class="relative pb-2/3">
    <img class="absolute object-cover h-full w-full shadow-lg rounded-lg" src="{{ $project->image }}" alt="{{ $project->title }}">
  </div>
  <a href="{{ $project->getUrl() }}" class="block">
    <div class="text-lg leading-6 font-medium space-y-1">
      <h3 class="mt-4 text-xl leading-7 font-display font-semibold text-blue-300">{{ $project->title }}</h3>
      <p class="mt-3 text-base leading-6 text-white-700">{{ $project->getExcerpt(140) }}</p>
    </div>
  </a>
  <div class="mt-6 flex items-center">
    @foreach ($project->services as $service)
      <a href="{{ '/case-studies/services/'.$service }}" class="inline-block">
        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-gray-300 text-black-500">
          {{ $service }}
        </span>
      </a>
    @endforeach
  </div>
</div>
