
@extends('admin.admin_master')

@section('admin')

   
  <div class="py-12">
  <div class="container">
  <div class="row">


    <h2>Home slider</h2>
    <br>
    <a href="{{route('add.slider')}}"> <button class="btn btn-info">Add slider</button></a>
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
  All slider
  </div>
  
  <table class="table">
  <thead>
  <tr>
  <th scope="col" width="5%">S/N</th>
  <th scope="col" width="15%">Slider Title</th>
  <th scope="col" width="35%">Slider desc</th>
  <th scope="col" width="15%">Slider Image</th>
  <th scope="col"width="15%">Action</th>
  
  </tr> 
  </thead>
  <tbody>
  @php ($i=1)
  
  @foreach($sliders as $slider)
  <tr>
    <!-- To make the pagination align correctyly -->
    <th scope ="row"> {{ $i++}}</th>
  <td>{{ $slider->title }}</td>
  <td>{{$slider->desc}}</td>
  <td><img src="{{asset($slider->image)}}" width="90px" height="60px" alt=""></td>

  <td><a href="{{url('slider/edit/'.$slider->id)}}" class="btn btn-info">Edit</a> 
  <a href="{{url('slider/delete/'.$slider->id)}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
  
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