<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="bg-onyx-700 text-white">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title ? $page->title.' | ' : '' }}{{ $page->siteName }}</title>
        <link rel="icon" href="/favicon.svg">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ $page->title ? $page->title.' | ' : '' }}{{ $page->siteName }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description }}" />
        <meta property="og:image" content="https://moonbaselabs.com/assets/images/social.png">
        <meta property="og:image:width" content="512">
        <meta property="og:image:height" content="512">
        <meta name="twitter:site" content="@MoonbaseLabs">
        @if($page->production)
        <script src="https://beaver.moonbaselabs.com/script.js" data-site="CBMOAZJT" defer></script>
        @endif
        <link rel="webmention" href="https://webmention.io/moonbaselabs.com/webmention" />
        <link rel="pingback" href="https://webmention.io/moonbaselabs.com/xmlrpc" />
        <link rel="preload" href="/assets/fonts/archivo/archivo-v7-latin-700.woff2" as="font" type="font/woff2" crossorigin="anonymous">
        <link rel="preload" href="/assets/fonts/barlow/barlow-v5-latin-regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
        <link rel="preload" href="/assets/fonts/barlow/barlow-v5-latin-500.woff2" as="font" type="font/woff2" crossorigin="anonymous">
        <link rel="preload" href="/assets/fonts/barlow/barlow-v5-latin-600.woff2" as="font" type="font/woff2" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    </head>
    <body>
      @yield('content')
    </body>
</html>
