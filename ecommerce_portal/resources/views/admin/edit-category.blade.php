@extends('admin.includes.main')
@push('title')
<title>Edit Category</title>
@endpush

@section('content')
        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div class="card p-4 mt-4">
                            <div class="row">
                            
                            <div class="col-xl-8 col-md-8">
                                    <h4>Edit Category</h4>

                                    
                                        <div class="row mt-3">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Category Name</label>
                                            <input type="text" class="form-control" value="Electronics">
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Commission (%)</label>
                                            <input type="text" class="form-control" value="20">
                                        </div>

                                        
                                        <div class="col-lg-3">
                                            <button class="btn btn-primary ">Edit Category</button>
                                        </div>
                                        </div>
                                    
                            </div>

                            
                            </div>

                            
                        </div>
                </main>


                

@endsection
                