<x-app-layout>
    <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 font">
  Brand edit
    </h2>
    </x-slot>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong> {{ session('success')}}</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif

    <div class="py-12">
    <div class="container">
    <div class="row">

      

    
    <div class="col-md-8">
    <div class="card">
    <div class="card-header">Edit brand </div>
    
    <div class="card-body">
    
    
    <form action="{{ url('brand/update/'.$brands->id)}}" method="POST" enctype="multipart/form-data" >
    @csrf
    <input type="hidden" name="old_image" value="{{ $brands->brand_image }}">
    <div class="form-group">
 
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Update brand name </label>
    
        <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
        value="{{ $brands->brand_name}}">
    
    @error('brand_name')
    <span class="text-danger"> {{$message}}</span>
    @enderror
</div>
      </div>
      <div class="form-group">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Update brand image </label>
          <input type="file" name="brand_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
          value="{{ $brands->brand_image}}">
      @error('brand_image')
      <span class="text-danger"> {{$message}}</span>
      @enderror
  </div>
        </div>
        <div class="form-group">
            <img src="{{asset($brands->brand_image) }}" width="400px" height="100px" alt="">

        </div>
        <button type="submit" class="btn btn-primary">Update brand</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </x-app-layout>
    