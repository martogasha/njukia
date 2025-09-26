<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 May 2025 11:30:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mylonix - Checkout</title>


    @include('cPartials.headerOne')
        <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
                <div class="container">
                    <nav class="main-nav w-100">
                        <ul class="menu">
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                             <li>
                                <a href="{{url('shop')}}">Shop</a>
                            </li>
                            <li>
                                <a href="#">Categories</a>
                                <ul>
                                   @foreach($categories as $category)
                                        <li><a href="{{url('Shop',$category->id)}}">{{$category->category_name}}</a></li>
                                    @endforeach
                                 
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                       
                            <li><a href="contact.html">Contact Us</a></li>
                            <li class="float-right"><a href="#" class="pl-5">Special Offer!</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-bottom -->
        </header>
        <!-- End .header -->
        

        <main class="main main-test">
            <div class="container checkout-container">
                <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                    <li>
                        <a href="{{url('cart')}}">Shopping Cart</a>
                    </li>
                    <li class="active">
                        <a href="{{url('checkout')}}">Checkout</a>
                    </li>
                    <li class="disabled">
                        <a href="#">Order Complete</a>
                    </li>
                </ul>

                <div class="login-form-container">
                    <h4>Returning customer?
                        <button data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="btn btn-link btn-toggle">Login</button>
                    </h4>

                    <div id="collapseOne" class="collapse">
                        <div class="login-section feature-box">
                            <div class="feature-box-content">
                                <form action="#" id="login-form">
                                    <p>
                                        If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing & Shipping section.
                                    </p>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-0 pb-1">Username or email <span
                                                        class="required">*</span></label>
                                                <input type="email" class="form-control" required />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-0 pb-1">Password <span
                                                        class="required">*</span></label>
                                                <input type="password" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn">LOGIN</button>

                                    <div class="form-footer mb-1">
                                        <div class="custom-control custom-checkbox mb-0 mt-0">
                                            <input type="checkbox" class="custom-control-input" id="lost-password" />
                                            <label class="custom-control-label mb-0" for="lost-password">Remember
                                                me</label>
                                        </div>

                                        <a href="forgot-password.html" class="forget-password">Lost your password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checkout-discount">
                    <h4>Have a coupon?
                        <button data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne" class="btn btn-link btn-toggle">ENTER YOUR CODE</button>
                    </h4>

                    <div id="collapseTwo" class="collapse">
                        <div class="feature-box">
                            <div class="feature-box-content">
                                <p>If you have a coupon code, please apply it below.</p>

                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm w-auto" placeholder="Coupon code" required="" />
                                        <div class="input-group-append">
                                            <button class="btn btn-sm mt-0" type="submit">
                                                Apply Coupon
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <ul class="checkout-steps">
                            <li>
                                <h2 class="step-title">Billing details</h2>

                                <form action="{{url('placeOrder')}}" method="post" id="checkout-form">
                                    @csrf
                                            <div class="form-group">
                                                <label>Full Name
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input type="text" name="full_name" class="form-control" required />
                                            </div>

                                    <div class="form-group">
                                        <label>Town / City
                                            <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" name="town" class="form-control" required />
                                    </div>

                                  

                                    <div class="form-group">
                                        <label>Phone <abbr class="required" title="required">*</abbr></label>
                                        <input type="tel" name="phone" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Email address
                                            <abbr class="required" title="required">*</abbr></label>
                                        <input type="email" name="email" class="form-control" required />
                                    </div>

                               

                            

                               

                                    <div class="form-group">
                                        <label class="order-comments">Order notes (optional)</label>
                                        <textarea class="form-control" name="desc" placeholder="Notes about your order, e.g. special notes for delivery." required></textarea>
                                    </div>
                                
                            </li>
                        </ul>
                    </div>
                    <!-- End .col-lg-8 -->
                      
                    <div class="col-lg-5">
                        <div class="order-summary">
                            <h3>YOUR ORDER</h3>

                            <table class="table table-mini-cart">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                    </tr>
                                </thead>
                                <tbody>
								@if(isset($products))
									@foreach($products as $product)
										<tr>
											<td class="product-col">
												<h3 class="product-title">
													{{$product['item']['product_name']}} ×
													<span class="product-qty">{{$product['quantity']}}4</span>
												</h3>
											</td>

											<td class="price-col">
												<span>Ksh {{ number_format($product['item']['product_price'] * $product['quantity'], 0, '.', ',') }}</span>
											</td>
										</tr>
									@endforeach
                                @endif
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <td>
                                            <h4>Subtotal</h4>
                                        </td>

                                        <td class="price-col">
                                            <span>Ksh {{ number_format($totalPrice, 0, '.', ',') }}</span>
                                        </td>
                                    </tr>
                                    <tr class="order-shipping">
                                      

                                    </tr>

                                    <tr class="order-total">
                                        <td>
                                            <h4>Total</h4>
                                        </td>
                                        <td>
                                            <input type=hidden name="amount"></input>
                                            <b class="total-price"><span>Ksh{{ number_format($totalPrice, 0, '.', ',') }}</span></b>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="payment-methods">
                                @include('flash-message')
                                <h4 class="">Payment methods (MPESA)</h4>
                                   <div class="form-group">
                                        <label>Phone <b>(+2540712345678)</b> <abbr class="required" title="required">*</abbr></label>
                                        <input type="tel" name="telephone" class="form-control" placeholder='+2540712345678' required />
                                    </div>
                            </div>

                            <button class="btn btn-dark btn-place-order" type="submit" form="checkout-form">
                                Place order
                            </button>
                        </div>
                        </form>
                        <!-- End .cart-summary -->
                    </div>
                    <!-- End .col-lg-4 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->
        </main>
        <!-- End .main -->

        <footer class="footer bg-dark">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Contact Info</h4>
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">Address:</span>123 Street Name, City, England
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Phone:</span><a href="tel:">(123)
                                            456-7890</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email:</span> <a href="https://portotheme.com/cdn-cgi/l/email-protection#fb969a9297bb9e839a968b979ed5989496"><span class="__cf_email__" data-cfemail="99f4f8f0f5d9fce1f8f4e9f5fcb7faf6f4">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Working Days/Hours:</span> Mon - Sun / 9:00 AM - 8:00 PM
                                    </li>
                                </ul>
                                <div class="social-icons">
                                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                                    <a href="#" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
                                </div>
                                <!-- End .social-icons -->
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4>

                                <ul class="links">
                                    <li><a href="#">Help & FAQs</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Shipping & Delivery</a></li>
                                    <li><a href="#">Orders History</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                    <li><a href="dashboard.html">My Account</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Corporate Sales</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Popular Tags</h4>

                                <div class="tagcloud">
                                    <a href="#">Bag</a>
                                    <a href="#">Black</a>
                                    <a href="#">Blue</a>
                                    <a href="#">Clothes</a>
                                    <a href="#">Fashion</a>
                                    <a href="#">Hub</a>
                                    <a href="#">Shirt</a>
                                    <a href="#">Shoes</a>
                                    <a href="#">Skirt</a>
                                    <a href="#">Sports</a>
                                    <a href="#">Sweater</a>
                                </div>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget widget-newsletter">
                                <h4 class="widget-title">Subscribe newsletter</h4>
                                <p>Get all the latest information on events, sales and offers. Sign up for newsletter:
                                </p>
                                <form action="#" class="mb-0">
                                    <input type="email" class="form-control m-b-3" placeholder="Email address" required>

                                    <input type="submit" class="btn btn-primary shadow-none" value="Subscribe">
                                </form>
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
                <div class="footer-bottom">
                    <div class="container d-sm-flex align-items-center">
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
            </div>
            <!-- End .container -->
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
    <!-- End .mobile-menu-container -->


    @include('cPartials.stickyNav')



    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script data-cfasync="false" src="https://portotheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="asseti/js/jquery.min.js"></script>
    <script src="asseti/js/bootstrap.bundle.min.js"></script>
    <script src="asseti/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="asseti/js/main.min.js"></script>
</body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 May 2025 11:30:33 GMT -->
</html>