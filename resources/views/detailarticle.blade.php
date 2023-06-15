@extends('layouts.app')
@section('content')
@if(session('message'))
<p><strong>{{ session('message') }}</strong></p>
@else
@endif
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">API Link</strong>
    <small>JSON format</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    View this article in our API: <a href="{{route('api.detail.article', $article->id)}}" class="link-primary">Click here</a>
  </div>
</div>
    <div class="card text-center">
            <div class="card-header">
            Author: {{ $article->author }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text"><strong>{{$article->lead}}</strong></p>
                <p class="card-text">{{ $article->content }}</p>
                <p class="card-text"><small>Published: {{$article->created_at->diffForHumans()}}</small></p>
                <a href="{{route('article.edit-form', $article->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('article.comment', $article->id)}}" class="btn btn-primary">Add comment</a>
            </div>
            <div class="card-footer text-body-secondary">
                Views: {{$article->viewsCount}} Answers: {{$article->answersCount}}
            </div>
            </div>
    @if($article->answersCount == 0)
        <p>There is no answers to this article!</p>
    @else
    <h3>Answers:</h3>
    @endif
        @foreach ($article->answers as $answer)
                @yourAnswer($answer)
                <x-answer author="You" content="{{$answer->content}}" id1="{{$article->id}}" id2="{{$answer->id}}"></x-answer>
                @else
                <x-answer author="{{$answer->author}}" content="{{$answer->content}}" id1="{{$article->id}}" id2="{{$answer->id}}" ></x-answer>
                @endyourAnswer 
        @endforeach
@endsection

<script>
    
    function defer(method) {
    if (window.jQuery) {
        method();
    } else {
        setTimeout(function() { defer(method) }, 50);
    }
}

defer(function () {
  console.log('hello');
  $('.toast').toast('show');
});
    
</script>