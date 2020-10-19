<?php

use Illuminate\Support\Str;

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
            'path' => '/blog/tags/{filename}',
            'posts' => function ($page, $posts) {
                return $posts->filter(function ($post) use ($page) {
                    return $post->tags ? in_array($page->getFilename(), $post->tags, true) : false;
                });
            },
        ],
        'projects' => [
            'sort' => '-date',
            'path' => '/case-studies/{filename}',
        ],
        'services' => [
            'path' => '/case-studies/services/{filename}',
            'projects' => function ($page, $projects) {
                return $projects->filter(function ($project) use ($page) {
                    return $project->services ? in_array($page->getFilename(), $project->services, true) : false;
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
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
];
