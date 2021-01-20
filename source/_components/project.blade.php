@props(['project'])

<div class="space-y-4">
  <div class="relative pb-2/3">
    <img class="absolute object-cover h-full w-full shadow-lg rounded-lg" src="{{ $project->image }}" alt="{{ $project->title }}">
  </div>
  <a href="{{ $project->getUrl() }}" class="block">
    <div class="text-lg font-medium space-y-1">
      <h3 class="mt-4 text-xl font-display font-semibold text-blue-300">{{ $project->title }}</h3>
      <p class="mt-3 text-base text-sliver-700">{{ $project->getExcerpt(140) }}</p>
    </div>
  </a>
  <div class="mt-6 flex items-center">
    @foreach ($project->services as $service)
      <a href="{{ '/case-studies/services/'.$service }}" class="inline-block">
        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-gray-300 text-onyx-500">
          {{ $service }}
        </span>
      </a>
    @endforeach
  </div>
</div>
