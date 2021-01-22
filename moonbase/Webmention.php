<?php

namespace Moonbase;

use Illuminate\Support\Carbon;

class Webmention
{
    public $author;
    public $url;
    public $verb;
    public $date;
    public $text;

    public function __construct($data)
    {
        $verbs = [
            'in-reply-to' => 'replied',
            'like-of' => 'liked',
            'repost-of' => 'retweeted',
            'bookmark-of' => 'bookmarked',
            'mention-of' => 'mentioned',
            'rsvp' => 'RSVPed',
            'follow-of' => 'followed',
        ];
        $this->author = (object) $data['author'];
        $this->url = $data['url'];
        $this->verb = $verbs[$data['wm-property']] ?? null;
        $this->date = new Carbon($data['published'] ?? $data['wm-received']);
        $this->text = array_key_exists('content', $data) ? $data['content']['text'] : null;
    }

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }
}
