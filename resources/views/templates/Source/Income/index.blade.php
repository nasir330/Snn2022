<x-header />

@include('templates/nav')
@include('templates/menu')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Income Source List</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Income Source</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            @include('templates/boxdata')

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">All Income Source</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <td>Room Type</td>
                                                <td>Rate</td>                                               
                                                <th style="text-align: center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    01
                                                </td>
                                                <td>
                                                Extra Matress
                                                </td>
                                                <td>1200</td>                                                
                                                <td class="text-center">
                                                    <button class="btn btn-success">Edit</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    01
                                                </td>
                                                <td>
                                                Four Bed Non AC
                                                </td>
                                                <td>1200</td>                                                
                                                <td class="text-center">
                                                    <button class="btn btn-success">Edit</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    01
                                                </td>
                                                <td>
                                                Four Bed AC
                                                </td>
                                                <td>1200</td>                                                
                                                <td class="text-center">
                                                    <button class="btn btn-success">Edit</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    01
                                                </td>
                                                <td>
                                                Triple Bed Non AC
                                                </td>
                                                <td>1200</td>                                                
                                                <td class="text-center">
                                                    <button class="btn btn-success">Edit</button>
                                                </td>
                                            </tr>
                                          
                                        </tbody>
                                        <tfoot >
                                        <tr>
                                                <th>SL</th>
                                                <td>Room Type</td>
                                                <td>Rate</td>                                               
                                                <th style="text-align: center">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <x-footer />