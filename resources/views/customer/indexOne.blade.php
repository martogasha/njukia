<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 May 2025 11:26:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mylonix - Home</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Mylonix - Homepage">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="asseti/images/icons/favicon.png">


    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700', 'Poppins:300,400,500,600,700,800', 'Oswald:300,400,500,600,700,800', 'Playfair+Display:900', 'Shadows+Into+Light:400']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'asseti/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="asseti/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="asseti/css/demo1.min.css">
    <link rel="stylesheet" type="text/css" href="asseti/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="asseti/vendor/simple-line-icons/css/simple-line-icons.min.css">
</head>

<body>
    <div class="page-wrapper">
  
        <!-- End .top-notice -->

        <header class="header home">
            <div class="header-top bg-primary text-uppercase">
                <div class="container">
                    <div class="header-left">
                        <div class="header mr-auto mr-sm-3 mr-md-0">
                            <a href="#" class="pl-0"><i class="flag flag-kenya"></i>ENG</a>
                        
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <div class="header ml-3 pl-1">
                            <a href="#">KSH</a>
                         
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right header-dropdowns ml-0 ml-sm-auto">
                        <p class="top-message mb-0 d-none d-sm-block">Welcome To Mylonix!</p>
                        <div class="header-dropdown dropdown-expanded mr-3">
                            <a href="#">Links</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="dashboard.html">My Account</a></li>
                                    <li><a href="demo1-contact.html">Contact Us</a></li>
                                    <li><a href="{{url('shop')}}">Shop</a></li>
                                    <li><a href="{{url('cart')}}">Cart</a></li>
                                    <li><a href="{{url('Login')}}">Log In</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <span class="separator"></span>

                        <div class="social-icons">
                            <a href="#" class="social-icon social-facebook icon-facebook ml-0" target="_blank"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter ml-0" target="_blank"></a>
                            <a href="#" class="social-icon social-instagram icon-instagram ml-0" target="_blank"></a>
                        </div>
                        <!-- End .social-icons -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-top -->

            <div class="header-middle text-dark sticky-header">
                <div class="container">
                    <div class="header-left col-lg-2 w-auto pl-0">
                        <button class="mobile-menu-toggler mr-2" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="{{url('/')}}" class="logo">
                            <img src="asseti/images/logo.png" width="111" height="44" alt="Porto Logo">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right w-lg-max pl-2">
                        <div class="header-search header-icon header-search-inline header-search-category w-lg-max">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>
                                            <option value="4">Tvs & Audios</option>
                                            <option value="12">- Appliances</option>
                                            <option value="13">- Gaming</option>
                                            <option value="66">- Home & Office</option>
                                            <option value="5">Electronics</option>
                                            <option value="21">- Smart TVs</option>
                                            <option value="22">- Cameras</option>
                                            <option value="7">Computing</option>
                                         
                                        </select>
                                    </div>
                                    <!-- End .select-custom -->
                                    <button class="btn icon-magnifier" type="submit"></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->

                        <div class="header-contact d-none d-lg-flex align-items-center pr-xl-5 mr-5 mr-xl-3 ml-5">
                            <i class="icon-phone-2"></i>
                            <h6 class="pt-1 line-height-1">Call us now<a href="tel:#" class="d-block text-dark ls-10 pt-1">+254 728 422320</a></h6>
                        </div>
                        <!-- End .header-contact -->

                        <a href="login.html" class="header-icon header-icon-user"><i class="icon-user-2"></i></a>

                        <a href="wishlist.html" class="header-icon"><i class="icon-wishlist-2"></i></a>

                        <div class="dropdown cart-dropdown">
                            <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="minicart-icon"></i>
                                <span class="cart-count badge-circle">{{\Illuminate\Support\Facades\Session::has('cat') ? \Illuminate\Support\Facades\Session::get('cat')->totalQty: ''}}</span>
                            </a>

                            <div class="cart-overlay"></div>

                            <div class="dropdown-menu mobile-cart">
                                <a href="#" title="Close (Esc)" class="btn-close">×</a>

                                 <div class="dropdownmenu-wrapper custom-scrollbar">
                                    <div class="dropdown-cart-header">Shopping Cart</div>
                                    <!-- End .dropdown-cart-header -->

                                    <div class="dropdown-cart-products">
                                    @if(isset($products))
                                        @foreach($products as $product)
                                            <div class="product">
                                                <div class="product-details">
                                                    <h4 class="product-title">
                                                        <a href="product.html">{{$product['item']['product_name']}}</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">{{$product['quantity']}}</span> × Ksh {{$product['item']['product_price']}}
                                                    </span>
                                                </div>
                                                <!-- End .product-details -->

                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="{{asset('uploads/product/'.$product['item']['product_image'])}}" alt="product" width="80" height="80">
                                                    </a>

                                                    <a href="{{url('cartRemove',$product['item']['id'])}}" class="btn-remove" title="Remove Product"><span>×</span></a>
                                                </figure>
                                            </div>
                                        @endforeach
                                    @endif
                                        <!-- End .product -->

                                        <!-- End .product -->
                                    </div>
                                    <!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>SUBTOTAL:</span>

                                        <span class="cart-total-price float-right">Ksh {{$totalPrice}}</span>
                                    </div>
                                    <!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="{{url('cart')}}" class="btn btn-gray btn-block view-cart">View
											Cart</a>
                                        <a href="{{url('checkout')}}" class="btn btn-dark btn-block">Checkout</a>
                                    </div>
                                    <!-- End .dropdown-cart-total -->
                                </div>
                                <!-- End .dropdownmenu-wrapper -->
                            </div>
                            <!-- End .dropdown-menu -->
                        </div>
                        <!-- End .dropdown -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->
        </header>
        <!-- End .header -->

        <main class="main home">
            <div class="container mb-2">
               

                <div class="row">
                    <div class="col-lg-9">
                       <div class="slider">
  <div class="slides" id="slides">
     <div class="slide">
      <a href="https://mylonixtech.co.ke/productDetail/281" target="_blank">
        <img src="asseti/images/demoes/demo1/slider/slider.jpg" alt="Slide 3">
      </a>
    </div>
    <div class="slide">
      <a href="https://mylonixtech.co.ke/productDetail/282" target="_blank">
        <img src="asseti/images/demoes/demo1/slider/slider1.jpg" alt="Slide 1">
      </a>
    </div>
    <div class="slide">
      <a href="https://mylonixtech.co.ke/productDetail/283" target="_blank">
        <img src="asseti/images/demoes/demo1/slider/slider2.jpg" alt="Slide 2">
      </a>
    </div>
 
  
  </div>
</div>

<div class="indicators" id="indicators">
  <div class="indicator active"><div class="progress"></div></div>
  <div class="indicator"><div class="progress"></div></div>
  <div class="indicator"><div class="progress"></div></div>
</div>
                        <!-- End .home-slider -->
                         
<br>
                    

                        <h2 class="section-title ls-n-10 m-b-4 appear-animate" data-animation-name="fadeInUpShorter">
                            Best Offers</h2>

                        <div class="products-slider owl-carousel owl-theme dots-top dots-small m-b-1 pb-1 appear-animate" data-animation-name="fadeInUpShorter">
                            @foreach($bests as $best)
                            <div class="product-default inner-quickview inner-icon">
                                <figure class="img-effect">
                                    <a href="{{url('productDetail',$best->id)}}">
                                        <img src="{{asset('uploads/product/'.$best->product_image)}}" width="205" height="205" alt="product">
                                        <img src="{{asset('uploads/product/'.$best->product_image)}}" width="205" height="205" alt="product">
                                    </a>
                                   
                                    <div class="btn-icon-group">
                                        <a href="{{url('productDetail',$best->id)}}" class="btn-icon btn-add-cart"><i
                                                class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                               
                                    <!-- End .product-countdown-container -->
                                </figure>
                                <div class="product-details">
                                 
                                    <h3 class="product-title"> <a href="demo1-product.html">{{$best->product_name}}</a> </h3>
                                    <div class="ratings-container">
                                      
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Ksh {{ number_format($best->product_price, 0, '.', ',') }}</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            @endforeach
                        
                        </div>
                        <h2 class="section-title ls-n-10 m-b-4 appear-animate" data-animation-name="fadeInUpShorter">
                            Featured Products</h2>

                        <div class="products-slider owl-carousel owl-theme dots-top dots-small m-b-1 pb-1 appear-animate" data-animation-name="fadeInUpShorter">
                            @foreach($computers as $computer)
                            <div class="product-default inner-quickview inner-icon">
                                <figure class="img-effect">
                                    <a href="{{url('productDetail',$computer->id)}}">
                                        <img src="{{asset('uploads/product/'.$computer->product_image)}}" width="205" height="205" alt="product">
                                        <img src="{{asset('uploads/product/'.$computer->product_image)}}" width="205" height="205" alt="product">
                                    </a>
                                   
                                    <div class="btn-icon-group">
                                        <a href="{{url('productDetail',$computer->id)}}" class="btn-icon btn-add-cart"><i
                                                class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                  
                                    <!-- End .product-countdown-container -->
                                </figure>
                                <div class="product-details">
                                 
                                    <h3 class="product-title"> <a href="demo1-product.html">{{$computer->product_name}}</a> </h3>
                                    <div class="ratings-container">
                                       
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Ksh {{ number_format($computer->product_price, 0, '.', ',') }}</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            @endforeach
                        
                        </div>
                            <div class="banners-container m-b-2 owl-carousel owl-theme" data-owl-options="{
							'dots': false,
							'margin': 20,
							'loop': false,
							'responsive': {
								'480': {
									'items': 2
								},
								'768': {
									'items': 3
								}
							}
						}">
                         
                            <!-- End .banner -->
                        </div>
                        <div class="brands-slider owl-carousel owl-theme images-center appear-animate" data-animation-name="fadeIn" data-animation-duration="700" data-owl-options="{
                            'margin': 0,
							'responsive': {
								'768': {
									'items': 4
                                },
                                '991': {
									'items': 4
                                },
                                '1200': {
									'items': 5
								}
							}
						}">
                            <a href="{{url('Shop',5)}}"><img src="asseti/images/brands/small/brand1.png" width="140" height="60" alt="brand"></a>
                            <a href="{{url('Shop',17)}}"><img src="asseti/images/brands/small/brand2.png" width="140" height="60" alt="brand"></a>
                            <a href="{{url('Shop',1)}}"><img src="asseti/images/brands/small/brand3.png" width="140" height="60" alt="brand"></a>
                            <a href=""><img src="asseti/images/brands/small/brand4.png" width="140" height="60" alt="brand"></a>
                            <a href="{{url('Shop',8)}}"><img src="asseti/images/brands/small/brand5.png" width="140" height="60" alt="brand"></a>
                            <a href=""><img src="asseti/images/brands/small/brand6.png" width="140" height="60" alt="brand"></a>
                        </div>
                        <!-- End .featured-proucts -->
    <h2 class="section-title ls-n-10 m-b-4 appear-animate" data-animation-name="fadeInUpShorter">
                            Accessories</h2>

                        <div class="products-slider owl-carousel owl-theme dots-top dots-small m-b-1 pb-1 appear-animate" data-animation-name="fadeInUpShorter">
                            @foreach($projectors as $projector)
                            <div class="product-default inner-quickview inner-icon">
                                <figure class="img-effect">
                                    <a href="{{url('productDetail',$projector->id)}}">
                                        <img src="{{asset('uploads/product/'.$projector->product_image)}}" width="205" height="205" alt="product">
                                        <img src="{{asset('uploads/product/'.$projector->product_image)}}" width="205" height="205" alt="product">
                                    </a>
                                   
                                    <div class="btn-icon-group">
                                        <a href="{{url('productDetail',$projector->id)}}" class="btn-icon btn-add-cart"><i
                                                class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                  
                                    <!-- End .product-countdown-container -->
                                </figure>
                                <div class="product-details">
                                 
                                    <h3 class="product-title"> <a href="{{url('productDetail',$projector->id)}}">{{$projector->product_name}}</a> </h3>
                                    <div class="ratings-container">
                                       
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">Ksh {{ number_format($projector->product_price, 0, '.', ',') }}</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            @endforeach
                        
                        </div>
                        
                        <!-- End .brands-slider -->

                        <div class="row products-widgets">
                            <div class="col-sm-6 col-md-4 pb-4 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="200">
                                <div class="product-column">
                                    <h3 class="section-sub-title ls-n-20">Top Rated Products</h3>
                                @foreach($homes as $home)
                                    <div class="product-default left-details product-widget">
                                        <figure>
                                            <a href="{{url('productDetail',$home->id)}}">
                                                <img src="{{asset('uploads/product/'.$home->product_image)}}" width="84" height="84" alt="product">
                                                <img src="{{asset('uploads/product/'.$home->product_image)}}" width="84" height="84" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-title"> <a href="{{url('productDetail',$home->id)}}">{{$home->product_name}}</a> </h3>
                                            <div class="ratings-container">
                                              
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">Ksh {{ number_format($home->product_price, 0, '.', ',') }}</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                @endforeach
                                
                                </div>
                                <!-- End .product-column -->
                            </div>
                            <!-- End .col-md-4 -->

                            <div class="col-sm-6 col-md-4 pb-4 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="500">
                                <div class="product-column">
                                    <h3 class="section-sub-title ls-n-20">Best Selling Products</h3>
                                @foreach($offices as $office)
                                    <div class="product-default left-details product-widget">
                                        <figure>
                                            <a href="{{url('productDetail',$office->id)}}">
                                                <img src="{{asset('uploads/product/'.$office->product_image)}}" width="84" height="84" alt="product">
                                                <img src="{{asset('uploads/product/'.$office->product_image)}}" width="84" height="84" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-title"> <a href="{{url('productDetail',$office->id)}}">{{$office->product_name}}</a> </h3>
                                            <div class="ratings-container">
                                              
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">Ksh {{ number_format($office->product_price, 0, '.', ',') }}</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                @endforeach
                                </div>
                                <!-- End .product-column -->
                            </div>
                            <!-- End .col-md-4 -->

                            <div class="col-sm-6 col-md-4 pb-4 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="800">
                                <div class="product-column">
                                    <h3 class="section-sub-title ls-n-20">Latest Products</h3>
                                @foreach($toners as $toner)
                                    <div class="product-default left-details product-widget">
                                        <figure>
                                            <a href="{{url('productDetail',$toner->id)}}">
                                                <img src="{{asset('uploads/product/'.$toner->product_image)}}" width="84" height="84" alt="product">
                                                <img src="{{asset('uploads/product/'.$toner->product_image)}}" width="84" height="84" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-title"> <a href="{{url('productDetail',$toner->id)}}">{{$toner->product_name}}</a> </h3>
                                            <div class="ratings-container">
                                             
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">Ksh {{ number_format($toner->product_price, 0, '.', ',') }}</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                @endforeach
                                </div>
                                <!-- End .product-column -->
                            </div>
                            <!-- End .col-md-4 -->
                        </div>
                        <!-- End .row -->

                        <hr class="mt-1 mb-3 pb-2">

                        <div class="feature-boxes-container">
                            <div class="row">
                                <div class="col-md-4 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="200">
                                    <div class="feature-box  feature-box-simple text-center">
                                        <i class="icon-earphones-alt"></i>

                                        <div class="feature-box-content p-0">
                                            <h3 class="mb-0 pb-1">Customer Support</h3>
                                            <h5 class="mb-1 pb-1">Need Assistance?</h5>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                        </div>
                                        <!-- End .feature-box-content -->
                                    </div>
                                    <!-- End .feature-box -->
                                </div>
                                <!-- End .col-md-4 -->

                                <div class="col-md-4 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="400">
                                    <div class="feature-box feature-box-simple text-center">
                                        <i class="icon-credit-card"></i>

                                        <div class="feature-box-content p-0">
                                            <h3 class="mb-0 pb-1">Secured Payment</h3>
                                            <h5 class="mb-1 pb-1">Safe & Fast</h5>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                        </div>
                                        <!-- End .feature-box-content -->
                                    </div>
                                    <!-- End .feature-box -->
                                </div>
                                <!-- End .col-md-4 -->

                                <div class="col-md-4 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="600">
                                    <div class="feature-box feature-box-simple text-center">
                                        <i class="icon-action-undo"></i>

                                        <div class="feature-box-content p-0">
                                            <h3 class="mb-0 pb-1">Returns</h3>
                                            <h5 class="mb-1 pb-1">Easy & Free</h5>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                        </div>
                                        <!-- End .feature-box-content -->
                                    </div>
                                    <!-- End .feature-box -->
                                </div>
                                <!-- End .col-md-4 -->
                            </div>
                            <!-- End .row -->
                        </div>
                        <!-- End .feature-boxes-container -->
                    </div>
                    <!-- End .col-lg-9 -->

                    <div class="sidebar-overlay"></div>
                    <aside class="sidebar-home col-lg-3 order-lg-first mobile-sidebar">
                        <div class="side-menu-wrapper text-uppercase mb-2 d-none d-lg-block">
                            <h2 class="side-menu-title bg-gray ls-n-25">Browse Categories</h2>

                            <nav class="side-nav">
                                <ul class="menu menu-vertical sf-arrows">
                                    <li class="active"><a href="demo1.html"><i class="icon-home"></i>HOME</a></li>
                             
                              
                                    
                                    <li><a href="{{url('Shop',23)}}"><i class="icon-cat-gift"></i>ACCCESSORIES!</a></li>
                                        <li>
                                        <a href="#" class="sf-with-ul"><i class="sicon-badge"></i>CATEGORIES</a>
                                    
                                    <ul>
                                        @foreach($categories as $category)
                                        <li><a href="{{url('Shop',$category->id)}}">{{$category->category_name}}</a></li>
                                        @endforeach
                                    </ul>
                                    </li>
                                    <li><a href="blog.html"><i class="sicon-book-open"></i>Blog</a></li>
                                    
                                </ul>
                            </nav>
                        </div>
                        <!-- End .side-menu-container -->

                        <!-- End .widget -->

                       
                        <!-- End .widget -->

                 
                        <!-- End .widget -->

                            <div class="widget widget-featured">
                                <h3 class="widget-title">Accessories</h3>

                                <div class="widget-body">
                                    <div class="owl-carousel widget-featured-products">
                                        <div class="featured-col">
                                    @foreach($projectors as $projector)
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="{{url('productDetail',$projector->id)}}">
                                                    <img src="{{asset('uploads/product/'.$projector->product_image)}}" width="84" height="84" alt="product">
                                                    <img src="{{asset('uploads/product/'.$projector->product_image)}}" width="84" height="84" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title"> <a href="{{url('productDetail',$projector->id)}}">{{$projector->product_name}}</a> </h3>
                                                <div class="ratings-container">
                                                  
                                                    <!-- End .product-ratings -->
                                                </div>
                                                <!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">Ksh {{ number_format($projector->product_price, 0, '.', ',') }}</span>
                                                </div>
                                                <!-- End .price-box -->
                                            </div>
                                            <!-- End .product-details -->
                                        </div>
                                    @endforeach
                                        </div>
                                        <!-- End .featured-col -->

                                        <div class="featured-col">
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="asseti/images/products/small/product-1.jpg" width="75" height="75" alt="product" />
                                                        <img src="asseti/images/products/small/product-1-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Ultimate 3D
															Bluetooth Speaker</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="asseti/images/products/small/product-2.jpg" width="75" height="75" alt="product" />
                                                        <img src="asseti/images/products/small/product-2-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Brown Women Casual
															HandBag</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="asseti/images/products/small/product-3.jpg" width="75" height="75" alt="product" />
                                                        <img src="asseti/images/products/small/product-3-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Circled Ultimate
															3D Speaker</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <!-- End .featured-col -->
                                    </div>
                                    <!-- End .widget-featured-slider -->
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .posts-slider -->
                        <!-- End .widget -->
                    </aside>
                    <!-- End .col-lg-3 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->
        </main>
        <!-- End .main -->

        <footer class="footer bg-dark position-relative">
            <div class="footer-middle">
                <div class="container position-static">
                    <div class="footer-ribbon">Get in touch</div>

                    <div class="row">
                        <div class="col-lg-3 col-sm-6 pb-2 pb-sm-0">
                            <div class="widget">
                                <h4 class="widget-title">About Us</h4>
                                <a href="{{url('/')}}">
                                    <img src="asseti/images/logo-footer.png" alt="Logo" class="logo-footer">
                                </a>
                                <p class="m-b-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus. Duis nec vestibulum magna, et dapibus lacus.</p>
                                <a href="#" class="read-more text-white">read more...</a>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6 pb-4 pb-sm-0">
                            <div class="widget mb-2">
                                <h4 class="widget-title mb-1 pb-1">Contact Info</h4>
                                <ul class="contact-info m-b-4">
                                    <li>
                                        <span class="contact-info-label">Address:</span>123 Street Name, City, England
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Phone:</span><a href="tel:">(123) 456-7890</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email:</span> <a href="https://portotheme.com/cdn-cgi/l/email-protection#8ce1ede5e0cce9f4ede1fce0e9a2efe3e1"><span class="__cf_email__" data-cfemail="4a272b23260a2f322b273a262f64292527">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Working Days/Hours:</span> Mon - Sun / 9:00 AM - 8:00 PM
                                    </li>
                                </ul>
                                <div class="social-icons">
                                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                                    <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                                </div>
                                <!-- End .social-icons -->
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6 pb-2 pb-sm-0">
                            <div class="widget">
                                <h4 class="widget-title pb-1">Customer Service</h4>

                                <ul class="links">
                                    <li><a href="#">Help & FAQs</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Shipping & Delivery</a></li>
                                    <li><a href="#">Orders History</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                    <li><a href="dashboard.html">My Account</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="demo1-about.html">About Us</a></li>
                                    <li><a href="#">Corporate Sales</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6 pb-0">
                            <div class="widget mb-1 mb-sm-3">
                                <h4 class="widget-title">Popular Tags</h4>

                                <div class="tagcloud">
                                    <a href="#">Bag</a>
                                    <a href="#">Black</a>
                                    <a href="#">Blue</a>
                                    <a href="#">Clothes</a>
                                    <a href="#">Fashion</a>
                                    <a href="#">Hub</a>
                                    <a href="#">Jean</a>
                                    <a href="#">Shirt</a>
                                    <a href="#">Skirt</a>
                                    <a href="#">Sports</a>
                                    <a href="#">Sweater</a>
                                    <a href="#">Winter</a>
                                </div>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .footer-middle -->

            <div class="container">
                <div class="footer-bottom d-sm-flex align-items-center">
                    <div class="footer-left">
                        <span class="footer-copyright">© Porto eCommerce. 2021. All Rights Reserved</span>
                    </div>

                    <div class="footer-right ml-auto mt-1 mt-sm-0">
                        <div class="payment-icons">
                            <span class="payment-icon visa" style="background-image: url(asseti/images/payments/payment-visa.svg)"></span>
                            <span class="payment-icon paypal" style="background-image: url(asseti/images/payments/payment-paypal.svg)"></span>
                            <span class="payment-icon stripe" style="background-image: url(asseti/images/payments/payment-stripe.png)"></span>
                            <span class="payment-icon verisign" style="background-image:  url(asseti/images/payments/payment-verisign.svg)"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .footer-bottom -->
        </footer>
        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu menu-with-icon">
                    <li><a href="demo1.html">Home</a></li>
                    <li>
                        <a href="{{url('shop')}}" class="sf-with-ul">Categories</a>
                        <ul>
                        @foreach($categories as $category)
                            <li><a href="{{url('Shop',$category->id)}}">{{$category->category_name}}</a></li>
                        @endforeach
                        </ul>
                    </li>
                 
                 
                    <li><a href="blog.html">Blog</a></li>
                </ul>

                <ul class="mobile-menu">
                    <li><a href="login.html">My Account</a></li>
                    <li><a href="demo1-contact.html">Contact Us</a></li>
                    <li><a href="{{url('shop')}}">Shop</a></li>
                    <li><a href="{{url('cart')}}">Cart</a></li>
                    <li><a href="login.html" class="login-link">Log In</a></li>
                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <style>
        .slider {
  width: 100%;
  max-width: 900px;
  aspect-ratio: 2 / 1;
  overflow: hidden;
  position: relative;
  border-radius: 10px;
  margin: 0 auto 30px auto;
}

.slides {
  display: flex;
  transition: transform 0.5s ease-in-out;
  height: 100%;
}

.slide {
  min-width: 100%;
  height: 100%;
}

.slide a {
  display: block;
  width: 100%;
  height: 100%;
}

.slide a img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  display: block;
}

.indicators {
  display: flex;
  justify-content: center;
  gap: 10px;
}

.indicator {
  width: 40px;
  height: 8px;
  border-radius: 4px;
  background: #EEE;
  overflow: hidden;
  transition: all 0.3s ease;
  position: relative;
  cursor: pointer;
}

.indicator.active {
  width: 60px;
  height: 10px;
  background: #E1E1E1;
}

.indicator .progress {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 0%;
  background: orange;
  transition: none;
}

.indicator.active .progress {
  transition: width linear;
}
        </style>
    <!-- End .mobile-menu-container -->
    @include('cPartials.stickyNav')


    
    <!-- End .newsletter-popup -->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script data-cfasync="false" src="https://portotheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="asseti/js/jquery.min.js"></script>
    <script src="asseti/js/plugins.min.js"></script>
    <script src="asseti/js/bootstrap.bundle.min.js"></script>
    <script src="asseti/js/jquery.appear.min.js"></script>
    <script src="asseti/js/jquery.plugin.min.js"></script>
    <script src="asseti/js/jquery.countdown.min.js"></script>

    <!-- Main JS File -->
    <script src="asseti/js/main.min.js"></script>
</body>

<script>
    const indicators = document.querySelectorAll('.indicator');
const slides = document.getElementById('slides');
let current = 0;
let interval = null;
let startX = 0;
let isDragging = false;
let deltaX = 0;

function goToSlide(index) {
  clearTimeout(interval);
  indicators.forEach((ind, i) => {
    ind.classList.toggle('active', i === index);
    const progress = ind.querySelector('.progress');
    progress.style.transition = 'none';
    progress.style.width = '0%';
    void progress.offsetWidth;
    if (i === index) {
      progress.style.transition = 'width 3s linear';
      setTimeout(() => progress.style.width = '100%', 50);
    }
  });

  slides.style.transition = 'transform 0.5s ease-in-out';
  slides.style.transform = `translateX(-${index * 100}%)`;
  current = index;

  interval = setTimeout(() => {
    goToSlide((current + 1) % indicators.length);
  }, 3000);
}

indicators.forEach((indicator, index) => {
  indicator.addEventListener('click', () => goToSlide(index));
});

// Swipe para celular e PC
slides.addEventListener('mousedown', (e) => {
  isDragging = true;
  startX = e.pageX;
  slides.style.transition = 'none';
});

slides.addEventListener('touchstart', (e) => {
  isDragging = true;
  startX = e.touches[0].clientX;
  slides.style.transition = 'none';
});

window.addEventListener('mousemove', (e) => {
  if (!isDragging) return;
  deltaX = e.pageX - startX;
  slides.style.transform = `translateX(${-current * 100 + (deltaX / slides.clientWidth) * 100}%)`;
});

window.addEventListener('touchmove', (e) => {
  if (!isDragging) return;
  deltaX = e.touches[0].clientX - startX;
  slides.style.transform = `translateX(${-current * 100 + (deltaX / slides.clientWidth) * 100}%)`;
});

window.addEventListener('mouseup', () => {
  if (!isDragging) return;
  isDragging = false;
  if (deltaX > 50) {
    goToSlide((current - 1 + indicators.length) % indicators.length);
  } else if (deltaX < -50) {
    goToSlide((current + 1) % indicators.length);
  } else {
    goToSlide(current);
  }
  deltaX = 0;
});

window.addEventListener('touchend', () => {
  if (!isDragging) return;
  isDragging = false;
  if (deltaX > 50) {
    goToSlide((current - 1 + indicators.length) % indicators.length);
  } else if (deltaX < -50) {
    goToSlide((current + 1) % indicators.length);
  } else {
    goToSlide(current);
  }
  deltaX = 0;
});

goToSlide(0);
    </script>
<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 May 2025 11:28:26 GMT -->
</html>