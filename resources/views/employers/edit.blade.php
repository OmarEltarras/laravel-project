@extends('layout.main')
@section('title','Create-Page')
    
@section('content')

<form method="POST" action="{{route('employers.update',$employer->id)}}" class="m-5">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{$employer->name}}">
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$employer->email}}">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <div class="mb-3">
        <label for="exampleInputAge1" class="form-label">Age</label>
        <input type="number" class="form-control" id="exampleInputAge1" name="age" value="{{$employer->age}}">
      </div>
    <div class="mb-3">
        <label for="exampleInputExp1" class="form-label">Experience Years</label>
        <input type="number" class="form-control" id="exampleInputExp1" name="experience" value="{{$employer->experience}}">
      </div>
    <div class="mb-3">
        <label for="exampleInputAddress1" class="form-label">Address</label>
        <input type="text" class="form-control" id="exampleInputAddress1" name="address" value="{{$employer->address}}">
      </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="bio">{{$employer->bio}}</textarea>
        <label for="floatingTextarea">Bio</label>
      </div>
    <div class="mb-3">
      <label for="exampleInputSelect1" class="form-label">Gender</label>
      <select class="form-select" aria-label="Default select example" id="exampleInputSelect1" name="gender">
        <option value="male" selected>Male</option>
        <option value="female">Female</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
    
@endsection