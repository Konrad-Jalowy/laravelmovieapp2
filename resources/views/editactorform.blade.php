@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('actor.editStore', $actor->id) }}">
        @csrf
        <x-label-text name="name" label="Name:">{{$actor->name}}</x-label-text>
        <br>
        <x-label-date name="date_of_birth" label="Date of birth:">{{$actor->date_of_birth}}</x-label-date>
        <br>
        <x-label-textarea name="bio" label="Bio:">{{$actor->bio}}</x-label-textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
@endsection