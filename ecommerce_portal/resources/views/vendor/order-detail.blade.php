@extends('vendor.includes.main')
@push('title')
<title>Order Detail</title>
@endpush

@section('content')
        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-5">
                        <div class="row my-5">
                            <h6>Order Details: Dec 25, 2024. (3 Products)</h6>
                            <div class="col-xl-6 col-md-6 mt-3 border border-primary p-3">
                                
                                    <h5 class="text-dark">Customer Information</h5>
                                    <!-- <h6 class="text-dark">Reference site about Lorem Ipsum, giving information on its origins </h6> -->
                                    <span class="text-dark"><strong>Name:</strong> John Doe</span><br>
                                    <span class="text-dark"><strong>Email:</strong> john@gmail.com</span><br>
                                    <span class="text-dark"><strong>Phone:</strong> +91 1236547890</span><br>
                                    <span class="text-dark"><strong>Shipping Address:</strong> Reference site about Lorem Ipsum, giving information on its origins</span>
                               
                            </div>

                            <div class="col-xl-6 col-md-6 mt-3 border border-primary p-3">
                               
                                    <h5 class="text-dark">Order Summary</h5>
                                    <span class="text-dark"><strong>Order id:</strong> 001</span><br>
                                    <span class="text-dark"><strong>Payment Method:</strong> Cash on Delivery</span><br>
                                    <span class="text-dark"><strong>Payment Status:</strong> <span class="badge text-bg-success">Completed</span></span><br>
                                    <span class="text-dark"><strong>Subtotal:</strong> ₹ 1499.00</span><br>
                                    
                                    <h5 class="text-dark mt-3">Total: ₹ 1499.00</h5>
                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="position-relative m-4">
                                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                                        <div class="progress-bar" style="width: 80%"></div>
                                    </div>
                                    <button type="button" class="position-absolute top-0 translate-middle btn btn-sm btn-primary rounded-pill" style="left: 0%; width: 2rem; height: 2rem;">1</button>
                                    <button type="button" class="position-absolute top-0 translate-middle btn btn-sm btn-primary rounded-pill" style="left: 25%; width: 2rem; height: 2rem;">2</button>
                                    <button type="button" class="position-absolute top-0 translate-middle btn btn-sm btn-primary rounded-pill" style="left: 50%; width: 2rem; height: 2rem;">3</button>
                                    <button type="button" class="position-absolute top-0 translate-middle btn btn-sm btn-primary rounded-pill" style="left: 100%; transform: translateX(-50%); width: 2rem; height: 2rem;">4</button>
                                </div>

                            </div>

                           <div class="col-xl-12 col-md-12">
                                <div class="d-flex">
                                    <div class="p-2 ms-5 flex-fill">Order Recieved</div>
                                    <div class="p-2 ms-5 flex-fill">Processing</div>
                                    <div class="p-2 ms-5 flex-fill">On the Way</div>
                                    <div class="p-2 ms-5 flex-fill">Delivered</div>
                                </div>
                           </div>
                        </div>

                        <div class="row my-5">
                            <div class="col-lg-12">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                    <th scope="col"><h5>Product</h5></th>
                                    <th scope="col"><h5>Price</h5></th>
                                    <th scope="col"><h5>Quantity</h5></th>
                                    <th scope="col"><h5>Subtotal</h5></th>
                                    <th scope="col"><h5>Status</h5></th>
                                    <th scope="col"><h5>Action</h5></th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr >
                                    <th>
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{asset('assets/images/products/5.jpg')}}" style="width:70px;" class="rounded-3">
                                            </div>
                                            <div class="p-3"><h5>Camera</h5></div>
                                        </div>
                                    </th>
                                    <td >₹ 599.00</td>
                                    <td>01</td>
                                    <td>₹ 599.00</td>
                                    <td><span class="badge text-bg-success">Deliverd</span></td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-truck"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-ban"></i></a>
                                    </td>
                                
                                    </tr>

                                    <tr>
                                    <th>
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{asset('assets/images/products/9.jpg')}}" style="width:70px;" class="rounded-3">
                                            </div>
                                            <div class="p-3"><h5>Handbag</h5></div>
                                        </div>
                                    </th>
                                    <td>₹ 599.00</td>
                                    <td>02</td>
                                    <td>₹ 599.00</td>
                                    <td><span class="badge text-bg-warning">Shipped</span></td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-truck"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-ban"></i></a>
                                    </td>
                    
                                    </tr>

                                    <tr>
                                    <th>
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{asset('assets/images/products/2.jpg')}}" style="width:70px;" class="rounded-3">
                                            </div>
                                            <div class="p-3"><h5>Watch</h5></div>
                                        </div>
                                    </th>
                                    <td>₹ 799.00</td>
                                    <td>03</td>
                                    <td>₹ 799.00</td>
                                    <td><span class="badge text-bg-danger">Cancle</span></td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-truck"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-ban"></i></a>
                                    </td>
                                    
                                    </tr>
                                    
                                </tbody>
                                </table>
                                
                            </div>
                        
                        </div>
                        
                    </div>
                </main>
            
                

@endsection
                