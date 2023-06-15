@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('director.editStore', $director->id) }}">
        @csrf
        <p>Name</p>
        <input type="text" name="name" id="name" value="{{$director->name}}">
        <br>
        <p>Date of birth</p>
        <br>
        <input type="date" name="date_of_birth" id="date_of_birth" value="{{$director->date_of_birth}}">
        <br>
        <p>Bio:</p>
        <textarea name="bio" id="bio" cols="30" rows="10">{{$director->bio}}</textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
@endsection