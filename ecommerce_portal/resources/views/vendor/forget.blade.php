@extends('vendor.layouts.main')
@push('title')
<title>Forgotten password</title>
@endpush

@section('content')
<section>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                        <img src="{{asset('dashboard/assets/img/vendor.jpg')}}" class="rounded-3 img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6 mt-5 p-5">
                        <div>
                            <form>
                                <div class="row">
                                    

                                    <div class="col-lg-12 mb-3">
                                    <label  class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" placeholder="+91 ">
                                    </div>

                                   

                                    <div class="col-lg-12 mb-3">
                                    <label  class="form-label">New Password</label>
                                        <input type="password" class="form-control" placeholder="******">
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                    <label  class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="******">
                                    </div>

                                   
                                </div>
                               
                                <a href="#" type="btn" class="btn btn-primary text-light form-control form-control-lg">Change Password</a>
                                <div class="text-center p-2">Have an account? <a href="{{url('vendor/login')}}" class="text-decoration-none">Login</a></div>

                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection