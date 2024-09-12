@extends('layout.main')
@section('title','Home-Page')
    
@section('content')
<div class="text-center m-3">
    <h1>Welcome to home page</h1>
    @auth
        <h1>Hello : {{auth()->user()->name}}</h1>
        {{-- {{auth()->user()}} --}}
    @endauth
</div>
@endsection