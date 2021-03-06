@props(['title', 'description'])

<div class="py-6 sm:py-12 lg:py-24 px-4 sm:px-6 lg:px-8">
  <div class="relative max-w-lg mx-auto lg:max-w-7xl">
    <div class="space-y-5 sm:space-y-4 max-w-lg">
      <h2 class="text-3xl font-display font-bold text-white sm:text-4xl">{{ $title }}</h2>
      <p class="text-xl text-navy-300">{{ $description }}</p>
    </div>
  </div>
</div>
