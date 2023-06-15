@extends('layouts.app')
@section('content')
    <h1>Menu</h1>
    <a href="{{route('articlelist')}}"><button>Home</button></a>
    <a href="{{route('article.add')}}"><button>Add article</button></a>
    <a href="{{route('article.byviews')}}"><button>By views</button></a>
    <a href="{{route('article.byanswers')}}"><button>By answers</button></a>
    
<h3>Article list</h3>
@each('layouts.partials.listeddelayedarticle', $articles , 'article' )
@endsection