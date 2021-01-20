@extends('_layouts.base')

@section('content')
<div class="relative overflow-hidden">
  <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
    <div class="relative h-full text-lg max-w-prose mx-auto">
      <x-star-dust class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" />
      <x-star-dust class="absolute bottom-0 left-full transform" />
    </div>
  </div>
  <div class="relative w-screen h-screen flex justify-center items-center">
    <div class="text-center">
      <h1 class="text-3xl leading-9 font-display font-extrabold text-white sm:text-4xl">Lost in space?</h1>
      <p class="text-xl leading-7 text-sliver-500">Don't worry, our mission control team already has a recovery plan!</p>
      <a href="/" class="mt-6 inline-flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-green-500 hover:bg-green-400 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
        Return Home
      </a>
    </div>
  </div>
</div>
@endsection
