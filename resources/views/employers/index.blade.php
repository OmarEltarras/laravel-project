@extends('layout.main')
@section('title','Index-Page')
    
@section('content')
<div class="m-3 text-center">
    <a class="btn btn-success" href="{{route("employers.create")}}">Create Employer</a>
</div>
<table class="table">
    <thead class="table-dark">
      <tr >
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Bio</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody class="table-secondary">
      @foreach ($employers as $employer)
          <tr>
            <th>{{$employer->id}}</th>
            <td>{{$employer->name}}</td>
            <td>{{$employer->email}}</td>
            <td>{{$employer->bio}}</td>
            <td>
                <a href="{{route('employers.show',$employer->id)}}" class="btn btn-info">View</a>
                <a href="{{route('employers.edit',$employer->id)}}" class="btn btn-primary">Edit</a>
                <form style="display: inline-block" method="POST" action="{{route('employers.destroy',$employer->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection