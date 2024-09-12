@extends('layout.main')
@section('title','Show-Page')
    
@section('content')
<div class="card m-4">
    <h5 class="card-header">Employer Info</h5>
    <div class="card-body">
      <h6 class="card-title">Name : <span class="fw-normal">{{$employer->name}}</span></h6>
      <h6>Email : <span class="fw-normal">{{$employer->email}}</span></h6>
      <h6>Bio : <span class="fw-normal">{{$employer->bio}}</span></h6>
      <h6>Age : <span class="fw-normal">{{$employer->age}}</span></h6>
      <h6>Years Of Experience : <span class="fw-normal">{{$employer->experience}}</span></h6>
      <h6>Address : <span class="fw-normal">{{$employer->address}}</span></h6>
      <h6>Gender : <span class="fw-normal">{{$employer->gender}}</span></h6>
    </div>
</div>
<div class="text-center">
    <a href="{{route('employers.index')}}" class="btn btn-dark">Back</a>
</div>
@endsection