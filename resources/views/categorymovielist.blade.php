@extends('layouts.app')
@section('content')
<h1>Movie category list</h1>
@foreach ($movies as $movie)
    <p><strong>Title:</strong>{{ $movie->title }}</p>
    <button>View more</button>
@endforeach
@endsections