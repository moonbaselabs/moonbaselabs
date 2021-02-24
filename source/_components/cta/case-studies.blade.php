@props(['caseStudies', 'label' => 'Organizations'])

<div {{ $attributes->merge(['class' => 'bg-onyx-600']) }}>
  <div class="relative py-24 sm:py-32 lg:py-48 bg-cover" style="background-image:url(/assets/images/moonbase-lab-texture.svg)">
    <div class="relative">
      <div class="text-center mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
        <h2 class="text-base font-semibold tracking-wider text-blue-300 uppercase">{{ $label }} we’ve sent</h2>
        <p class="mt-2 text-3xl font-display font-bold text-gray-900 tracking-tight sm:text-4xl">
          To the moon and beyond
        </p>
      </div>
      <div class="mt-12 mx-auto max-w-md px-4 grid gap-8 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-3 lg:max-w-7xl">
        @foreach($caseStudies->take(3) as $caseStudy)
          <x-case-study :case-study="$caseStudy" />
        @endforeach
      </div>
    </div>
  </div>
</div>
