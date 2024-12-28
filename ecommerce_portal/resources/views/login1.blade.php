@extends('layouts.main')

@push('title')
<title>Login</title>
@endpush

@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center text-secondary"><i class="fa-solid fa-user"></i> User Login</h1>
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
                                <div  class="form-text mb-2">Please enter your OTP</div>
                                    <input type="password" class="form-control form-control-lg" placeholder="******">
                                </div>
                               
                                <button type="submit" class="btn theme-orange-btn text-light form-control form-control-lg">Login</button>
                                <div class="text-center p-5 my-5">Don't have an account? <a href="{{url('register')}}" class="text-decoration-none">Signup</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection