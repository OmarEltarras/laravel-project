@extends('layout.main')
@section('title','Index-Page')
    
@section('content')
<div class="text-center mt-3">
    <a href="{{route('jobs.create')}}" class="btn btn-success">Create Job</a>
</div>
@foreach ($jobs as $job)
    
    <div class="card my-3 mx-5">
        <h5 class="card-header">Job info</h5>
        <div class="card-body">
        <h5 class="card-title">Title : <span class="fw-normal">{{$job->title}}</span></h5>
        <h5 class="card-title">Description : <span class="fw-normal">{{$job->description}}</span></h5>
        <a href="{{route('jobs.show',$job->id)}}" class="btn btn-primary">More info</a>
        </div>
    </div>
@endforeach

@endsection