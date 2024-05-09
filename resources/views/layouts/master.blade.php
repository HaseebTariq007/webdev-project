<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap.min.css') }}">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light text-dark pt-4 pb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/index') }}"><img src="assets/images/logo.png" class="w-100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 zero-nav text-dark">
                    <li class="nav-item nav-pages">
                        <a class="nav-link active pages" aria-current="page" href="{{ url('/index')}}">Home</a>
                    </li>

                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle pages" href="{{ url('/about') }}" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item bg-light text-dark" href="{{ url('/about') }}">Company Profile</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle pages" href="{{ url('/products')}}" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ url('/products') }}">Massage Chairs</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ url('/products') }}">Massage Equipments</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ url('/products') }}">Exercise Equipments</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ url('/products') }}">Beauty & Slimming</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ url('/products') }}">Best Seller Massager Chairs</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ url('/products') }}">Most Selling Products</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item me-3">
                        <a class="nav-link pages" aria-current="page" href="{{ url('/promotions')}}">Promotions</a>
                    </li>

                    <li class="nav-item me-3">
                        <a class="nav-link pages" aria-current="page" href="{{ url('/contact')}}">Contact</a>
                    </li>

                    <li class="nav-item me-3">
                        <a class="nav-link pages" aria-current="page" href="{{ url('/blog')}}">Blogs</a>
                    </li>

                </ul>
                <!-- <a href="{{ url('/user') }}" style="color:black;"><i class="fa-regular fa-user avatar-icon"></i></a> -->
                <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownUserLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-regular fa-user avatar-icon" style="color:black;"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownUserLink">
                    <li><a class="dropdown-item" href="{{ url('/login') }}">Login</a></li>
                    <li><a class="dropdown-item" href="{{ url('/user') }}">Signup</a></li>
                </ul>
            </div>
                <i class="fa-solid fa-bag-shopping bag-icon"></i>
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
            </div>
        </div>

    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
    <div class="bg-dark text-center p-5">
        <p class="members"><b>Subscribe for Members</b></p>
        <h4 class="text-light">Get Updates on latest products & Hot Offers!</h4>
        <div class="d-flex mt-5 emal-sub mb-5">
            <div>
                <input class=" emal-box" type="email" name="email" placeholder="Your email..">
            </div>
            <div>
                <button class="btn text-center sub-butn"><b>SUBSCRIBE</b></button>
            </div> 
        </div>
</div>

<div class="bordr-lin mt-0 w-100">
</div>

<div class="bg-dark pt-5 pb-5 mt-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <img class="img-fluid" src="assets/images/zero_health-care-logo_1x-white.png" alt="img not found">
                <p class="text-muted mt-3">Zero Healthcare is a brand that provides you a series of Top quality Massage Chairs & Exercise products
                    which aid in creating zero-illness & zero-stress lifestyle.</p>
                    <div class="d-flex mt-5">
                        <div>
                            <i class="fa-solid fa-phone phon-icon"></i>
                        </div>
                        <div class="ms-3">
                            <a class="numb" href="#"><h5><b>0311 6331109</b></h5></a>
                            <p class="round">Round-the-clock</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mt-4">
                        <div class="ms-4">
                            <i class="fa-brands fa-twitter twitr-icon"></i>
                        </div>

                        <div class="ms-4">
                            <i class="fa-brands fa-facebook-f fb-icon"></i>
                        </div>

                        <div class="ms-4">
                            <i class="fa-brands fa-instagram insta-icon"></i>
                        </div>

                        <div class="ms-4">
                            <i class="fa-brands fa-youtube utube-icon"></i>
                        </div>
                    </div>
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <h3 class="exp ms-4">Explore</h3>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <ul class="ser-list mt-3">
                            <a href="{{ url('/products') }}" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Massage Chairs</b></p></li></a>
                            <a href="{{ url('/products') }}" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Massage Equipments</b></p></li></a>
                            <a href="{{ url('/products') }}" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Exercise Equipments</b></p></li></a>
                            <a href="{{ url('/products') }}" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Beauty & Slimming</b></p></li></a>
                            <a href="{{ url('/promotions')}}" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Promotion</b></p></li></a>
                            <a href="{{ url('/contact') }}" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Call</b></p></li></a>
                        </ul>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <ul class="ser-list mt-3">
                            <a href="{{ url ('/index') }}" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Home</b></p></li></a>
                            <a href="{{ url ('/blog') }}" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Blogs</b></p></li></a>
                            <a href="{{ url ('/contact') }}" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Contact Us</b></p></li></a>
                            <a href="#" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Testimonials</b></p></li></a>
                            <a href="#" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Best Massager Chairs</b></p></li></a>
                        </ul>
                    </div>
                </div>   
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <h3 class="exp ms-4">Information</h3>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <ul class="ser-list mt-3">
                        <a href="#" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>My account</b></p></li></a>
                        <a href="#" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Refund Policy</b></p></li></a>
                        <a href="#" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Company Profile</b></p></li></a>
                        <a href="#" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Card Management</b></p></li></a>
                    </ul>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <ul class="ser-list mt-3">
                        <a href="#" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Faqs</b></p></li></a>
                        <a href="#" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Google Review</b></p></li></a>
                        <a href="#" class="ser-nam"><li class="d-flex"><p class="sign"><b>&gt;</b></p><p class="ms-2"><b>Order Cancelled</b></p></li></a>
                    </ul>
                </div>
            </div>
        </div>
    
        </div>
    </div>
</div>


<div class="bg-dark pb-3">
    <div class="container">
        <p class="text-light">Proudly powered by <span style="color: #FF8A27;">lpsum Solutions</span>&copy; All Rights Reserves-2021</p>
    </div>  
    </div>
</div>
</footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>