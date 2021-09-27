
@extends('admin.admin_master')

@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add new About</h2>
        </div>
        <div class="card-body">
            <form action="{{url('update/about/'.$homeabout->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">About title</label>
                    <input type="text" name="title" value="{{$homeabout->title}}"class="form-control" id="exampleFormControlInput1" placeholder="Enter title">
                </div>
      
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Textarea</label>
                    <textarea class="form-control" " name="short"id="exampleFormControlTextarea1" rows="3">{{$homeabout->short_desc}}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Textarea</label>
                    <textarea class="form-control" name="long" id="exampleFormControlTextarea1" rows="3">{{$homeabout->long_desc}}</textarea>
                </div>

                <div class="pt-4 pt-5 mt-4 form-footer border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection