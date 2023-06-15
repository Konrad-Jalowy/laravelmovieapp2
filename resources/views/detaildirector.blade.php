@extends('layouts.app')
@section('content')
<p>detail director view</p>

<p><strong>Name:</strong>{{ $director->name }}</p>
<p><strong>Date of birth: </strong>{{ $director->date_of_birth }}</p>
<p><strong>Bio:</strong> {{$director->bio}}</p>
<h3>Movies:</h3>
@foreach ($director->movies as $movie)
    <p><strong>Title:</strong>{{ $movie->title }}</p>
    <button>View more</button>
@endforeach
@endsection