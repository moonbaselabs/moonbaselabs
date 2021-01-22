@extends('_layouts.base')

@section('content')
<div class="relative -mb-6 bg-gradient-to-r from-onyx-500 overflow-hidden">
  <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full">
    <div class="relative h-full max-w-screen-xl mx-auto">
      <x-star-dust class="absolute right-full transform -translate-y-1/4 translate-x-1/2 lg:translate-y-1/3 lg:translate-x-1/2" />
      <x-star-dust class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/3 lg:-translate-x-1/2" />
    </div>
    <svg class="absolute top-0 left-0 w-full h-64 -mt-32 text-onyx-700 lg:-mt-24" fill="currentColor" preserveAspectRatio="false" xmlns="http://www.w3.org/2000/svg">
      <ellipse cx="50%" cy="25%" rx="58%" ry="75%"></ellipse>
    </svg>
    <svg class="hidden absolute bottom-0 left-0 w-full h-64 -mb-20 text-onyx-700 md:block" fill="currentColor" preserveAspectRatio="false" xmlns="http://www.w3.org/2000/svg">
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
              <a href="/" class="text-base {{ $page->isActive('/') ? 'text-gold-300 hover:text-gold-500' : 'text-gray-300 hover:text-white' }}">
                Home
              </a>
            </div>
            <div class="px-5 py-2">
              <a href="/about" class="text-base {{ $page->isActive('/about') ? 'text-gold-300 hover:text-gold-500' : 'text-gray-300 hover:text-white' }}">
                About
              </a>
            </div>
            <div class="px-5 py-2">
              <a href="/case-studies" class="text-base {{ $page->isActive('/case-studies') ? 'text-gold-300 hover:text-gold-500' : 'text-gray-300 hover:text-white' }}">
                Case Studies
              </a>
            </div>
            <div class="px-5 py-2">
              <a href="/blog" class="text-base {{ $page->isActive('/blog') ? 'text-gold-300 hover:text-gold-500' : 'text-gray-300 hover:text-white' }}">
                Blog
              </a>
            </div>
            <div class="px-5">
              <a href="/" class="flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-400 focus:outline-none focus:border-blue-700 focus:ring-blue-500">
                Schedule a Meeting
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 xl:mt-36">
      <div class="text-center">
        <h2 class="text-4xl tracking-tight leading-10 font-display font-extrabold text-white sm:text-5xl sm:leading-none md:text-6xl">
          We help non-profits
          <br class="xl:hidden">
          <span class="text-orange-500">do the impossible.</span>
        </h2>
        <p class="mt-3 max-w-md mx-auto text-base text-silver-600 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
          Increasing impact requires you to do more with less.
        </p>
        <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
          <div class="rounded-md shadow">
            <a href="/about" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-500 hover:bg-green-400 focus:outline-none focus:border-blue-700 focus:ring-blue-500 md:py-4 md:text-lg md:px-10">
              Meet the Crew
            </a>
          </div>
          <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
            <a href="/case-studies" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-400 bg-onyx-300 hover:text-gray-300 focus:outline-none focus:border-blue-300 focus:ring-blue-500 md:py-4 md:text-lg md:px-10">
              Start a Mission
            </a>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
<div class="relative bg-onyx-700 py-16 sm:py-24 lg:py-32">
  <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
    <h2 class="text-base font-semibold tracking-wider text-blue-300 uppercase">Deploy faster</h2>
    <p class="mt-2 text-3xl font-display font-extrabold text-gray-900 tracking-tight sm:text-4xl">
      Everything you need to deploy your app
    </p>
    <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">
      Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis nunc, ullamcorper malesuada. Eleifend condimentum id viverra nulla.
    </p>
    <div class="mt-12">
      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <div class="pt-6">
          <div class="flow-root bg-onyx-500 rounded-lg px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg">
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Flybys to discover</h3>
              <p class="mt-5 text-base text-gray-500">
                Every project starts with a flyby; a deep exploration of the challenges facing your organization.
              </p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root bg-onyx-500 rounded-lg px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg">
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Satellites to understand</h3>
              <p class="mt-5 text-base text-gray-500">
                Data analytics leads to a deeper understanding of your organization.
              </p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root bg-onyx-500 rounded-lg px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg">
                  <!-- Heroicon name: refresh -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Launches to innovate</h3>
              <p class="mt-5 text-base text-gray-500">
                Software prototypes increase your capacity to deliver impact.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<x-cta.case-studies :case-studies="$case_studies" />
<x-footer />
@endsection
