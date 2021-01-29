<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="bg-onyx-700 text-white">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="icon" href="/favicon.svg">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <meta property="og:title" content="{{ $page->title }}" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description }}" />
        <meta property="og:image" content="assets/images/social.png">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@moonbaselabs">
        <meta name="twitter:image" content="/assets/images/social.png">
        <meta name="twitter:image:alt" content="Moonbase Labs logo">
        <script src="https://beaver.moonbaselabs.com/script.js" data-site="CBMOAZJT" defer></script>
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
