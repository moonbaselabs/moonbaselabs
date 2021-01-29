@extends('_layouts.base')

@section('content')
<div class="relative overflow-hidden">
  <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
    <div class="relative h-full text-lg max-w-prose mx-auto">
      <x-star-dust class="absolute top-0 right-full transform -translate-x-32" />
      <x-star-dust class="absolute bottom-0 left-full transform" />
    </div>
  </div>
  <div class="relative w-screen h-screen flex justify-center items-center">
    <div class="text-center">
      <h1 class="text-3xl font-display font-bold text-white sm:text-4xl">Lost in space?</h1>
      <p class="text-xl text-silver-500">Don't worry, our mission control team already has a recovery plan!</p>
      <x-button href="/" color="green" class="mt-6">
        Return Home
      </x-button>
    </div>
  </div>
</div>
@endsection
