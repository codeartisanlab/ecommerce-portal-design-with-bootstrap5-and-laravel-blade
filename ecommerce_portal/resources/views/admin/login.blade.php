@extends('vendor.layouts.main')
@push('title')
<title>Admin Login</title>
@endpush

@section('content')
<section>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                        <img src="{{asset('dashboard/assets/img/admin.jpg')}}" class="rounded-3 img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6 mt-5 p-5">
                        <div>
                            <form>
                                <div class="row">
                                    

                                    <div class="col-lg-12 mb-3">
                                    <label  class="form-label">Username</label>
                                        <input type="text" class="form-control" placeholder="John Doe">
                                    </div>

                                   

                                    <div class="col-lg-12 mb-3">
                                    <label  class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="******">
                                    </div>

                                   
                                </div>
                               
                                <a href="#" type="btn" class="btn btn-primary text-light form-control form-control-lg">Login</a>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection