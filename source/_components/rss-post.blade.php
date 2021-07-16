@props(['post'])

<entry>
  <id>{{ $post->getUrl() }}</id>
  <link type="text/html" rel="alternate" href="{{ $post->getUrl() }}" />
  <title>{{ $post->title }}</title>
  <published>{{ date(DATE_ATOM, $post->date) }}</published>
  <updated>{{ date(DATE_ATOM, $post->date) }}</updated>
  <author>
    <name>{{ $post->author }}</name>
  </author>
  <summary type="html">{{ $post->getExcerpt() }}...</summary>
  <content type="html"><![CDATA[
    @includeFirst(['_posts.' . $post->getFilename(), '_posts.cache.' . $post->getFilename()])
  ]]></content>
</entry>
