@props([
  'href',
  'color' => 'onyx'
])

@php
$class = 'inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2';
switch($color) {
  case 'green':
  $class .= ' '.'text-white bg-green-500 hover:bg-green-400 focus:ring-green-500';
  break;
  case 'onyx':
  $class .= ' '.'text-white bg-onyx-300 hover:bg-onyx-400 focus:ring-blue-500';
  break;
  case 'blue':
  $class .= ' '.'text-white bg-blue-700 hover:bg-blue-800 focus:ring-blue-500';
  break;
  case 'white':
  $class .= ' '.'text-blue-800 bg-white hover:bg-gray-50 focus:ring-blue-500';
  break;
}
@endphp

@isset($href)
  <a href="{{ $href }}" {{ $attributes->merge(['class' => $class]) }}>{{ $slot }}</a>
@else
  <button {{ $attributes->merge(['type' => 'submit', 'class' => $class]) }}>
    {{ $slot }}
  </button>
@endif
