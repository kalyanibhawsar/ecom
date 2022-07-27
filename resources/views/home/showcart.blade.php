<!DOCTYPE html>
<html>

<head>
  <base href="/public">
  @include('home.includes.css')
  <style>
    .order_btn {
      color: #ffff;
      background-color: #f7444e;
    }

    .order_btn:hover {
      border: 1px solid #f7444e;
      background-color: transparent;
      color: #f7444e;
    }
  </style>
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
      <div class="container mt-2">
        <div class="row">
          <div class="col-sm-6 col-md-8 col-lg-8 m-auto">
            @if (session()->has('cart'))
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Image</th>
                  <th>Product Title</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                $grand_total = 0;
                $cart = session()->get('cart');
                ?>
                @foreach ($cart as $id => $cart)

                <?php $total_price = $cart['price'] * $cart['quantity'];  ?>
                <tr>
                  <td>{{ $no }}</td>
                  <td>
                    <a class="" href="#"> <img class="media-object" src="/product/{{$cart['image']}}" style="width: 70px; height: 70px;"> </a>
                  </td>
                  <td><b class="text-info ">{{$cart['product_title']}}</b></td>
                  <td>
                    <input type="number" data-id="{{$id}}" name="quantity" class="w-50 form-control update_cart" value="{{$cart['quantity']}}" min="1">
                  </td>
                  <td>$ {{$cart['price']}}</td>
                  <td>$ {{$total_price}}</td>
                  <td>
                    <button type="button" class="btn btn-danger btn-sm remove_cart_item" data-id="{{$id}}"><span class="fa fa-trash"></span> </button>
                  </td>
                </tr>
                <?php $no++;
                $grand_total = $grand_total + $total_price;
                ?>
                @endforeach
              </tbody>
            </table>
            <div class="text-right"><b> Total Price: </b> $ {{$grand_total}}</div>

            <div class="text-right mt-2"> <a href="{{url('/')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Return to Shopping</a>

              <a href="{{url('checkout')}}" class="btn btn-sm order_btn">Checkout</a>
            </div>
            @else
            <div class=" text-center"><a href="{{url('/')}}" class="btn order_btn">Continue Shopping</a></div>
            @endif
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

    {{-- update cart item quantity --}}
    <script>
      $('.update_cart').change(function(e) {
        e.preventDefault();
        var qty = $(this).val();
        var pid = $(this).attr('data-id');

        $.ajax({
          url: "{{ route('update_cart') }}",
          method: "patch",
          data: {
            _token: '{{ csrf_token() }}',
            pid: pid,
            quantity: qty
          },
          success: function(response) {

            window.location.reload();

          }
        });
      });
    </script>

    {{-- Remove Cart item --}}
    <script>
      $('.remove_cart_item').click(function() {
        var pid = $(this).attr('data-id');
        if (confirm("Are you sure want to remove?")) {
          $.ajax({
            url: "{{route('remove_cart')}}",
            method: 'get',
            data: {
              _token: '{{csrf_token()}}',
              pid: pid
            },
            success: function(response) {
              window.location.reload();
            }
          })
        }
      });
    </script>

</body>

</html>