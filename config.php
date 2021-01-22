<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Moonbase\Webmention;

return [
    'production' => false,
    'baseUrl' => 'http://moonbaselabs.test',
    'title' => 'Moonbase Labs',
    'description' => 'Custom digital solutions that drive efficiency, customer engagement, and business growth. We are fueled by the belief that technology innovation is attanable by any company. Services: Software Development, Digital Consulting, Rapid Prototyping, Experience Design, Data Analytics, and UI/UX Design.',
    'collections' => [
        'posts' => [
            'author' => 'Moonbase Labs', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => '/blog/{filename}',
        ],
        'tags' => [
            'path' => '/tags/{filename}',
            'posts' => function ($page, $posts) {
                return $posts->filter(function ($post) use ($page) {
                    return $post->tags ? in_array($page->getFilename(), $post->tags, true) : false;
                });
            },
        ],
        'case_studies' => [
            'sort' => '-date',
            'path' => '/case-studies/{filename}',
        ],
        'clients' => [
            'path' => '/clients/{filename}',
            'caseStudies' => function ($page, $caseStudies) {
                return $caseStudies->filter(function ($caseStudy) use ($page) {
                    return $caseStudy->client ? $page->title === $caseStudy->client : false;
                });
            },
        ],
        'industries' => [
            'path' => '/industries/{filename}',
            'caseStudies' => function ($page, $caseStudies) {
                return $caseStudies->filter(function ($caseStudy) use ($page) {
                    return $caseStudy->industry ? $page->title === $caseStudy->industry : false;
                });
            },
        ],
    ],
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'getExcerpt' => function ($page, $length = 255) {
        if ($page->description) {
            return $page->description;
        }

        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $cleaned;
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated).'...'
            : $cleaned;
    },
    'getAuthorAvatarUrl' => function ($page) {
        if ($page->author) {
            return '/assets/images/'.Str::slug($page->author).'.jpg';
        }

        return '/assets/images/moonbase-labs.jpg';
    },
    'getWebmentions' => function ($page) {
        $path = $page->getPath() ?: 'index';
        $path = 'webmentions'.$page->getPath().'.json';
        if (file_exists($path)) {
            return (new Collection(json_decode(file_get_contents($path), true)))
                ->map(fn ($entry) => new Webmention($entry));
        }

        return new Collection();
    },
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
];
