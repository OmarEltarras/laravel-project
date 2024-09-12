@extends('layout.main')
@section('title','Create-Page')
    
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{route('jobs.store')}}" class="my-3 mx-5">
    @csrf
    <div class="mb-3">
      <label for="exampleInputTitle1" class="form-label">Title</label>
      <input type="text" class="form-control" id="exampleInputTitle1" name="title" autofocus>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea1" name="description"></textarea>
        <label for="floatingTextarea1">Description</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea4" name="responsibility"></textarea>
        <label for="floatingTextarea4">Responsibilities</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="requirement"></textarea>
        <label for="floatingTextarea2">Requirements</label>
    </div>
    <div class="mb-3">
        <label for="exampleInputSalary1" class="form-label">Salary Range</label>
        <input type="text" class="form-control" id="exampleInputSalary1" name="salary">
      </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea3" name="benefit"></textarea>
        <label for="floatingTextarea3">Benefits</label>
    </div>
    <div class="mb-3">
        <label for="exampleInputLocation1" class="form-label">Location</label>
        <input type="text" class="form-control" id="exampleInputLocation1" name="location">
      </div>
      <div class="mb-3">
        <label for="exampleInputWork1" class="form-label">Work Type</label>
        <input type="text" class="form-control" id="exampleInputWork1" name="worktype">
      </div>
    <label for="selectBox">Posted By</label>
    <select class="form-select mb-3 mt-2" aria-label="Default select example" id="selectBox" name="employer_id">
        {{-- <option selected>Open this select menu</option> --}}
        @foreach ($employers as $employer)
            <option value="{{$employer->id}}">{{$employer->name}}</option>
        @endforeach
      </select>
    
    <button type="submit" class="btn btn-success">Create</button>
  </form>
@endsection