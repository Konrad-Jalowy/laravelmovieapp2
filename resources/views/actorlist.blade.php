@extends('layouts.app')
@section('content')
    <h1>Menu</h1>
    <a href="{{route('actor.add')}}"><button>Add new</button></a>
<h3>Actor list</h3>
@each('layouts.partials.listedactor', $actors , 'actor' )
@endsection
