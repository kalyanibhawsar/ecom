@extends('admin.home')
  @section('content') 
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card m-auto">
            <div class="card-body ">
                    <h4 class="card-title text-center">Edit Product</h4>
                
                    <form class="forms-sample" action="{{url('edit_product',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Title" required value="{{$product->title}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="Description" required value="{{$product->description}}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" id="price" placeholder="Price" required value="{{$product->price}}">
                        </div>
                        <div class="form-group">
                            <label for="discount_price">Discount Price</label>
                            <input type="text" name="discount_price" class="form-control" id="discount_price" placeholder="Discount Price" value="{{$product->dicount_price}}">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Quantity" required value="{{$product->quantity}}">
                        </div>
                        <div class="form-group">
                            <label for="product_category">Category</label>
                            <select class="form-control" name="product_category" id="product_category" required>
                                <option value="{{ $product->category}}" selected>{{ $product->category}}</option>
                                @foreach ($category as $cat)
                                    <option value="{{ $cat->category_name}}">{{ $cat->category_name}}</option>
                                @endforeach  
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_image">Current Product Image</label><br>
                            <img src="/product/{{ $product->image}}" class="image_size">
                            </div>
                        <div class="form-group">
                            <label for="product_image">Change Product Image</label>
                            <input type="file" name="product_image" class="form-control" id="product_image" >
                        </div>
                    
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <button class="btn btn-dark" >Cancel</button>
                    </form>
                </div>
        </div>
    </div>    
@endsection
















