
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.includes.css')
    <style>
       .form-control:focus{
           color: #e9ecef;
       }
        .image_size{
           width: 50px !important;
           height: 50px !important;
       }
   </style>
  </head>
  <body>
    <div class="container-scroller">
        @include('admin.includes.sidebar')
        @include('admin.includes.header')
        <div class="main-panel">
          <div class="content-wrapper">
             @if (Session::has('message'))
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
                      {{ session()->get('message') }}
                  </div>
              @endif
              @yield('content')
          </div>
          @include('admin.includes.footer')
      </div>
    </div>
    @include('admin.includes.script')
  </body>
</html>
     

       
   