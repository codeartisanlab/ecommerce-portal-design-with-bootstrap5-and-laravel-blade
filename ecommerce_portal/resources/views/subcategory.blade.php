@extends('layouts.main')

@push('title')
<title>Sub-Category</title>
@endpush

@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center text-secondary"><i class="fa-solid fa-list"></i> Sub-Category</h1>
</div>

<!-- Products -->

<section class="my-5">
    <div class="container">
        
        <div class="row theme-product">
           
            <div class="col-lg-3 mb-4">
                <div class="card" >
                
                <a href="{{url('category/electronics/tv/detail')}}"><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="{{url('category/electronics/tv/detail')}}" class="text-dark text-decoration-none">MI LED TV</a></h6>
                    <h5 class="card-title text-center">₹ 5999.00</h5>
                    
                </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Samsung LED TV</a></h6>
                    <h5 class="card-title text-center">₹ 7999.00</h5>
                    
                </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Sony LED TV</a></h6>
                    <h5 class="card-title text-center">₹ 15999.00</h5>
                    
                </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Onida LED TV</a></h6>
                    <h5 class="card-title text-center">₹ 12999.00</h5>
                    
                </div>
                </div>
            </div>


            <div class="col-lg-3 mb-4">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">MI LED TV</a></h6>
                    <h5 class="card-title text-center">₹ 5999.00</h5>
                    
                </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Samsung LED TV</a></h6>
                    <h5 class="card-title text-center">₹ 7999.00</h5>
                    
                </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Sony LED TV</a></h6>
                    <h5 class="card-title text-center">₹ 15999.00</h5>
                    
                </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Onida LED TV</a></h6>
                    <h5 class="card-title text-center">₹ 12999.00</h5>
                    
                </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection