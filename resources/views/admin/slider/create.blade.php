
@extends('admin.admin_master')

@section('admin')
<div class="col-lg-6">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Basic Form Controls</h2>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email">
                    <span class="mt-2 d-block">We'll never share your email with anyone else.</span>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlPassword">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlPassword" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect12">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect12">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="pt-4 pt-5 mt-4 form-footer border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Form pill</h2>
        </div>
        <div class="card-body">
            <form class="form-pill">
                <div class="form-group">
                    <label for="exampleFormControlInput3">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlPassword3">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlPassword3" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect3">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect3">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </form>
        </div>
    </div>

    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Input Sizing</h2>
        </div>
        <div class="card-body">
            <form >
                <div class="form-group">
                    <label for="">Large input</label>
                    <input type="text" class="form-control input-lg" placeholder="Large input">
                </div>
                <div class="form-group">
                    <label for="">Default input</label>
                    <input type="text" class="form-control" placeholder="Default input">
                </div>
                <div class="form-group">
                    <label for="">Small input</label>
                    <input type="text" class="form-control input-sm" placeholder="Small input">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection