@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('movie.store') }}">
        @csrf
        <p>Title</p>
        <input type="text" name="title" id="title">
        <br>
        <p>Category</p>
        <select name="category" id="category">
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <br>
        <p>Grade:</p>
        <select name="grade" id="grade">
            @for ($i = 1; $i < 11; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        <br>
        <p>Director</p>
        <select name="director" id="director">
            @foreach ($directors as $director)
            <option value="{{$director->id}}">{{$director->name}}</option>
            @endforeach
        </select>
        <br>
        <p>Date of publishing</p>
        <br>
        <input type="date" name="date_of_publishing" id="date_of_publishing">
        <br>
        <p>Movie length</p>
        <br>
        <input type="number" name="movie_length" id="movie_length">
        <br>
        <p>Review:</p>
        <textarea name="review" id="review" cols="30" rows="10"></textarea>
        <br>
        
        <input type="submit" value="Submit">
    </form>
@endsection