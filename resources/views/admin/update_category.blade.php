@extends('admin.home')
@section('content') 
  {{-- Add category --}}
    <div class="card">
        <div class="card-body ">
        <h4 class="card-title text-center">Edit Category</h4>
        <form class="form-inline" method="POST" action="{{url('edit_category',$category->id)}}">
            @csrf
            <div class="input-group m-auto">
              <input type="text" name="category_name" class="form-control" placeholder="Category Name" value="{{$category->category_name}}">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-primary" type="submit">Update</button>
                  <button class="btn btn-dark" >Cancel</button>
                </div>
            </div>   
        </form>
        </div>
    </div>
@endsection

















