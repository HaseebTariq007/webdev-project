@extends ('layouts.master')

@section ('title', 'Promotions')

@section ('content')
    <div class="section-2">

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="ms-4">
                            <input class="serch-box" type="search" name="search" placeholder="Search products...">
                        </div>
    
                        <h6 class="mt-5 ms-4"><b>SHOPPING CART</b></h6>
                        <div class="progress progres-baar ms-4">
                            <div class="progress-bar baar-color w-25" role="progressbar" aria-valuenow="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-3 ms-4">No products in the cart</p>
    
                        <ul class="categories">
                            <h6 class="mt-5"><b>CATEGORIES</b></h6>
                            <div class="progress progres-baar">
                                <div class="progress-bar baar-color w-25" role="progressbar" aria-valuenow="0" aria-valuemax="100"></div>
                            </div>
                            <li><a href="#" class="cat-list">Beauty & Slimming</a></li>
                            <li><a href="#" class="cat-list">Best Massager Chairs</a></li>
                            <li><a href="#" class="cat-list">Exercise Equipments</a></li>
                            <li><a href="#" class="cat-list">Massage Chairs</a></li>
                            <li><a href="#" class="cat-list">Massage Equipments</a></li>
                            <li><a href="#" class="cat-list">Most Selling Products</a></li>
                            <li><a href="#" class="cat-list">Promotions</a> </li>
                        </ul>
    
                        <h6 class="ms-4 mt-5"><b>FILTER</b></h6>

                        <div class="progress progres-baar ms-4">
                            <div class="progress-bar baar-color w-25" role="progressbar" aria-valuenow="0" aria-valuemax="100"></div>
                        </div>

                        <div class="position-relative ms-4 mt-4">
                            <div class="progress progres">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemax="0"></div>
                            </div>
    
                            <button type="button" class="position-absolute top-50 start-0 translate-middle rounded-pill progrs-butn"></button>
    
                            <button type="button" class="position-absolute top-50 start-50 translate-middle rounded-pill progrs-butn"></button>
                        </div>
    
    
                            <p class="mt-3 ms-4"><b>Price: Rs7,900-Rs649,000</b></p>
                            <button class="btn text-center mt-3 filtr-botn text-light ps-4 pe-4"><b>FILTER</b></button>
    
                        <h6 class="mt-5"><b>PRODUCT TAGS</b></h6>

                        <div class="progress progres-baar">
                            <div class="progress-bar baar-color w-25" role="progressbar" aria-valuenow="0" aria-valuemax="100"></div>
                        </div>

                        <div class="mt-3">
                            <button class="btn product-tags"><small><b>Best Massage Chair</b></small></button>
                            <button class="btn ms-2 product-tags"><small><b>Best Treadmill</b></small></button>
                        </div>
    
                        <div class="mt-3">
                            <button class="btn product-tags"><small><b>Bike</b></small></button>
                            <button class="btn ms-2 product-tags"><small><b>Fitness Bike</b></small></button>
                        </div>
    
                        <div class="mt-3">
                            <button class="btn product-tags"><small><b>full body massage chair</b></small></button>
                            <button class="btn ms-2 product-tags"><small><b>Galaxy Mobile Seat</b></small></button>
                        </div>
    
                        <div class="mt-3">
                            <button class="btn product-tags"><small><b>Hand Massager</b></small></button>
                            <button class="btn ms-2 product-tags"><small><b>latest technology</b></small></button>
                        </div>
                        
                        <div class="mt-3">
                            <button class="btn product-tags"><small><b>Magic Fit Ultra</b></small></button>
                            <button class="btn ms-2 product-tags"><small><b>Massage Chair</b></small></button>
                        </div>
    
                        <div class="mt-3">
                            <button class="btn product-tags"><small><b>Mobile Massage Seat</b></small></button>
                            <button class="btn ms-2 product-tags"><small><b>Slim & Shape</b></small></button>
                        </div>
                        
                        <div class="mt-3">
                            <button class="btn product-tags"><small><b>Sliming Product</b></small></button>
                            <button class="btn ms-2 product-tags"><small><b>Spin Rider</b></small></button>
                        </div>
    
                        <div class="mt-3">
                            <button class="btn product-tags"><small><b>Thigh Massager</b></small></button>
                            <button class="btn ms-2 product-tags"><small><b>Treadmill</b></small></button>
                        </div>
    
                        <div class="mt-3">
                            <button class="btn product-tags"><small><b>U Relax Massager</b></small></button>
                            <button class="btn ms-2 product-tags"><small><b>U relief Massager</b></small></button>
                        </div>
    
                        <div class="mt-3">
                            <button class="btn product-tags"><small><b>U Space</b></small></button>
                            <button class="btn ms-2 product-tags"><small><b>Weight Lose</b></small></button>
                            <button class="btn ms-2 product-tags"><small><b>X-Fit</b></small></button>
                        </div>
    
                        <div class="mt-3">
                            <button class="btn product-tags"><small><b>ZT-R15</b></small></button>
                            <button class="btn ms-2 product-tags"><small><b>zt-Sprint</b></small></button>
                            <button class="btn ms-2 product-tags"><small><b>Ztx</b></small></button>
                        </div>
                </div>

                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <div class="bg-light d-flex section-2-2">
                        <p class="text-muted">Showing 1-8 of 29 results</p>
                                <button class="text-muted btn pric-btn dropdown-toggle">Sort by price: hight to low</button>         
                    </div>
                        
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="card mt-5 text-center p-4">
                                <div class="position-relative">
                                    <img class="img-fluid" src="assets/images/adaz-360x360.jpg" alt="image not found">
            
                                    <div class="position-absolute top-0 start-100 translate-middle">
                                        <span class="badge rounded-pill rounded-circle pt-4 pb-4 pe-3 ps-3 sale-bdge">SALE</span>
                                    </div>
                                </div>
            
                                <h4 class="card-title mt-3 heading">uSpace Massage Chair</h4>
                                <div class="d-flex stars1">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star ms-2"></i>
                                    <i class="fa-solid fa-star ms-2"></i>
                                    <i class="fa-solid fa-star ms-2"></i>
                                    <i class="fa-solid fa-star ms-2"></i>
                                </div>
                                <p class="card-text mt-3 text-muted">uSpace is the latest best massager chair offered by Zero..</p>
            
                                <div class="d-flex">
                                    <del class="text-muted prev-pric1">Rs950,000</del>
                                    <span class="text-danger curr-pric1"><b>Rs649,000</b></span>
                                </div>
            
                                <button href="#" class="text-dark buton-cart1 mt-3">ADD TO CART<i
                                        class="fa-solid fa-arrow-right ms-2"></i></button>
            
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

                            <div class="card mt-5 text-center p-4">
                                <div class="position-relative">
                                    <img class="img-fluid" src="assets/images/thumbgalaxy4-600x600.jpg"
                                        alt="image not found">
                        
                                    <div class="position-absolute top-0 start-100 translate-middle">
                                        <span class="badge rounded-pill rounded-circle pt-4 pb-4 pe-3 ps-3 new-bdge">NEW</span>
                                    </div>
                                </div>
                        
                                <h4 class="card-title mt-4 heading">U-Galaxy Plus Massage Chair</h4>
                                <p class="card-text mt-3 text-muted">U-Galaxy Plus Massage chair is a Luxury product of a ...</p>
                                    <span class="text-dark text-center me-4"><b>Rs299,000</b></span>
                        
                                <button href="#" class="text-dark buton-cart2 mt-4">ADD TO CART<i
                                        class="fa-solid fa-arrow-right ms-2"></i></button>
                        
                            </div>
                        </div>
                        
                    </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="card mt-5 text-center p-4">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="assets/images/u-expert-massage-chair-1-360x360.jpg" alt="image not found">
                
                                        <div class="position-absolute top-0 start-100 translate-middle">
                                            <span class="badge rounded-pill rounded-circle pt-4 pb-4 pe-3 ps-3 sale-bdge">SALE</span>
                                        </div>
                                    </div>
                
                                    <h4 class="card-title mt-3 heading">U-EXPERT MASSAGE CHAIR</h4>
                                    <div class="d-flex stars1">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                    </div>
                                    <p class="card-text mt-3 text-muted">U-Expert Massage chair is a Luxury product in High-Quality ...</p>
                
                                    <div class="d-flex">
                                        <del class="text-muted prev-pric1">Rs360,000</del>
                                        <span class="text-danger curr-pric1"><b>Rs280,000</b></span>
                                    </div>
                
                                    <button href="#" class="text-dark buton-cart1 mt-3">ADD TO CART<i
                                            class="fa-solid fa-arrow-right ms-2"></i></button>
                
                                </div>
                            </div>
                            
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="card mt-5 text-center p-4">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="assets/images/U-Shine-01-1-360x360.jpg" alt="image not found">
                
                                        <div class="position-absolute top-0 start-100 translate-middle">
                                            <span class="badge rounded-pill rounded-circle pt-4 pb-4 pe-3 ps-3 sale-bdge">SALE</span>
                                        </div>
                                    </div>
                
                                    <h4 class="card-title mt-3 heading">U-SHINE MASSAGE CHAIR</h4>
                                    <div class="d-flex stars1">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                    </div>
                                    <p class="card-text mt-3 text-muted">Zero Healthcare presenting you the Advanced U-Shine Massage ...</p>
                
                                    <div class="d-flex">
                                        <del class="text-muted prev-pric1">Rs419,000</del>
                                        <span class="text-danger curr-pric1"><b>Rs279,000</b></span>
                                    </div>
                
                                    <button href="#" class="text-dark buton-cart1 mt-3">ADD TO CART<i
                                            class="fa-solid fa-arrow-right ms-2"></i></button>
                
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="card mt-5 text-center p-4">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="assets/images/u-galaxy-massage-chair-pakistan-1024x1024.jpg" alt="image not found">
                
                                        <div class="position-absolute top-0 start-100 translate-middle">
                                            <span class="badge rounded-pill rounded-circle pt-4 pb-4 pe-3 ps-3 sale-bdge">SALE</span>
                                        </div>
                                    </div>
                
                                    <h4 class="card-title mt-3 heading">U-GALAXY MASSAGE CHAIR</h4>
                                    <div class="d-flex stars1">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                    </div>
                                    <p class="card-text mt-3 text-muted">Zero healthcare brings a dream massage chair (U-Galaxy) ...</p>
                
                                    <div class="d-flex">
                                        <del class="text-muted prev-pric1">Rs320,000</del>
                                        <span class="text-danger curr-pric1"><b>Rs159,000</b></span>
                                    </div>
                
                                    <button href="#" class="text-dark buton-cart1 mt-3">ADD TO CART<i
                                            class="fa-solid fa-arrow-right ms-2"></i></button>
                
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

                                <div class="card mt-5 text-center ms-3 p-4">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="assets/images/001-3-360x360.jpg"
                                            alt="image not found">
                            
                                        <div class="position-absolute top-0 start-100 translate-middle">
                                            <span class="badge rounded-pill rounded-circle pt-4 pb-4 pe-3 ps-3 sale-bdge">SALE</span>
                                        </div>
                                    </div>
                            
                                    <h4 class="card-title mt-4 heading">U-ROBOT X MASSAGE CHAIR</h4>
                                    <div class="d-flex stars2">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                    </div>
                                    <p class="card-text mt-3 text-muted">Zero Gravity Massage Neck and shoulder Waist and back 48 ...</p>
                            
                                    <div class="d-flex">
                                        <del class="text-muted prev-pric2">Rs219,000</del>
                                        <span class="text-danger curr-pric2"><b>Rs129,000</b></span>
                                    </div>
                            
                                    <button href="#" class="text-dark buton-cart2 mt-4">ADD TO CART<i
                                            class="fa-solid fa-arrow-right ms-2"></i></button>
                            
                                </div>
                            </div>
                            
                        </div>
                        
                    
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="card mt-5 text-center ms-3 p-4">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="assets/images/ztx-treadmill-by-zero-360x360.jpg"
                                            alt="image not found">
                
                                        <div class="position-absolute top-0 start-100 translate-middle">
                                            <span class="badge rounded-pill rounded-circle pt-4 pb-4 pe-3 ps-3 sale-bdge">SALE</span>
                                        </div>
                                    </div>
                
                                    <h4 class="card-title mt-4 heading">ZTX TREADMILL</h4>
                                    <div class="d-flex stars2">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                    </div>
                                    <p class="card-text mt-3 text-muted">ZTX-Treadmill is an intermediate spec treadmill design..</p>
                
                                    <div class="d-flex">
                                        <del class="text-muted prev-pric2">Rs130,000</del>
                                        <span class="text-danger curr-pric2"><b>Rs100,000</b></span>
                                    </div>
                
                                    <button href="#" class="text-dark buton-cart2 mt-4">ADD TO CART<i
                                            class="fa-solid fa-arrow-right ms-2"></i></button>
                
                                </div>
                            </div>


                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="card mt-5 text-center p-4">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="assets/images/ztr-15-treadmill-by-zero-360x360.jpg" alt="image not found">
                
                                        <div class="position-absolute top-0 start-100 translate-middle">
                                            <span class="badge rounded-pill rounded-circle pt-4 pb-4 pe-3 ps-3 sale-bdge">SALE</span>
                                        </div>
                                    </div>
                
                                    <h4 class="card-title mt-3 heading">ZT_R15 TREADMILL</h4>
                                    <div class="d-flex stars2">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                        <i class="fa-solid fa-star ms-2"></i>
                                    </div>
                                    <p class="card-text mt-3 text-muted">ZTR-15 Treadmill is our trending intermediate spec ...</p>
                
                                    <div class="d-flex">
                                        <del class="text-muted prev-pric1">Rs130,000</del>
                                        <span class="text-danger curr-pric1"><b>Rs79,000</b></span>
                                    </div>
                
                                    <button href="#" class="text-dark buton-cart1 mt-3">ADD TO CART<i
                                            class="fa-solid fa-arrow-right ms-2"></i></button>
                
                                </div>
                            </div>
                        </div>

                        <div class="page-numbers-promo">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link numbering-1">1</a>
                                </li>

                                <li class="page-item">
                                    <a href="#" class="page-link ms-2 numbering">2</a>
                                </li>

                                <li class="page-item">
                                    <a href="#" class="page-link ms-2 numbering"><i class="fa-solid fa-arrow-right next-icon"></i></a>
                                </li>
                            </ul>
                        </div>
                        

                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
@endsection ('content')












