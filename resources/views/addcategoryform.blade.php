@extends('layouts.app')
@section('content')
<h3>Add category:</h3>
    <form action="{{ route('category.store') }}" method="POST">
            @csrf
                <p>Name:</p>
                <input type="text" name="name" id="name">
                <br>
                <input type="submit" value="Submit">
    </form>
@endsection