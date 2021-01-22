@props(['caseStudies'])

<div class="bg-onyx-600">
  <div class="relative py-16 sm:py-24 lg:py-32 bg-cover" style="background-image:url(/assets/svg/moonbase-lab-texture.svg)">
    <div class="relative">
      <div class="text-center mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
        <h2 class="text-base font-semibold tracking-wider text-blue-300 uppercase">Organizations we’ve sent</h2>
        <p class="mt-2 text-3xl font-display font-extrabold text-gray-900 tracking-tight sm:text-4xl">
          To the moon and beyond
        </p>
      </div>
      <div class="mt-12 mx-auto max-w-md px-4 grid gap-8 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-3 lg:max-w-7xl">
        @foreach($caseStudies->take(3) as $caseStudy)
          <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
            <div class="flex-shrink-0">
              <img class="h-48 w-full object-cover" src="{{ $caseStudy->image }}" alt="{{ $caseStudy->title }}">
            </div>
            <div class="flex-1 bg-onyx-500 p-6 flex flex-col justify-between">
              <div class="flex-1">
                {{-- <p class="text-sm font-medium text-blue-300">
                  <a href="#" class="hover:underline">
                    Article
                  </a>
                </p> --}}
                <a href="#" class="block mt-2">
                  <p class="text-xl font-semibold text-gray-900">
                    {{ $caseStudy->title }}
                  </p>
                  <p class="mt-3 text-base text-gray-500">
                    {{ $caseStudy->description }}
                  </p>
                </a>
              </div>
              <div class="mt-6 flex items-center">
                {{-- <div class="flex-shrink-0">
                  <a href="#">
                    <span class="sr-only">Roel Aufderehar</span>
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </a>
                </div>
                <div class="ml-3">
                  <p class="text-sm font-medium text-gray-900">
                    <a href="#" class="hover:underline">
                      Roel Aufderehar
                    </a>
                  </p>
                  <div class="flex space-x-1 text-sm text-gray-500">
                    <time datetime="2020-03-16">
                      Mar 16, 2020
                    </time>
                    <span aria-hidden="true">
                      &middot;
                    </span>
                    <span>
                      6 min read
                    </span>
                  </div>
                </div> --}}
                <a href="/" class="flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-onyx-300 hover:bg-onyx-400 focus:outline-none focus:border-blue-700 focus:ring-blue-500">
                  View case study
                </a>
                {{-- <a href="{{ $caseStudy->getUrl() }}" class="uppercase tracking-wider text-gold-300 text-sm hover:text-gold-400">
                  <span class="underline">View case study</span> →
                </a> --}}
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
{{--
<div class="bg-blue-800">
  <div class="bg-bottom" style="background-image:url(/assets/svg/moonbase-lab-texture.svg)">
    <div class="max-w-screen-xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
      <div class="bg-gradient-to-r from-blue-600 to-blue-500 rounded-lg shadow-xl overflow-hidden lg:grid lg:grid-cols-2 lg:gap-4">
        <div class="pt-10 pb-12 px-6 sm:pt-16 sm:px-16 lg:py-16 lg:pr-0 xl:py-20 xl:px-20">
          <div class="lg:self-center">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
              <span class="block">Ready to dive in?</span>
              <span class="block">Start your free trial today.</span>
            </h2>
            <p class="mt-4 text-lg text-silver-500">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla nec.</p>
            <a href="/case-studies" class="mt-8 bg-silver-500 border border-transparent rounded-md shadow px-6 py-3 inline-flex items-center text-base font-medium text-blue-600 hover:text-blue-500 hover:bg-onyx-500">Case Studies</a>
          </div>
        </div>
        <div class="relative pb-3/5 -mt-6 md:pb-1/2">
          <img class="absolute inset-0 w-full h-full transform translate-x-6 translate-y-6 rounded-md object-cover object-left-top sm:translate-x-16 lg:translate-y-20" src="{{ $caseStudies = $caseStudies->first()->image }}" alt="{{ $caseStudy->title }}">
        </div>
      </div>
    </div>
  </div>
</div> --}}
