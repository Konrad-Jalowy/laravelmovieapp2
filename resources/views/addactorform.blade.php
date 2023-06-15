@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('actor.store') }}">
        @csrf
        <x-label-text name="name" label="Name:"></x-label-text>
        <br>
        <x-label-date name="date_of_birth" label="Date of birth:"></x-label-date>
        <br>
        <x-label-textarea name="bio" label="Bio:"></x-label-textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
@endsection