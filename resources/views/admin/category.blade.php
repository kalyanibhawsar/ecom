@extends('admin.home')
  @section('content')
      {{-- Add category --}}
        <div class="card">
            <div class="card-body ">
            <h4 class="card-title text-center">Add Category</h4>
            <form class="form-inline" method="POST" action="{{url('add_category')}}">
                @csrf
                <div class="input-group m-auto col-md-5">
                  <input type="text" name="category_name" class="form-control" placeholder="Category Name">
                    <div class="input-group-append">
                    <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                    </div>
                </div>   
            </form>
            </div>
        </div>

        {{-- Show category list --}}
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Category List</h4>
            <div class="">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No </th>
                    <th> Category </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  @foreach ($data as $cat)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$cat->category_name}}</td>
                    <td>
                      <a href="{{url('update_category', $cat->id)}}" class="btn btn-outline-success btn-sm">Edit</a>
                      <a href="{{url('delete_category', $cat->id)}}" class="btn btn-outline-danger btn-sm" onclick="confirm('Are you sure to want delete this?')">Delete</a>
                    </td>
                  </tr>
                  <?php $no++; ?>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    @endsection
           
   

















