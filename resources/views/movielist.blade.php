@extends('layouts.app')
@section('content')
    <h1>Menu:</h1>
    <a href="{{route('movie.add')}}"><button>Add movie</button></a>
    <a href="{{route('movie.best')}}"><button>Best movies</button></a>
    <a href="{{ route('categorylist') }}"><button>Categories</button></a>
<h3>Movie list</h3>
@foreach ($movies as $movie)
    <p><strong>Title:</strong>{{ $movie->title }} <a href="{{route('movie.detail', $movie->id)}}"><button>Details</button></a></p>
    
@endforeach
@endsection