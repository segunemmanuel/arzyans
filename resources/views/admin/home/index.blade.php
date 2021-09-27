
@extends('admin.admin_master')

@section('admin')

   
  <div class="py-12">
  <div class="container">
  <div class="row">


    <h2>Home slider</h2>
    <br>
    <a href="{{route('add.about')}}"> <button class="btn btn-info">All about data</button></a>
  <br>


  <div class="col-md-12">
  <div class="card">
  @if(session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong> {{ session('success')}}</strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
  
  
  <div class="card-header">
About
  </div>
  
  <table class="table">
  <thead>
  <tr>
  <th scope="col" width="5%">S/N</th>
  <th scope="col" width="15%">Home title</th>
  <th scope="col" width="35%">Short desc</th>
  <th scope="col" width="15%">Long desc</th>
  <th scope="col"width="15%">Action</th>
  
  </tr> 
  </thead>
  <tbody>
  @php ($i=1)
  
  @foreach($homeabout as $about)
  <tr>
    <!-- To make the pagination align correctyly -->
    <th scope ="row"> {{ $i++}}</th>
  <td>{{ $about->title }}</td>
  <td>{{$about->short_desc}}</td>
  <td>{{$about->long_desc}}</td>


  <td><a href="{{url('about/edit/'.$about->id)}}" class="btn btn-info">Edit</a> 
  <a href="{{url('about/delete/'.$about->id)}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
  
  </td> 
   </tr>
  
  @endforeach
  </tbody>
  </table>

  
  </div>
  </div>
  

  </div>
  
  </div>
  
  
  <!-- 2nd container -->
  
  
    <!-- end of trash -->
  </div>
  
  
@endsection