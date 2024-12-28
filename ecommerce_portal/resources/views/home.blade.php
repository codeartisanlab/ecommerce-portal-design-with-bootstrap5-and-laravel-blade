@extends('layouts.main')
@push('title')
<title>Home Page</title>
@endpush
@section('content')

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets/images/slider1.png')}}" class="d-block w-100" alt="Slider 1">
    </div>
    <div class="carousel-item">
        <img src="{{asset('assets/images/slider2.png')}}" class="d-block w-100" alt="Slider 2">
    </div>
    <div class="carousel-item">
        <img src="{{asset('assets/images/slider3.png')}}" class="d-block w-100" alt="Slider 3">
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Product Section -->

<section class="my-5">
    <div class="container">
        
        <div class="d-flex">
            <div class="flex-grow-1"><h2>Top Deals</h2></div>
            <div><a href="{{url('category/electronics')}}" class="btn btn-sm theme-green-btn text-light rounded-pill px-3 py-2">View All</a></div>
            
            </div>
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card " >
                
                <a href="#"><img src="{{asset('assets/images/products/1.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center "><a href="#" class="text-dark text-decoration-none">Campus Shoes</a></h6>
                    <h5 class="card-title text-center">₹ 499.00</h5>
                    
                </div>  
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/2.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Apple Watch</a></h6>
                    <h5 class="card-title text-center">₹ 1499.00</h5>
                    
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/3.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Nike Cap</a></h6>
                    <h5 class="card-title text-center">₹ 799.00</h5>
                    
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/4.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden Chair</a></h6>
                    <h5 class="card-title text-center">₹ 1399.00</h5>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Best of Electronics -->

<section class="my-5">
    <div class="container">
        
        <div class="d-flex">
            <div class="flex-grow-1"><h2>Best of Electronics</h2></div>
            <div><a href="{{url('category/electronics')}}" class="btn btn-sm theme-green-btn text-light rounded-pill px-3 py-2">View All</a></div>
            
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
                
                <a href="#"><img src="{{asset('assets/images/products/2.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Apple Watch</a></h6>
                    <h5 class="card-title text-center">₹ 1499.00</h5>
                    
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

<!-- Popular Categories -->

<section class="my-5">
    <div class="container">
        
        <div class="d-flex">
            <div class="flex-grow-1"><h2>Popular Categories</h2></div>
            <div><a href="{{url('category/electronics')}}" class="btn btn-sm theme-green-btn text-light rounded-pill px-3 py-2">View All</a></div>
            
            </div>
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card " >
                
                <a href="#"><img src="{{asset('assets/images/products/9.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center "><a href="#" class="text-dark text-decoration-none">Hand Bag</a></h6>
                    <h5 class="card-title text-center">₹ 799.00</h5>
                    
                </div>  
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/2.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Apple Watch</a></h6>
                    <h5 class="card-title text-center">₹ 1499.00</h5>
                    
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/10.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Laptop Bag</a></h6>
                    <h5 class="card-title text-center">₹ 599.00</h5>
                    
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


<!-- Recently Viewed -->

<section class="my-5">
    <div class="container">
        
        <div class="d-flex">
            <div class="flex-grow-1"><h2>Recently Viewed</h2></div>
            <div><a href="{{url('category/electronics')}}" class="btn btn-sm theme-orange-btn text-light rounded-pill px-3 py-2">View All</a></div>
            
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


@endsection
