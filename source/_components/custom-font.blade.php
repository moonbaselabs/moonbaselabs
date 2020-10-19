@props(['src'])

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="preload" as="style" href="{{ $src }}" />
<link rel="stylesheet" href="{{ $src }}" media="print" onload="this.media='all'" />
<noscript><link rel="stylesheet" href="{{ $src }}" /></noscript>
