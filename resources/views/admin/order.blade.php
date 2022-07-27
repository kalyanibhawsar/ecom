@extends('admin.home')
  @section('content') 
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">All Orders</h4>
          <div class="">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th> No </th>
                  <th> Name </th>
                  <th> Email </th>
                  <th>Address</th>
                  <th>Phone </th>
                  <th>Product Ttitle </th>
                  <th>Quantity </th>
                  <th>Price </th>
                  <th>Payment Status</th>
                  <th>Delivery Status</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                @foreach ($order as $order)
                  <tr>
                  <td>{{$no}}</td>
                  <td>{{$order->name}}</td>
                  <td>{{$order->email}}</td>
                  <td>{{$order->address}}</td>
                  <td>{{$order->phone}}</td>
                  <td>{{$order->product_title}}</td>
                  <td>{{$order->quantity}}</td>
                  <td>{{$order->price}}</td>
                  <td>{{$order->payment_status}}</td>
                  <td>{{$order->delivery_status}}</td>
                  <td><img src="product/{{$order->image}}" class="image_size"></td>
                  <td>
                      @if($order->delivery_status == 'processing')
                          <a href="{{url('delivered', $order->id)}}" class="btn btn-outline-primary btn-sm" onclick="confirm('Do you want to deliver this order?')">Delivered</a>
                          @else
                          <p class="text-success">Delivered</p>
                      @endif
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
    
















