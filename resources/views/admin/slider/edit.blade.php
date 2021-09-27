
@extends('admin.admin_master')

@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create slider</h2>
        </div>
        <div class="card-body">
           
                
            <form method="POST" action="{{route('store.slider')  }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Slider title</label>
                    <input type="text" name="title" value='{{$slider->title}}'class="form-control" id="exampleFormControlInput1" placeholder="Enter title">
                </div>
      
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Textarea</label>

                    <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3">{{$slider->desc}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Slider image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                    value="{{$slider->image}}">
                </div>
                <div class="pt-4 pt-5 mt-4 form-footer border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection