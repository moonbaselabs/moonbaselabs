@props(['href', 'page'])

<a href="{{ $href }}" class="text-base {{ $page->isActive($href) ? 'text-gold-300 hover:text-gold-500' : 'text-gray-300 hover:text-white' }}">
  {{ $slot }}
</a>
