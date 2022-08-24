
     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="row">
             <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-warning">
                         <div class="inner p-4"> 
                             <h2>Setting</h2>
                             <div class="icon">
                             <i style="font-size:50px;" class="fas fa-cogs"></i>
                         </div>
                         </div>                        
                         <a href="{{route('profile.show')}}" class="btn btn-warning small-box-footer"><h5 class="text-default text-bold">Profile Setting &nbsp; <i class="fas fa-arrow-circle-right"></i></h5></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-danger">
                         <div class="inner p-4">
                         <h2>Profile</h2>
                         <div class="icon">
                             <i class="ion ion-pie-graph"></i>
                         </div>
                           
                         </div>
                        
                         <a href="{{route('user-profile')}}" class="btn btn-danger small-box-footer"><h5 class="text-default text-bold">Edit profile &nbsp; <i class="fas fa-arrow-circle-right"></i></h5></a>
                     </div>
                 </div>
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-info">
                         <div class="inner p-4">                            
                             <h2>Members</h2>
                         </div>
                         <div class="icon">
                             <i class="ion ion-bag"></i>
                         </div>
                         <a href="{{route('user-list')}}" class="btn btn-info small-box-footer"><h5 class="text-default text-bold">All members &nbsp; <i class="fas fa-arrow-circle-right"></i></h5></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-success">
                         <div class="inner p-4">
                             <h2>Payments</h2>
                         </div>
                         <div class="icon">
                             <i class="ion ion-stats-bars"></i>
                         </div>
                         <a href="{{route('user-profile')}}" class="btn btn-success small-box-footer"><h5 class="text-default text-bold">Payments &nbsp; <i class="fas fa-arrow-circle-right"></i></h5></a>
                     </div>
                 </div>                
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-dark">
                         <div class="inner p-4">
                             <h2>T-Shirt's</h2>
                         </div>
                         <div class="icon">
                             <i class="ion ion-stats-bars"></i>
                         </div>
                         <a href="{{route('user-profile')}}" class="btn btn-dark small-box-footer"><h5 class="text-default text-bold">View Details &nbsp; <i class="fas fa-arrow-circle-right"></i></h5></a>
                     </div>
                 </div>                
             </div>
         </div>
     </section>