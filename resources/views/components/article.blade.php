<div>
<p><strong>Title:</strong>{{ $title }}</p>
    <p><strong>Author: </strong>{{ $author }}</p>
    <p><strong>Lead:</strong> {{$lead}}</p>
    <p><strong>Content:</strong>{{ $content }}</p>
    <p><strong>Published: </strong> {{ Carbon\Carbon::parse($publishDate)->diffForHumans()}}</p>
    <p><strong>Views: </strong> {{$viewsCount}}</p>
</div>