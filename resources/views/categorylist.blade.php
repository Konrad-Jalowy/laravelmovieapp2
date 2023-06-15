@extends('layouts.app')
@section('content')
<h1>Menu:</h1>
<a href="{{ route('category.add') }}"><button>Add new</button></a>
<h2>Category list</h2>
@foreach ($categories as $category)
    <p><strong>Name:</strong>{{ $category->name }} <a href="{{ route('category.movies', $category->id) }}"><button>Movies</button></a></p>
@endforeach
@endsection