
     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="row">
             <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-warning">
                         <div class="inner p-4"> 
                             <h2>Your Profile</h2>
                             <div class="icon">
                             <i style="font-size:50px;" class="fas fa-cogs"></i>
                         </div>
                         </div>                        
                         <a href="{{route('profile1')}}" class="btn btn-warning small-box-footer"><h5 class="text-default text-bold">Go to profile</h5></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-danger">
                         <div class="inner p-4">
                         <h2>Payment</h2>
                         <div class="icon">
                             <i class="ion ion-pie-graph"></i>
                         </div>
                           
                         </div>
                        
                         <a href="{{route('profile.show')}}" class="btn btn-danger small-box-footer"><h5 class="text-default text-bold">Payment List</h5></a>
                     </div>
                 </div>
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-info">
                         <div class="inner p-4">                            
                             <h2>Invoices</h2>
                         </div>
                         <div class="icon">
                             <i class="ion ion-bag"></i>
                         </div>
                         <a href="#" class="btn btn-info small-box-footer"><h5 class="text-default text-bold">Add Invoice</h5> </a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-success">
                         <div class="inner p-4">
                             <h2>Reports</h2>
                         </div>
                         <div class="icon">
                             <i class="ion ion-stats-bars"></i>
                         </div>
                         <a href="#" class="btn btn-success small-box-footer"><h5 class="text-default text-bold">View Report</h5> </a>
                     </div>
                 </div>                
             </div>
         </div>
     </section>