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
                            <h1 class="m-0">Create Order</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('orders')}}">Orders</a></li>
                                <li class="breadcrumb-item active">Create Order</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                @if(session()->has('success'))
                                <div id="successMessage" class="col-md-6 offset-3 text-center alert-success p-1">
                                    {{session('success')}}
                                </div>
                                @endif
                                <div class="card-body">
                                    <form method="POST" action="{{route('submitOrders')}}">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <input type="hidden" name="user_id" id="user_id"
                                                value="{{Auth::user()->id}}">
                                            <input type="hidden" name="status" id="status" value="queue">
                                            <select class="col-md-3 form-control" name="product_id" id="product_id">
                                                <option value="">Select Product</option>
                                                @foreach($data as $key=>$product)
                                                <option value="{{$product->id}}">{{$product->code}}</option>
                                                @endforeach
                                            </select>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-chevron-down"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Rate</th>
                                                <th>Qty</th>
                                            </thead>
                                            <tbody id="orderTable">

                                            </tbody>
                                        </table>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-info btn-block">Add</button>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-header -->
                                @if(session()->has('erase'))
                                <div id="eraseMessage" class="col-md-6 offset-3 text-center alert-danger p-1">
                                    {{session('erase')}}
                                </div>
                                @endif
                                <div class="card-body">
                                    <form method="POST" action="{{route('confirmOrders')}}">
                                        @csrf
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Name</th>
                                                    <th>Rate</th>
                                                    <th>Qty</th>
                                                    <th style="width:15%;">Amount</th>
                                                    <th style="width:5%;">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orders as $key=> $order)
                                                <tr>
                                                    <td class="text-left">{{$order->product_code}}</td>
                                                    <td class="text-left">{{$order->product_name}}</td>
                                                    <td class="text-right">{{$order->product_rate}}</td>
                                                    <td class="text-right">{{$order->product_qty}}</td>
                                                    <td class="text-right">{{$order->total}}</td>
                                                    <td><a href="{{route('ordersDelete', ['id' => $order->id])}}"
                                                            class="btn btn-danger">X</a> </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3">

                                                    </td>
                                                    <td class="text-right text-bold">Total Items :
                                                        {{$orders->sum('product_qty')}}</td>
                                                    <td class="text-right text-bold">Total :
                                                        {{$orders->sum('total')}}</td>
                                                    <td></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="col-md-4 offset-md-8">
                                            <table class="table table-bordered table-striped">
                                                <tbody>
                                                   
                                                    <tr>
                                                        <td class="text-right text-bold">Comission 5%</td>
                                                        <td class="text-right text-bold">{{$orders->sum('total')*5/100}}
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right text-bold">Total Payable</td>
                                                        <td class="text-right text-bold">
                                                            {{$orders->sum('total')+$orders->sum('total')*5/100}}
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        @if(!empty($orders))
                                        <button class="col-md-3 btn btn-dark">
                                            Submit Order
                                        </button>
                                        @endif
                                    </form>
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