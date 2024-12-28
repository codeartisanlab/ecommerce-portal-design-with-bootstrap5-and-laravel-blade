@extends('layouts.main')

@push('title')
<title>Register</title>
@endpush

@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center text-secondary"><i class="fa-solid fa-user"></i> User Register</h1>
</div>

<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                        <img src="{{asset('assets/images/register.jpg')}}" class="rounded-3 img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div>
                            <form>
                                <div class="mb-3">
                                <div  class="form-text mb-2">Please enter your mobile number</div>
                                    <input type="tel" class="form-control form-control-lg" placeholder="+91">
                                </div>
                               
                                <a href="{{url('register1')}}" type="btn" class="btn theme-orange-btn text-light form-control form-control-lg">Continue</a>
                                <div class="text-center p-5 my-5">Have an account? <a href="{{url('login')}}" class="text-decoration-none">Login</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection