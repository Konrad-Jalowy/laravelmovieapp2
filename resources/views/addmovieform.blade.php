@extends('layouts.app')
@section('content')
<div class="container">
<form method="POST" action="{{ route('movie.store') }}" >
        @csrf
        <label for="title" class="form-label">Title</label>
        <input class="form-control" type="text" name="title" id="title">
        <br>
        <p>Category</p>
        <select name="category" id="category" class="form-select">
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <br>
        <p>Grade:</p>
        <select name="grade" id="grade" class="form-select">
            @for ($i = 1; $i < 11; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        <br>
        <label for="director" class="form-control">Director</label>
        <select name="director" id="director" class="form-select">
            @foreach ($directors as $director)
            <option value="{{$director->id}}">{{$director->name}}</option>
            @endforeach
        </select>
        <br>
        <p>Date of publishing</p>
        <br>
        <input class="form-control" type="date" name="date_of_publishing" id="date_of_publishing">
        <br>
        <label for="movie_length" class="form-control">Movie length:</label>
        <br>
        <input class="form-control" type="number" name="movie_length" id="movie_length">
        <br>
        <p>Review:</p>
        <textarea class="form-control" name="review" id="review" cols="30" rows="10"></textarea>
        <br>
        
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
    </div>
@endsection