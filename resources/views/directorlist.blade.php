@extends('layouts.app')
@section('content')
    <h1>Menu</h1>
    
    <a href="{{route('welcome')}}"><button>Home</button></a>
    <a href="{{route('director.add')}}"><button>Add new</button></a>
<h3>Director list</h3>
@each('layouts.partials.listeddirector', $directors , 'director' )
@endsection