@extends('layout.main')
@section('title','Show-Page')

@section('content')
<div class="card my-3 mx-5">
    <h5 class="card-header">Job info</h5>
    <div class="card-body">
    <h5 class="card-title">Title : <span class="fw-normal">{{$job->title}}</span></h5>
    <h5 class="card-title">Description : <span class="fw-normal">{{$job->description}}</span></h5>
    <h5 class="card-title">Responsibilities : <span class="fw-normal">{{$job->responsibility}}</span></h5>
    <h5 class="card-title">Requirements : <span class="fw-normal">{{$job->requirement}}</span></h5>
    <h5 class="card-title">Salary Range : <span class="fw-normal">{{$job->salary}}</span></h5>
    <h5 class="card-title">Benefits : <span class="fw-normal">{{$job->benefits}}</span></h5>
    <h5 class="card-title">Location : <span class="fw-normal">{{$job->location}}</span></h5>
    <h5 class="card-title">Work Type : <span class="fw-normal">{{$job->worktype}}</span></h5>
    <h5 class="card-title">Created-At : <span class="fw-normal">{{$job->created_at}}</span></h5>
    <h5 class="card-title">Updated-At : <span class="fw-normal">{{$job->updated_at}}</span></h5>
    </div>
</div>
<div class="card my-3 mx-5">
    <h5 class="card-header">Job Creator Info</h5>
    <div class="card-body">
    <h5 class="card-title">Name : <span class="fw-normal">{{$employer->name}}</span></h5>
    <h5 class="card-title">Email : <span class="fw-normal">{{$employer->email}}</span></h5>
    <h5 class="card-title">Age : <span class="fw-normal">{{$employer->age}}</span></h5>
    <h5 class="card-title">Bio : <span class="fw-normal">{{$employer->bio}}</span></h5>
    <h5 class="card-title">Years Of Experience: <span class="fw-normal">{{$employer->experience}}</span></h5>
    <h5 class="card-title">Address : <span class="fw-normal">{{$employer->address}}</span></h5>
    </div>
</div>
<div class="mx-5 text-center">
    <a href="" class="btn btn-success">Apply</a>
    <a href="{{route('jobs.edit',$job->id)}}" class="btn btn-info">Edit</a>
    <form style="display:inline-block" method="POST" action="{{route('jobs.destroy',$job->id)}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{route('jobs.index')}}" class="btn btn-dark">Back</a>
</div>
@endsection