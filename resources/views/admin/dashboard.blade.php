 @extends('admin.home')
 @section('content')
 <div class="row">
   <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
     <div class="card">
       <div class="card-body">
         <div class="row">
           <div class="col-9">
             <div class="d-flex align-items-center align-self-start">
               <h3 class="mb-0">{{$total_product}}</h3>
             </div>
           </div>
           <div class="col-3">
             <div class="icon icon-box-success ">
               <span class="mdi mdi-arrow-top-right icon-item"></span>
             </div>
           </div>
         </div>
         <h6 class="text-muted font-weight-normal">Total Products</h6>
       </div>
     </div>
   </div>
   <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
     <div class="card">
       <div class="card-body">
         <div class="row">
           <div class="col-9">
             <div class="d-flex align-items-center align-self-start">
               <h3 class="mb-0">{{$total_user}}</h3>
             </div>
           </div>
           <div class="col-3">
             <div class="icon icon-box-success">
               <span class="mdi mdi-arrow-top-right icon-item"></span>
             </div>
           </div>
         </div>
         <h6 class="text-muted font-weight-normal">Total Customer</h6>
       </div>
     </div>
   </div>
   <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
     <div class="card">
       <div class="card-body">
         <div class="row">
           <div class="col-9">
             <div class="d-flex align-items-center align-self-start">
               <h3 class="mb-0">0</h3>
             </div>
           </div>
           <div class="col-3">
             <div class="icon icon-box-success">
               <span class="mdi mdi-arrow-top-right icon-item"></span>
             </div>
           </div>
         </div>
         <h6 class="text-muted font-weight-normal">Total Orders</h6>
       </div>
     </div>
   </div>

   <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
     <div class="card">
       <div class="card-body">
         <div class="row">
           <div class="col-9">
             <div class="d-flex align-items-center align-self-start">
               <h3 class="mb-0">0</h3>
             </div>
           </div>
           <div class="col-3">
             <div class="icon icon-box-success ">
               <span class="mdi mdi-arrow-top-right icon-item"></span>
             </div>
           </div>
         </div>
         <h6 class="text-muted font-weight-normal">Total Revenue</h6>
       </div>
     </div>
   </div>
   <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
     <div class="card">
       <div class="card-body">
         <div class="row">
           <div class="col-9">
             <div class="d-flex align-items-center align-self-start">
               <h3 class="mb-0">0</h3>
             </div>
           </div>
           <div class="col-3">
             <div class="icon icon-box-success ">
               <span class="mdi mdi-arrow-top-right icon-item"></span>
             </div>
           </div>
         </div>
         <h6 class="text-muted font-weight-normal">Order Delivered</h6>
       </div>
     </div>
   </div>
   <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
     <div class="card">
       <div class="card-body">
         <div class="row">
           <div class="col-9">
             <div class="d-flex align-items-center align-self-start">
               <h3 class="mb-0">0</h3>
             </div>
           </div>
           <div class="col-3">
             <div class="icon icon-box-success ">
               <span class="mdi mdi-arrow-top-right icon-item"></span>
             </div>
           </div>
         </div>
         <h6 class="text-muted font-weight-normal">Order Processing</h6>
       </div>
     </div>
   </div>
 </div>

 <div class="row">
   <div class="col-12">
     <div class="card">
       <div class="card-body">
         <h4 class="card-title">Visitors by Countries</h4>
         <div class="row">
           <div class="col-md-5">
             <div class="table-responsive">
               <table class="table">
                 <tbody>
                   <tr>
                     <td>
                       <i class="flag-icon flag-icon-us"></i>
                     </td>
                     <td>USA</td>
                     <td class="text-right"> 1500 </td>
                     <td class="text-right font-weight-medium"> 56.35% </td>
                   </tr>
                   <tr>
                     <td>
                       <i class="flag-icon flag-icon-de"></i>
                     </td>
                     <td>Germany</td>
                     <td class="text-right"> 800 </td>
                     <td class="text-right font-weight-medium"> 33.25% </td>
                   </tr>
                   <tr>
                     <td>
                       <i class="flag-icon flag-icon-au"></i>
                     </td>
                     <td>Australia</td>
                     <td class="text-right"> 760 </td>
                     <td class="text-right font-weight-medium"> 15.45% </td>
                   </tr>
                   <tr>
                     <td>
                       <i class="flag-icon flag-icon-gb"></i>
                     </td>
                     <td>United Kingdom</td>
                     <td class="text-right"> 450 </td>
                     <td class="text-right font-weight-medium"> 25.00% </td>
                   </tr>
                   <tr>
                     <td>
                       <i class="flag-icon flag-icon-ro"></i>
                     </td>
                     <td>Romania</td>
                     <td class="text-right"> 620 </td>
                     <td class="text-right font-weight-medium"> 10.25% </td>
                   </tr>
                   <tr>
                     <td>
                       <i class="flag-icon flag-icon-br"></i>
                     </td>
                     <td>Brasil</td>
                     <td class="text-right"> 230 </td>
                     <td class="text-right font-weight-medium"> 75.00% </td>
                   </tr>
                 </tbody>
               </table>
             </div>
           </div>
           <div class="col-md-7">
             <div id="audience-map" class="vector-map"></div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 @endsection