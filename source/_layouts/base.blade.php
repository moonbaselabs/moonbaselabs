<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="bg-onyx-700 text-white">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <meta property="og:title" content="{{ $page->title }}" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description }}" />
        <meta property="og:image" content="assets/images/social.png">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@moonbaselabs">
        <meta name="twitter:image" content="/assets/images/social.png">
        <meta name="twitter:image:alt" content="Moonbase Labs logo">
        <link rel="webmention" href="https://webmention.io/www.moonbaselabs.com/webmention" />
        <link rel="pingback" href="https://webmention.io/www.moonbaselabs.com/xmlrpc" />
        <x-custom-font src="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&family=Barlow:wght@400;500;600;700&display=swap" />
        <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    </head>
    <body>
      @yield('content')
    </body>
</html>
