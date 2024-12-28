@extends('vendor.includes.main')
@push('title')
<title>Orders</title>
@endpush

@section('content')
        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div class="card p-4 mt-4">
                            <div class="row">
                                <div class="col-xl-12 col-md-12">
                                    <div class="d-flex">
                                        <h4>Orders</h4>
                                        
                                    </div>
                                    <div class="mt-3">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                <th scope="col">Order Id</th>
                                                <th scope="col">Customer Name</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">001</th>
                                                <td>John Doe</td>
                                                <td>₹ 1499.00</td>
                                                <td>
                                                    <span class="badge rounded-pill text-bg-warning">Pending</span>
                                                    
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-truck"></i></a>
                                                    <a href="#" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i></a>
                                                    <a href="{{('order-detail')}}" class="btn btn-warning btn-sm"><i class="fa-regular fa-eye"></i></a>
                                                </td>
                                                </tr>

                                                <tr>
                                                <th scope="row">001</th>
                                                <td>John Doe</td>
                                                <td>₹ 1499.00</td>
                                                <td>
                                                    <span class="badge rounded-pill text-bg-warning">Pending</span>
                                                    
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-truck"></i></a>
                                                    <a href="#" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i></a>
                                                    <a href="{{('order-detail')}}" class="btn btn-warning btn-sm"><i class="fa-regular fa-eye"></i></a>
                                                </td>
                                                </tr>

                                                <tr>
                                                <th scope="row">001</th>
                                                <td>John Doe</td>
                                                <td>₹ 1499.00</td>
                                                <td>
                                                    <span class="badge rounded-pill text-bg-warning">Pending</span>
                                                    
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-truck"></i></a>
                                                    <a href="#" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i></a>
                                                    <a href="{{('order-detail')}}" class="btn btn-warning btn-sm"><i class="fa-regular fa-eye"></i></a>
                                                </td>
                                                </tr>

                                                <tr>
                                                <th scope="row">001</th>
                                                <td>John Doe</td>
                                                <td>₹ 1499.00</td>
                                                <td>
                                                    <span class="badge rounded-pill text-bg-warning">Pending</span>
                                                    
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-truck"></i></a>
                                                    <a href="#" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i></a>
                                                    <a href="{{('order-detail')}}" class="btn btn-warning btn-sm"><i class="fa-regular fa-eye"></i></a>
                                                </td>
                                                </tr>

                                                <tr>
                                                <th scope="row">001</th>
                                                <td>John Doe</td>
                                                <td>₹ 1499.00</td>
                                                <td>
                                                    <span class="badge rounded-pill text-bg-warning">Pending</span>
                                                    
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-truck"></i></a>
                                                    <a href="#" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i></a>
                                                    <a href="{{('order-detail')}}" class="btn btn-warning btn-sm"><i class="fa-regular fa-eye"></i></a>
                                                </td>
                                                </tr>   
                                            </tbody>
                                        </table>
                                    </div>
                                        
                                </div>
                            </div>
                        </div>      
                    </div>
                </main>


                

@endsection
                