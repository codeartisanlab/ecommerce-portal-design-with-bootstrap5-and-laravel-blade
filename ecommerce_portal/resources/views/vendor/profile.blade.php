@extends('vendor.includes.main')
@push('title')
<title>Profile</title>
@endpush

@section('content')
        
            <div id="layoutSidenav_content">
                <main>
                   <div class="container p-4">
                        <div class="card p-4">
                            <div class="row">
                            
                            <div class="col-xl-8 col-md-8">
                                    <h4>Basic Information</h4>

                                    
                                        <div class="row mt-3">

                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Identification Number</label>
                                            <input type="text" class="form-control" placeholder="PAN/Aadhar no.">
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label">Business Name</label>
                                            <input type="text" class="form-control" placeholder="ABC PVT. LTD.">
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control" placeholder="John Doe">
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" placeholder="john@gmail.com">
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" placeholder="+91 ">
                                        </div>
                                        
                                        </div>
                                    
                            </div>

                            <div class="col-xl-4 col-md-4 mt-5">
                                <div class="text-center">
                                    <img src="{{asset('dashboard/assets/img/user.png')}}" style="width:155px;">
                                    <div class="mt-3">
                                        <label for="image" class="form-label btn btn-dark">Choose Image</label>
                                        <input type="file" class="form-control d-none" id="image">
                                    </div>
                                </div>

                            </div>
                            </div>

                            
                        </div>

                        <div class="card p-4 mt-4">
                            <div class="row">
                            
                            <div class="col-xl-12 col-md-12">
                                    <h4>Business Information</h4>

                                    
                                        <div class="row mt-3">
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label">Business Type</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select Business type</option>
                                                        <option value="1">Sole Proprietor</option>
                                                        <option value="2">Partnership</option>
                                                        <option value="3">Corporation</option>
                                                    </select>
                                            </div>
                                            
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">GST No.</label>
                                                <input type="text" class="form-control" placeholder="ABC123ZXA456Cl">
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Business Category</label>
                                                <input type="text" class="form-control" placeholder="Deal in Clothes">
                                            </div>

                                            
                                        </div>
                                    
                            </div>

                            
                            </div>

                            
                        </div>

                        <div class="card p-4 mt-4">
                            <div class="row">
                            
                            <div class="col-xl-12 col-md-12">
                                    <h4>Payment Information</h4>

                                    
                                        <div class="row mt-3">
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Bank Account Number</label>
                                                <input type="text" class="form-control" placeholder="0785623021454">
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Prefer Payment Method</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select Payment Method</option>
                                                        <option value="1">PayPal</option>
                                                        <option value="2">Bank Transfet</option>
                                                        <option value="3">E wallet</option>
                                                    </select>
                                            </div>

                                            <div class="col-lg-3">
                                                <button class="btn btn-primary ">Save Changes</button>
                                            </div>
                                               
                                        </div>
                                    
                            </div>

                            
                            </div>

                            
                        </div>
                      
                   </div>
                </main>
            
                

@endsection
                