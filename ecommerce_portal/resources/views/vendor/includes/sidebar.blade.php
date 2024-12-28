<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="{{url('vendor')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="sb-nav-link-icon"><i class="fa-brands fa-shopify"></i></div> Products
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{url('vendor/add-product')}}">Add</a></li>
                                    <li><a class="dropdown-item" href="{{url('vendor/view-product')}}">View</a></li>
                                    
                                </ul>
                                </li>
                            
                            
                            <a class="nav-link" href="{{url('vendor/orders')}}">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-clock"></i></div>
                                Orders
                            </a>
                            <a class="nav-link" href="{{url('vendor/users')}}">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-user"></i></i></div>
                                Users
                            </a>
                            <a class="nav-link" href="{{url('vendor/profile')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-address-card"></i></div>
                                Profile
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        John Doe
                    </div>
                </nav>
            </div>