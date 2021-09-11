<x-app-layout>
    <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 font">
 Multiple picture
    </h2>
    </x-slot>




    
    <div class="py-12">
    <div class="container">
    <div class="row">
        @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong> {{ session('success')}}</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="col-md-8">
    <div class="card">
   

        <div class="card-group">
            @foreach($images as $image)
<div class="mt-5 col-md-4">
<div class="card">
<img src="{{asset($image->image)}}" alt="">
</div>
</div>

@endforeach

        </div>
    </div>
    </div>
    
    <div class="col-md-4">
    <div class="card">
    <div class="card-header"> Add images </div>
    <div class="card-body">
    
    <form action="{{ route('store.image')}}" method="POST" enctype="multipart/form-data" >
    @csrf
      <div class="mb-3">

        <div class="form-group">
  
        <label for="exampleInputEmail1" class="form-label">Multiple image </label>
        <input type="file" name="image[]" multiple="" class="form-control" id="">
     
    @error('image')
    <span class="text-danger"> {{$message}}</span>
    @enderror
</div>
    
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
    
    
    
    </x-app-layout>
    