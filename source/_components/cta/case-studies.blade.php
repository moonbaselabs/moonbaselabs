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
            <p class="mt-4 text-lg text-sliver-500">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla nec.</p>
            <a href="/case-studies" class="mt-8 bg-sliver-500 border border-transparent rounded-md shadow px-6 py-3 inline-flex items-center text-base font-medium text-blue-600 hover:text-blue-500 hover:bg-white transition duration-150 ease-in-out">Case Studies</a>
          </div>
        </div>
        <div class="relative pb-3/5 -mt-6 md:pb-1/2">
          <img class="absolute inset-0 w-full h-full transform translate-x-6 translate-y-6 rounded-md object-cover object-left-top sm:translate-x-16 lg:translate-y-20" src="{{ $project = $projects->first()->image }}" alt="{{ $project->title }}">
        </div>
      </div>
    </div>
  </div>
</div>
