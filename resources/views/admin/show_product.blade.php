@extends('admin.home')
  @section('content') 
          {{-- Show category list --}}
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Product List</h4>
              <div class="">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th> No </th>
                      <th> Title </th>
                      <th> Description </th>
                      <th>Category</th>
                      <th>Quantity </th>
                      <th> Price </th>
                      <th> Discount Price </th>
                      <th>Image </th>
                      <th> Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    @foreach ($product as $product)
                    <tr>
                      <td>{{$no}}</td>
                      <td>{{$product->title}}</td>
                      <td>{{$product->description}}</td>
                      <td>{{$product->category}}</td>
                      <td>{{$product->quantity}}</td>
                      <td>{{$product->price}}</td>
                      <td>{{$product->dicount_price}}</td>
                      <td><img src="product/{{$product->image}}"class="image_size"></td>
                      <td>
                        <a href="{{url('update_product', $product->id)}}" class="btn btn-outline-success btn-sm">Edit</a>
                        <a href="{{url('delete_product', $product->id)}}" class="btn btn-outline-danger btn-sm" onclick="confirm('Do you want to delete this?')">Delete</a>
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















