@extends('_layouts.base')

@section('content')
<div class="relative -mb-6 bg-gradient-to-r from-black-400 overflow-hidden">
  <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full">
    <div class="relative h-full max-w-screen-xl mx-auto">
      <x-star-dust class="absolute right-full transform -translate-y-1/4 translate-x-1/2 lg:translate-y-1/3 lg:translate-x-1/2" />
      <x-star-dust class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/3 lg:-translate-x-1/2" />
    </div>
    <svg class="absolute top-0 left-0 w-full h-64 -mt-32 text-black-500 lg:-mt-24" fill="currentColor" preserveAspectRatio="false" xmlns="http://www.w3.org/2000/svg">
      <ellipse cx="50%" cy="25%" rx="58%" ry="75%"></ellipse>
    </svg>
    <svg class="hidden absolute bottom-0 left-0 w-full h-64 -mb-20 text-black-500 md:block" fill="currentColor" preserveAspectRatio="false" xmlns="http://www.w3.org/2000/svg">
      <ellipse cx="50%" cy="75%" rx="58%" ry="25%"></ellipse>
    </svg>
  </div>
  <div class="relative pb-12 sm:pb-16 md:pb-20 lg:pb-28 xl:pb-36">
    <div class="relative py-6 px-4 sm:px-6 lg:py-12 lg:px-8">
      <div class="relative max-w-lg mx-auto lg:max-w-7xl">
        <div class="flex items-center justify-between">
          <a href="/" title="{{ $page->siteName }} home">
            <img class="h-12" height="48" src="/assets/svg/logo.svg" alt="Moonbase Labs">
          </a>
          <nav class="-mx-5 -my-2 flex flex-wrap justify-center">
            <div class="px-5 py-2">
              <a href="/about" class="text-base leading-6 {{ $page->isActive('/about') ? 'text-gold-300 hover:text-gold-500' : 'text-gray-300 hover:text-white' }}">
                About
              </a>
            </div>
            <div class="px-5 py-2">
              <a href="/case-studies" class="text-base leading-6 {{ $page->isActive('/case-studies') ? 'text-gold-300 hover:text-gold-500' : 'text-gray-300 hover:text-white' }}">
                Case Studies
              </a>
            </div>
            <div class="px-5 py-2">
              <a href="/blog" class="text-base leading-6 {{ $page->isActive('/blog') ? 'text-gold-300 hover:text-gold-500' : 'text-gray-300 hover:text-white' }}">
                Blog
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 xl:mt-36">
      <div class="text-center">
        <h2 class="text-4xl tracking-tight leading-10 font-display font-extrabold text-white sm:text-5xl sm:leading-none md:text-6xl">
          In space no one can hear
          <br class="xl:hidden">
          <span class="text-orange-500">you in space.</span>
        </h2>
        <p class="mt-3 max-w-md mx-auto text-base text-white-600 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
          Whoops, I made another a website this weekend, so that the team could get an idea of how a statically generated blog might look and feel.
        </p>
        <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
          <div class="rounded-md shadow">
            <a href="/about" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-green-500 hover:bg-green-400 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
              Meet the Crew
            </a>
          </div>
          <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
            <a href="/case-studies" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-gray-400 bg-black-300 hover:text-gray-300 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
              Start a Mission
            </a>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
<div class="bg-black-500">
  <div class="relative max-w-screen-xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-3xl leading-9 font-display font-extrabold text-white">All-in-one platform</h2>
      <p class="mt-4 text-lg leading-7 font-display text-white-600">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla nec.</p>
    </div>
    <dl class="mt-12 space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:col-gap-6 sm:row-gap-12 lg:grid-cols-4 lg:col-gap-8">
      <div class="flex space-x-3">
        <!-- Heroicon name: check -->
        <svg class="flex-shrink-0 h-6 w-6 text-green-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <div class="space-y-2">
          <dt class="text-lg leading-6 font-medium text-white">Invite team members</dt>
          <dd class="flex space-x-3 lg:py-0 lg:pb-4">
            <span class="text-base leading-6 text-white-600">Tempor tellus in aliquet eu et sit nulla tellus. Suspendisse est, molestie blandit quis ac. Lacus.</span>
          </dd>
        </div>
      </div>
      <div class="flex space-x-3">
        <!-- Heroicon name: check -->
        <svg class="flex-shrink-0 h-6 w-6 text-green-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <div class="space-y-2">
          <dt class="text-lg leading-6 font-medium text-white">Notifications</dt>
          <dd class="flex space-x-3">
            <span class="text-base leading-6 text-white-600">Ornare donec rhoncus vitae nisl velit, neque, mauris dictum duis. Nibh urna non parturient.</span>
          </dd>
        </div>
      </div>
      <div class="flex space-x-3">
        <!-- Heroicon name: check -->
        <svg class="flex-shrink-0 h-6 w-6 text-green-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <div class="space-y-2">
          <dt class="text-lg leading-6 font-medium text-white">List view</dt>
          <dd class="flex space-x-3">
            <span class="text-base leading-6 text-white-600">Etiam cras augue ornare pretium sit malesuada morbi orci, venenatis. Dictum lacus.</span>
          </dd>
        </div>
      </div>
      <div class="flex space-x-3">
        <!-- Heroicon name: check -->
        <svg class="flex-shrink-0 h-6 w-6 text-green-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <div class="space-y-2">
          <dt class="text-lg leading-6 font-medium text-white">Boards</dt>
          <dd class="flex space-x-3">
            <span class="text-base leading-6 text-white-600">Interdum quam pulvinar turpis tortor, egestas quis diam amet, natoque. Mauris sagittis.</span>
          </dd>
        </div>
      </div>
      <div class="flex space-x-3">
        <!-- Heroicon name: check -->
        <svg class="flex-shrink-0 h-6 w-6 text-green-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <div class="space-y-2">
          <dt class="text-lg leading-6 font-medium text-white">Keyboard shortcuts</dt>
          <dd class="flex space-x-3">
            <span class="text-base leading-6 text-white-600">Ullamcorper in ipsum ac feugiat. Senectus at aliquam vulputate mollis nec. In at risus odio.</span>
          </dd>
        </div>
      </div>
      <div class="flex space-x-3">
        <!-- Heroicon name: check -->
        <svg class="flex-shrink-0 h-6 w-6 text-green-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <div class="space-y-2">
          <dt class="text-lg leading-6 font-medium text-white">Reporting</dt>
          <dd class="flex space-x-3 lg:border-t-0 lg:py-0 lg:pb-4">
            <span class="text-base leading-6 text-white-600">Magna a vel sagittis aliquam eu amet. Et lorem auctor quam nunc odio. Sed bibendum.</span>
          </dd>
        </div>
      </div>
      <div class="flex space-x-3">
        <!-- Heroicon name: check -->
        <svg class="flex-shrink-0 h-6 w-6 text-green-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <div class="space-y-2">
          <dt class="text-lg leading-6 font-medium text-white">Calendars</dt>
          <dd class="flex space-x-3">
            <span class="text-base leading-6 text-white-600">Sed mi, dapibus turpis orci posuere integer. A porta viverra posuere adipiscing turpis.</span>
          </dd>
        </div>
      </div>
      <div class="flex space-x-3">
        <!-- Heroicon name: check -->
        <svg class="flex-shrink-0 h-6 w-6 text-green-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <div class="space-y-2">
          <dt class="text-lg leading-6 font-medium text-white">Mobile app</dt>
          <dd class="flex space-x-3">
            <span class="text-base leading-6 text-white-600">Quisque sapien nunc nisl eros. Facilisis sagittis maecenas id dignissim tristique proin sed.</span>
          </dd>
        </div>
      </div>
    </dl>
  </div>
</div>
<x-cta.case-studies :projects="$projects" />
@endsection
