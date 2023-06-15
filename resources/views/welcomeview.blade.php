@extends('layouts.app')
@section('content')
    <h1>Menu:</h1>
    <a href="{{ route('movielist')}}"><button>Movies</button></a>
    <a href="{{ route('articlelist') }}"><button>Articles</button></a>
    <a href="{{ route('directorlist') }}"><button>Directors</button></a>
    <a href="{{ route('categorylist') }}"><button>Categories</button></a>
    <a href="{{ route('actorlist') }}"><button>Actors</button></a>
@endsection