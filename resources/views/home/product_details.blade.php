<!DOCTYPE html>
<html>
   <head>
      <base href="/public">
      @include('home.includes.css')
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
       @include('home.includes.header')
        
      <!-- product section -->
      <section class="product_section layout_padding">
           @if (Session::has('message'))
                  <div class="alert alert-success col-md-6 m-auto mb-2">
                      <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
                      {{ session()->get('message') }}
                  </div>
              @endif
         <div class="container">
               <div class="row">   
                  <div class="col-sm-6 col-md-6 col-lg-6 m-auto">
                     <div class="box">
                        <div class="img-box">
                           <img src="product/{{$product->image}}" alt="">
                        </div>
                        <div class="input-group-append options">
                           <a class="btn option1"  href= "{{url('add_cart', $product->id)}}"  >Add To Cart</a>
                        </div>
                        <div class="mt-4">
                           <h5>{{$product->title}}  </h5>
                           @if($product->dicount_price)
                           <h6 class="text-success">
                           Discount Price:  ${{$product->dicount_price}}
                           </h6>
                           <h6 class="text-primary" style="text-decoration: line-through">
                              Price: ${{$product->price}}
                           </h6>
                           @else
                           <h6 class="text-primary">
                              Price: ${{$product->price}}
                           </h6>
                           @endif
                           <h6>Product Category: {{$product->category}}</h6>
                           <h6>Product Detail: {{$product->description}}</h6>
                           <h6>Available Quantity: {{$product->quantity}}</h6>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
   </section>
      <!-- end product section -->

      <!-- footer start -->
     @include('home.includes.footer')
      <!-- footer end -->
 
      <!-- jQery -->
    @include('home.includes.script')
   </body>
</html>