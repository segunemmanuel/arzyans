<x-app-layout>
<x-slot name="header">
<h2 class="text-xl font-semibold leading-tight text-gray-800 font">
All category
</h2>
</x-slot>
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
All categories
</div>

<table class="table">
<thead>
<tr>
<th scope="col">S/N</th>
<th scope="col">Category Name</th>
<th scope="col">Username</th>
<th scope="col">Created at</th>
<th scope="col">Action</th>

</tr>
</thead>
<tbody>
  <!-- @php($i=1) -->


@foreach($categories as $category)
<tr>
  <!-- To make the pagination align correctyly -->
  <th scope ="row"> {{ $categories->firstItem()+ $loop->index}}</th>
<td>{{ $category->category_name }}</td>
<td>{{ $category->user->name }}</td>
<td>
@if($category->created_at==NULL)
<span class="text-danger">No date set </span>
@else
{{ Carbon\Carbon::parse($category->created_at)->diffForHumans() }}
@endif

</td>

<td><a href="{{ url('category/edit/' .$category->id )}}" class="btn btn-info">Edit</a> 
<a href="{{ url('category/softdelete/'.$category->id)}}" class="btn btn-danger">Delete</a>

</td>
 </tr>

@endforeach
</tbody>
</table>
{{ $categories->links()}}

</div>
</div>

<div class="col-md-4">
<div class="card">
<div class="card-header"> Add category </div>

<div class="card-body">

<form action="{{route('store.category')}}" method="POST" >
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category name </label>

    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

@error('category_name')
<span class="text-danger"> {{$message}}</span>
@enderror


  </div>
    <button type="submit" class="btn btn-primary">Add category</button>
</form>
</div>

</div>
</div>
</div>

</div>


<!-- 2nd container -->
<!-- trash part -->
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="card">


<!-- trash part -->
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="card">

<div class="card-header">
Trash list
</div>

<table class="table">
<thead>
<tr>
<th scope="col">S/N</th>
<th scope="col">Category Name</th>
<th scope="col">Username</th>
<th scope="col">Created at</th>
<th scope="col">Action</th>

</tr>
</thead>
<tbody>

@foreach($trashCat as $category)
<tr>
  <!-- To make the pagination align correctyly -->
  <th scope ="row"> {{ $categories->firstItem()+ $loop->index}}</th>
<td>{{ $category->category_name }}</td>
<td>{{ $category->user->name }}</td>
<td>
@if($category->created_at==NULL)
<span class="text-danger">No date set </span>
@else
{{ Carbon\Carbon::parse($category->created_at)->diffForHumans() }}
@endif

</td>

<td><a href="{{ url('category/restore/' .$category->id )}}" class="btn btn-info">Restore</a> 
<a href="{{ url('category/pdelete/' .$category->id )}}" class="btn btn-danger">P-Delete</a>

</td>
 </tr>

@endforeach
</tbody>
</table>
{{ $trashCat->links()}}

</div>
</div>

<div class="col-md-4">

</div>
</div>

</div>
<!-- end of trash -->
</div>
</div>



</x-app-layout>
