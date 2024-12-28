@extends('layouts.main')

@push('title')
<title>Cart List</title>
@endpush

@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center text-secondary"><i class="fa-solid fa-cart-shopping"></i> Cart List</h1>
</div>
<!-- Cart List -->
<section>
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col"><h4>Product</h4></th>
                    <th scope="col"><h4>Price</h4></th>
                    <th scope="col"><h4>Quantity</h4></th>
                    <th scope="col"><h4>Subtotal</h4></th>
                    <th scope="col"><h4>Remove</h4></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th>
                        <div class="d-flex">
                            <div>
                                <img src="{{asset('assets/images/products/5.jpg')}}" style="width:70px;" class="rounded-3">
                            </div>
                            <div class="p-3"><h5>Camera</h5></div>
                        </div>
                    </th>
                    <td>₹ 599.00</td>
                    <td><div class="d-flex flex-row mb-3">
                            <!-- <div class="p-1"><h6>Quantity</h6></div> -->
                            <div class="p-1">
                                <span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                <span class="mx-2">02</span>
                                <span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>
                            </div>
                            
                        </div></td>
                    <td>₹ 599.00</td>
                    <td><button type="button" class="btn-close" aria-label="Close"></button></td>
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
                    <td><div class="d-flex flex-row mb-3">
                            <!-- <div class="p-1"><h6>Quantity</h6></div> -->
                            <div class="p-1">
                                <span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                <span class="mx-2">01</span>
                                <span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>
                            </div>
                            
                        </div></td>
                    <td>₹ 599.00</td>
                    <td><button type="button" class="btn-close" aria-label="Close"></button></td>
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
                    <td><div class="d-flex flex-row mb-3">
                            <!-- <div class="p-1"><h6>Quantity</h6></div> -->
                            <div class="p-1">
                                <span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                <span class="mx-2">03</span>
                                <span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>
                            </div>
                            
                        </div></td>
                    <td>₹ 799.00</td>
                    <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                    </tr>
                    
                </tbody>
                </table>
            </div>
            <div class="col-lg-5 ms-auto my-5">
                <div>
                    <h3>Price Details</h3><hr>
                </div>
                <div class="d-flex">
                    <div><h5>Subtotal</h5></div>
                    <div class="ms-auto"><h5>₹ 799.00</h5></div>
                </div>

                <div class="d-flex">
                    <div><h5>Discount</h5></div>
                    <div class="ms-auto"><h5>₹ 99.00</h5></div>
                </div>

                <div class="d-flex">
                    <div><h5>Delivery Charges</h5></div>
                    <div class="ms-auto"><h5>Free</h5></div>
                </div><hr>

                <div class="d-flex">
                    <div><h4>Total</h4></div>
                    <div class="ms-auto"><h5>₹ 700.00</h5></div>
                </div>
                <div class="mt-4"> <a href="{{url('checkout/product')}}" class="btn theme-orange-btn text-light rounded-pill w-100 px-3 py-2">Proceed to Checkout <i class="fa-solid fa-arrow-right"></i></a></div>
            </div>
        </div>
    </div>
</section>



@endsection