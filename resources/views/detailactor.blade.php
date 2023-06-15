@extends('layouts.app')
@section('content')
<p>detail view</p>

<p><strong>Name:</strong>{{ $actor->name }}</p>
<p><strong>Date of birth: </strong>{{ $actor->date_of_birth }}</p>
<p><strong>Bio:</strong> {{$actor->bio}}</p>
<a href="{{route('actor.edit', $actor->id)}}"><button>Edit</button></a>
@endsection