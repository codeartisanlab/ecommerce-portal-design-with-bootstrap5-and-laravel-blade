@extends('layouts.main')

@push('title')
<title>Checkout</title>
@endpush

@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center text-secondary"><i class="fa-solid fa-cart-shopping"></i> Checkout</h1>
</div>
<!-- Billing Information -->
<section>
    <div class="container my-5">
        <h2>Billing Details</h2>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="row my-3">
                    <div class="col-lg-12 mb-3">
                        <select class="form-select form-control" aria-label="Default select example">
                            <option selected>Select your Country</option>
                            <option value="1">India</option>
                            <option value="2">Nepal</option>
                            <option value="3">Australia</option>
                            <option value="3">UK</option>
                            <option value="3">USA</option>
                        </select>
                        </div>

                        <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control " placeholder="First Name">
                        </div>

                        <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control " placeholder="Last Name">
                        </div>

                        <div class="col-lg-6 mb-3">
                        <input type="tel" class="form-control "  placeholder="Your Phone">
                        </div>

                        <div class="col-lg-6 mb-3">
                        <input type="email" class="form-control "  placeholder="Your Email">
                        </div>

                        <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control " placeholder="Pin Code">
                        </div>

                        <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control " placeholder="Landmark">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <select class="form-select form-control " aria-label="Default select example">
                                <option selected>Select your City</option>
                                <option value="1">Ludhina</option>
                                <option value="2">Moga</option>
                                <option value="3">Jalandhr</option>
                                <option value="3">Phagwara</option>
                                <option value="3">Malekotla</option>
                            </select>
                        </div>

                        <div class="col-lg-6 mb-3">
                        <select class="form-select form-control" aria-label="Default select example">
                                <option selected>Select your State</option>
                                <option value="1">Punjab</option>
                                <option value="2">Gujarat</option>
                                <option value="3">Goa</option>
                                <option value="3">Up</option>
                                <option value="3">Bihar</option>
                            </select>
                        </div>

                        <div class="col-lg-12 mb-3">
                        <textarea class="form-control " placeholder="Your Address" rows="4"></textarea>
                        </div>

                        

                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<!-- Your Order -->

<section>
    <div class="container">
    <h3>Your Orders</h3>
        <div class="row mb-5">
            <div class="col-lg-12">
            <table class="table" >
                <thead>
                    <tr>
                    <th scope="col"><h5>Product</h5></th>
                    <th scope="col"><h5>Price</h5></th>
                    <th scope="col"><h5>Quantity</h5></th>
                    <th scope="col"><h5>Subtotal</h5></th>
                    
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
                    
                    </tr>

                    <tr>
                    
                    <th colspan="3"><h5>Total</h5></th>
                    <th><h5>₹ 1999.00</h5></th>
                    
                    </tr>
                    
                </tbody>
                </table>
                
            </div>
        
        </div>
    </div>
</section>

<!-- Payment -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        <h5>UPI</h5>
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault2">
                    <h5>Credit/Debit Card</h5>
                    </label>
                    </div>

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault2">
                    <h5>Cash on Delivery</h5>
                    </label>
                    </div>

                    <div>
                        <a class="btn theme-orange-btn text-light rounded-pill my-4 px-3 py-2">Place Order <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
            </div>
        </div>
        
    </div>
</section>


@endsection