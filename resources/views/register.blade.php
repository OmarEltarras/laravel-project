@extends('layout.main')
@section('title','Register-Page')

@section('content')
<div class="container mt-4 p-4 ">
   
  @if ($errors->any())
  <div class="alert alert-danger ">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
  @if(session()->has('message'))
    <div class="alert alert-success">
      {{session('message')}}
    </div>
  @endif
  @if(session()->has('error'))
    <div class="alert alert-danger">
      {{session('error')}}
    </div>
  @endif
    <form class="ms-auto me-auto " style="width: 400px" method="POST" action="{{route('register.post')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="exampleInputName1" name="name">
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-success">Register</button>
      </form>
</div>


@endsection