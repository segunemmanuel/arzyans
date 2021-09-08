<x-app-layout>
<x-slot name="header">
<h2 class="text-xl font-semibold leading-tight text-gray-800 font">
All category
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
<div class="card-header">Edit category </div>

<div class="card-body">


<form action="{{ url('category/update/'.$categories->id)}}" method="POST" >
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Update category name </label>

    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    value="{{ $categories->category_name}}">

@error('category_name')
<span class="text-danger"> {{$message}}</span>
@enderror


  </div>
    <button type="submit" class="btn btn-primary">Update category</button>
</form>
</div>


</div>
</div>


</div>









</div>













<!-- <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
<div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
<x-jet-welcome />
</div>
</div> -->
</div>
</x-app-layout>
