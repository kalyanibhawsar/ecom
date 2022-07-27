<section class="product_section layout_padding">
     @if (Session::has('message'))
         <div class="alert alert-success col-md-6 m-auto mb-2">
               <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
               {{ session()->get('message') }}
         </div>
      @endif
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
               @foreach ($products as $product)
                  
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                    <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$product->id)}}" class="option1">
                           Product Detail
                           </a>
                           <?php $cart = session()->get('cart')  ?>
                           @if(isset($cart[$product->id]))
                             <a href="{{url('show_cart')}}" class="option1"> View Cart </a>
                           @else
                           <a href="{{url('add_cart', $product->id)}}" class="option1">
                           Add to Cart
                           </a>
                           @endif 
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$product->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$product->title}}
                        </h5>
                        @if($product->dicount_price)
                        <h6 class="text-danger">
                           ${{$product->dicount_price}}
                        </h6>
                        <h6 class="text-primary" style="text-decoration: line-through">
                           ${{$product->price}}
                        </h6>
                     
                        @else
                        <h6 class="text-primary">
                           ${{$product->price}}
                        </h6>
                        @endif
                     </div>
                  </div>
               </div>
              @endforeach
               
            </div>
            <div class="mt-3 float-right">
               {{ $products->withQueryString()->links('pagination::bootstrap-4') }}
            </div>
            {{-- <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div> --}}
         </div>
      </section>