
@extends('admin.admin_master')

@section('admin')

   
  <div class="py-12">
  <div class="container">
  <div class="row">
  
  <div class="col-md-8">
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
  <th scope="col">S/N</th>
  <th scope="col">Slider Title</th>
  <th scope="col">Slider image</th>
  <th scope="col">Created at</th>
  <th scope="col">Action</th>
  
  </tr> 
  </thead>
  <tbody>
    <!-- @php($i=1) -->
  
  
  @foreach($brands as $brand)
  <tr>
    <!-- To make the pagination align correctyly -->
    <th scope ="row"> {{ $brands->firstItem()+ $loop->index}}</th>
  <td>{{ $brand->brand_name }}</td>
  <td><img src="{{asset($brand->brand_image)}}" width="90px" height="60px" alt=""></td>
  <td>
  @if($brand->created_at==NULL)
  <span class="text-danger">No date set </span>
  @else
  {{ Carbon\Carbon::parse($brand->created_at)->diffForHumans() }}
  @endif
  </td>
  <td><a href="{{url('brand/edit/'. $brand->id)}}" class="btn btn-info">Edit</a> 
  <a href="{{url('brand/delete/'.$brand->id)}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
  
  </td> 
   </tr>
  
  @endforeach
  </tbody>
  </table>

  <nav aria-label="Page navigation">
    {{ $brands->links()}}
  
  </nav>
  
  </div>
  </div>
  
  <div class="col-md-4">
  <div class="card">
  <div class="card-header"> Add brand </div>
  
  <div class="card-body">
  
  <form action="{{ route('store.brand')}}" method="POST" enctype="multipart/form-data" >
  @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Brand name </label>
  
      <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      @error('brand_name')
      <span class="text-danger"> {{$message}}</span>
      @enderror

      <label for="exampleInputEmail1" class="form-label">Brand image </label>
      <input type="file" name="brand_image" class="form-control" id="">
  
  @error('brand_image')
  <span class="text-danger"> {{$message}}</span>
  @enderror
  
  
    </div>
      <button type="submit" class="btn btn-primary">Add brand</button>
  </form>
  </div>
  
  </div>
  </div>
  </div>
  
  </div>
  
  
  <!-- 2nd container -->
  
  
    <!-- end of trash -->
  </div>
  
  
@endsection