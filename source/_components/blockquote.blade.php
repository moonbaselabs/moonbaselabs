@props(['credit'])

<figure>
  <blockquote>
    {{ $slot }}
  </blockquote>
  <figcaption>{{ $credit }}</figcaption>
</figure>
