<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <!-- {{ __('Dashboard') }} -->
Hi....<b>{{ Auth::user()->name  }} </b>
<b style="float:right;"> Total users 

<span style="color:red"> {{ count($users)}}</span>

</b>
        </h2>
    </x-slot>
     
  
    
    <div class="py-12">

<div class="container">
    <div class="row"> 

    <table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Created at</th>
    </tr>
  </thead>
  <tbody>

@php($i=1)
@foreach($users as $user)


    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $user->name}}</td>
      <td>{{ $user->email}}</td>
      <td>{{ Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</td>
    </tr>
@endforeach

  </tbody>
</table>


    </div>









</div>













        <!-- <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div> -->
    </div>
</x-app-layout>
