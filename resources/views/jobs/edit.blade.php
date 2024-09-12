@extends('layout.main')
@section('title','Create-Page')
    
@section('content')

<form method="POST" action="{{route('jobs.update',$job->id)}}" class="my-3 mx-5">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputTitle1" class="form-label">Title</label>
      <input type="text" class="form-control" id="exampleInputTitle1" name="title" value="{{$job->title}}">
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea1" name="description">{{$job->description}}</textarea>
        <label for="floatingTextarea1">Description</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea4" name="responsibility">{{$job->responsibility}}</textarea>
        <label for="floatingTextarea4">Responsibilities</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="requirement">{{$job->requirement}}</textarea>
        <label for="floatingTextarea2">Requirements</label>
    </div>
    <div class="mb-3">
        <label for="exampleInputSalary1" class="form-label">Salary Range</label>
        <input type="text" class="form-control" id="exampleInputSalary1" name="salary" value="{{$job->salary}}">
      </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea3" name="benefit">
            {{$job->benefits}}
        </textarea>
        <label for="floatingTextarea3">Benefits</label>
    </div>
    <div class="mb-3">
        <label for="exampleInputLocation1" class="form-label">Location</label>
        <input type="text" class="form-control" id="exampleInputLocation1" name="location" value="{{$job->location}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputWork1" class="form-label">Work Type</label>
        <input type="text" class="form-control" id="exampleInputWork1" name="worktype" value="{{$job->worktype}}">
      </div>
    <label for="selectBox">Posted By</label>
    <select class="form-select mb-3 mt-2" aria-label="Default select example" id="selectBox" name="employer_id">
        {{-- To display all employers and select between them --}}
        @foreach ($employers as $employer)
            {{-- if condition to display the old value --}}
            @if ($job->employer_id===$employer->id)
                
            <option value="{{$employer->id}}" selected >{{$employer->name}}</option>
            @else
            <option value="{{$employer->id}}" >{{$employer->name}}</option>
            @endif
        @endforeach
      </select>
    
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{route('jobs.show',$job->id)}}" class="btn btn-dark">Back</a>

  </form>
@endsection