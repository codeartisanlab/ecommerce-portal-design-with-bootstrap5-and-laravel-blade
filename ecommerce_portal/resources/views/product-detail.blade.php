@extends('layouts.main')

@push('title')
<title>Product Detail</title>
@endpush

@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center text-secondary"><i class="fa-solid fa-layer-group"></i> Product Detail</h1>
</div>

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
            

                <img src="{{asset('assets/images/products/1.jpg')}}" class="rounded img-fluid">
                
                
            </div>

            <div class="col-lg-8">
                <div>
                    <h2>Women Shoes</h2>
                    <h5>₹ 499.00</h5>
                    <div>
                        <div class="d-flex flex-row mb-3">
                            <div>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="p-1 mx-2">
                                <h6>(2 Customer Reviews)</h6>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <div class="d-flex flex-row mb-3">
                            <div class="p-1"><h6>Quantity</h6></div>
                            <div class="p-1">
                                <span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                <span class="mx-2">01</span>
                                <span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>
                            </div>
                            
                        </div>
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                    <div>
                        <a class="btn theme-green-btn text-light rounded-pill me-1 px-3 py-2">Add to cart</a>
                        <a class="btn theme-orange-btn text-light rounded-pill px-3 py-2">Buy Now</a>
                    </div>
                </div>
               
            </div>
            <div class="my-4">
                <h2>Product Description</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
            <!-- Related Products -->
            <div class="mb-5">
            <section>
                <div class="container">
                    
                    <div class="d-flex">
                        <div class="flex-grow-1"><h2>Related Products</h2></div>
                        <div><a href="#" class="btn btn-sm theme-orange-btn text-light rounded-pill px-3 py-2">View All</a></div>
                        
                        </div>
                    <div class="row theme-product">
                        <div class="col-lg-3">
                            <div class="card " >
                            
                            <a href="#"><img src="{{asset('assets/images/products/5.jpg')}}" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h6 class="card-title text-center "><a href="#" class="text-dark text-decoration-none">Camera</a></h6>
                                <h5 class="card-title text-center">₹ 2499.00</h5>
                                
                            </div>  
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card" >
                            
                            <a href="#"><img src="{{asset('assets/images/products/6.jpg')}}" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Women Shoes</a></h6>
                                <h5 class="card-title text-center">₹ 1099.00</h5>
                                
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card" >
                            
                            <a href="#"><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">LED TV</a></h6>
                                <h5 class="card-title text-center">₹ 5999.00</h5>
                                
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card" >
                            
                            <a href="#"><img src="{{asset('assets/images/products/8.jpg')}}" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Washing Machine</a></h6>
                                <h5 class="card-title text-center">₹ 13999.00</h5>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            </div><hr>
            <!-- Review -->
            <section>
                <h2>02 Reviews</h2>
                <div class="row mt-4">
                    <div class="col-lg-1">
                        <img src="{{asset('assets/images/review/user.png')}}" class="rounded-circle img-fluid">
                    </div>
                    <div class="col-lg-11">
                        <div>
                            <h4>John Doe</h4>
                            <div>
                                <div class="d-flex">
                                <div class="flex-grow-1"><h6>19 Dec, 2024</h6></div>
                                <div>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                        
                                </div>
                            </div>
                            <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>
                            <div>
                            <a class="btn theme-orange-btn btn-sm text-light rounded-pill px-3 py-2">Reply</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-1 mt-4">
                        <img src="{{asset('assets/images/review/user.png')}}" class="rounded-circle img-fluid">
                    </div>
                    <div class="col-lg-11 mt-4">
                        <div>
                            <h4>Alen Musk</h4>
                            <div>
                                <div class="d-flex">
                                <div class="flex-grow-1"><h6>14 Nov, 2024</h6></div>
                                <div>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                        
                                </div>
                            </div>
                            <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>
                            <div>
                            <a class="btn theme-orange-btn btn-sm text-light rounded-pill px-3 py-2">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Add a Review -->

            <section>
                <div class="container my-5 bg-light p-5">
                    <h2>Add a Review</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <form>
                            <div class="form-text">Rate this Product? * 

                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                            </div>
                                <div class="row my-3">
                                    <div class="col-lg-6 mb-3">
                                    <input type="text" class="form-control form-control-lg" placeholder="Your Name">
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                    <input type="email" class="form-control form-control-lg"  placeholder="Your Email">
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                    <textarea class="form-control form-control-lg" placeholder="Your Message" rows="4"></textarea>
                                    </div>

                                    <div>
                                    <a class="btn theme-orange-btn text-light rounded-pill px-3 py-2">Post a Comment <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>

</section>

@endsection