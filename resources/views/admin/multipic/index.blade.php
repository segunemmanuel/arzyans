<x-app-layout>
    <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 font">
 Multiple picture
    </h2>
    </x-slot>
    <div class="py-12">
    <div class="container">
    <div class="row">
    
    <div class="col-md-8">
    <div class="card">
    <div class="card-header">
    </div>
    </div>
    </div>
    
    <div class="col-md-4">
    <div class="card">
    <div class="card-header"> Add images </div>
    <div class="card-body">
    
    <form action="{{ route('store.brand')}}" method="POST" enctype="multipart/form-data" >
    @csrf
      <div class="mb-3">

        <div class="form-group">
  
        <label for="exampleInputEmail1" class="form-label">Brand image </label>
        <input type="file" name="image" class="form-control" id="">
    
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
    