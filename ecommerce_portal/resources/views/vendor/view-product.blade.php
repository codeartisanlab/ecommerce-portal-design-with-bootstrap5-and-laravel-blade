@extends('vendor.includes.main')
@push('title')
<title>View Product</title>
@endpush

@section('content')
        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    
                        <div class="card p-4 mt-4">
                            <div class="row">
                                <div class="col-xl-12 col-md-12">
                                    <div class="d-flex">
                                        <h4>View Products</h4>
                                        
                                    </div>
                                    <div class="mt-3">
                                    <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                    <th scope="col"><h5>Product</h5></th>
                                    <th scope="col"><h5>Price</h5></th>
                                    <th scope="col"><h5>Category</h5></th>
                                    <th scope="col"><h5>Stock</h5></th>
                                    <th scope="col"><h5>Description</h5></th>
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
                                    <td>Electronics</td>
                                    <td>25</td>
                                    <td>Reference site about Lorem Ipsum</td>
                                    <td>
                                        <a href="{{url('vendor/edit-product')}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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
                                    <td >₹ 599.00</td>
                                    <td>Fashion</td>
                                    <td>25</td>
                                    <td>Reference site about Lorem Ipsum</td>
                                    <td>
                                        <a href="{{url('vendor/edit-product')}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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
                                    <td >₹ 599.00</td>
                                    <td>Electronics</td>
                                    <td>25</td>
                                    <td>Reference site about Lorem Ipsum</td>
                                    <td>
                                        <a href="{{url('vendor/edit-product')}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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
                