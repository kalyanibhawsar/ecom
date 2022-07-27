<!DOCTYPE html>
<html>
   <head>
      @include('home.includes.css')
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
       @include('home.includes.header')
         <!-- end header section -->
         <!-- slider section -->
         
        @include('home.slider')
             {{(isset($usertype))?$usertype:""}}
         <!-- end slider section -->
      </div>
      <!-- why section -->
     @include('home.why')
      <!-- end why section -->
      
      <!-- arrival section -->
      @include('home.arrival')
      <!-- end arrival section -->
      
      <!-- product section -->
       @include('home.product')
      <!-- end product section -->

      <!-- subscribe section -->
      @include('home.subscribe')
      <!-- end subscribe section -->
      <!-- client section -->
     @include('home.client')
      <!-- end client section -->
      <!-- footer start -->
     @include('home.includes.footer')
      <!-- footer end -->
 
      <!-- jQery -->
      @include('home.includes.script')
   </body>
</html>