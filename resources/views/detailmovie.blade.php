@extends('layouts.app')
@section('content')
<h1>Menu:</h1>
    <a href="{{ route('movielist')}}"><button>Movies</button></a>
    <a href="{{ route('articlelist') }}"><button>Articles</button></a>
    <a href="{{ route('directorlist') }}"><button>Directors</button></a>
    <a href="{{ route('categorylist') }}"><button>Categories</button></a>
    <a href="{{ route('actorlist') }}"><button>Actors</button></a>

<p>detail movie view</p>

<p><strong>Title:</strong>{{ $movie->title }}</p>
<p><strong>Category:</strong>{{ $movie->category->name }}</p>
<p><strong>Date of publishing: </strong>{{ $movie->date_of_publishing }}</p>
<p><strong>Director:</strong> {{$movie->director->name}}</p>
<p><strong>Movie length:</strong> {{$movie->movie_length}}</p>
<p><strong>Review:</strong> {{$movie->review}}</p>
<p><strong>Grade:</strong> {{$movie->grade}}</p>
<a href="{{route('movie.edit', $movie->id)}}"><button>Edit</button></a>
<a href="#"><button>Delete</button></a>
@endsection