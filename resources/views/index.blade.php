@extends("layouts.master")

@section("title")
Packt | Home
@endsection

@section("content")
<!--====== DISCOUNT PRODUCT PART START ======-->


<!--====== SLIDER PART START ======-->
@include("partials.slider")    
<!--====== SLIDER PART ENDS ======-->
<section id="discount-product" class="discount-product pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="single-discount-product mt-30">
                    <div class="product-image">
                        <img src="{{ asset('/assets/images/discount-product/product-1.jpg') }}" alt="Product">
                    </div> <!-- product image -->
                    <div class="product-content">
                        <h4 class="content-title mb-15">High-quality content <br> at your home</h4>
                        <a href="{{ url('#') }}">View Collection <i class="lni-chevron-right"></i></a>
                    </div> <!-- product content -->
                </div> <!-- single discount product -->
            </div>
            <div class="col-lg-6">
                <div class="single-discount-product mt-30">
                    <div class="product-image">
                        <img src="{{ asset('/assets/images/discount-product/product-2.jpg') }}" alt="Product">
                    </div> <!-- product image -->
                    <div class="product-content">
                        <h4 class="content-title mb-15">Hot Offer <br> Discount up to 80%</h4>
                        <a href="{{ url('#') }}">View Collection <i class="lni-chevron-right"></i></a>
                    </div> <!-- product content -->
                </div> <!-- single discount product -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== DISCOUNT PRODUCT PART ENDS ======-->

<!--====== PRODUCT PART START ======-->

<section id="product" class="product-area pt-100 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="collection-menu text-center mt-30">
                    <h4 class="collection-tilte">BOOK COLLECTION</h4>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    @foreach ($categories as $key=>$category)
                    @php($categoryy= str_replace(' ','-',$category))                 
                        <a class="{{ $key==0 ? 'active' : '' }}" id="{{Str::words($category,1,'')}}-tab" data-toggle="pill" href="{{ url('#'.Str::words($category,1,'')) }}" role="tab" aria-controls="{{Str::words($category,1,'')}}" aria-selected="true"> {{$category}}</a>
                    @endforeach
                    </div> <!-- nav -->
                </div> <!-- collection menu -->
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                @php($count=0)
                @foreach ($productsbycategory as $key=>$prodByCategory) 
                <div class="tab-pane fade {{ $count==0 ? ' show active' : '' }}" id="{{Str::words($key,1,'')}}" role="tabpanel" aria-labelledby="{{Str::words($key,1,'')}}-tab">
                    <div class="product-items mt-30">
                        <div class="row product-items-active">
                        @foreach ($prodByCategory['products'] as $item )                            
                            <div class="col-md-4">
                                <div class="single-product-items text-center">
                                    <div class="product-item-image">
                                        <a href="{{ url('#') }}"><img src="{{ asset('/assets/images/product/p-1.jpg') }}" alt="Product"></a>
                                        <div class="product-discount-tag">
                                            <p>-60%</p>
                                        </div>
                                    </div>
                                    <div class="product-item-content text-center mt-30">
                                        <h5 class="product-title"><a title="{{ $item['title'] }}" href="{{ url('#') }}">{{ Str::limit($item['title'], 30, $end='...') }}
                                        </a></h5>
                                        <ul class="rating">
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                        </ul>
                                        <span class="regular-price">$49.00</span>
                                        <span class="discount-price">$69.00</span>
                                    </div>
                                    <a href="{{ url('/product/'.$item['id']) }}"><button tabindex="0" class="btn btn-danger  mt-10">View Details</button></a>
                                </div> <!-- single product items -->
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div> <!-- tab pane -->
                @php($count++)
                @endforeach
                  
                </div> <!-- tab content --> 
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PRODUCT PART ENDS ======-->

<!--====== SERVICES PART START ======-->

<section id="service" class="services-area pt-125 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-30">
                    <h5 class="mb-15">Our Story</h5>
                    <h3 class="title mb-15">Build Your Advance Career</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                </div> <!-- section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="services-left mt-45">
                    <div class="services">
                        <img src="{{ asset('/assets/images/services/services.jpg') }}" alt="">
                        <a href="{{ url('#') }}" class="main-btn mt-30">Read More <i class="lni-chevron-right"></i></a>
                    </div> <!-- services btn -->
                </div> <!-- services left -->
            </div>
            <div class="col-lg-6">
                
                <div class="services-right mt-45">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-8">
                            <div class="single-services text-center">
                                <div class="services-icon">
                                    <i class="lni-grid-alt"></i>
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">Books</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                                </div>
                            </div> <!-- single services -->
                            
                            <div class="single-services text-center mt-30">
                                <div class="services-icon">
                                    <i class="lni-ruler-pencil"></i>
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">Videos</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                                </div>
                            </div> <!-- single services -->
                        </div>
                        <div class="col-md-6 col-sm-8">
                            <div class="single-services text-center mt-30">
                                <div class="services-icon">
                                    <i class="lni-customer"></i>
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">Consultancy</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                                </div>
                            </div> <!-- single services -->
                            
                            <div class="single-services text-center mt-30">
                                <div class="services-icon">
                                    <i class="lni-support"></i>
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">Custom Orders</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                                </div>
                            </div> <!-- single services -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- services right -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== SERVICES PART ENDS ======-->

<!--====== SHOWCASE PART START ======-->

<section id="showcase" class="showcase-area pt-100 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="showcase-title pt-25">
                    <h2 class="title">Showcase</h2>
                </div> <!-- showcase title -->
            </div> 
            <div class="col-lg-6">
                <div class="showcase-title pt-25">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
                </div> <!-- showcase title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="showcase-active mt-65">
                    <div class="single-showcase">
                        <img src="{{ asset('/assets/images/showcase/t-1.jpg') }}" alt="Testimonial">
                        <a href="{{ url('#') }}" class="main-btn">Full Preview</a>
                    </div> <!-- single showcase -->
                    <div class="single-showcase">
                        <img src="{{ asset('/assets/images/showcase/t-2.jpg') }}" alt="Testimonial">
                        <a href="{{ url('#') }}" class="main-btn">Full Preview</a>
                    </div> <!-- single showcase -->
                </div> <!-- showcase active -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== SHOWCASE PART ENDS ======-->

<!--====== TEAM PART START ======-->

<section id="team" class="team-area pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-25">
                    <h3 class="title mb-15">Our Expert Team</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-temp text-center mt-30">
                    <div class="team-image">
                        <img src="{{ asset('/assets/images/team/t-1.jpg') }}"
                            alt="Team">
                    </div>
                    <div class="team-content mt-30">
                        <h4 class="title mb-10"><a href="{{ url('#') }}">Celina Gomez</a></h4>
                        <span>FOUNDER</span>
                        <ul class="social mt-15">
                            <li><a href="{{ url('#') }}"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="{{ url('#') }}"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="{{ url('#') }}"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- single temp -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-temp text-center mt-30">
                    <div class="team-image">
                        <img src="{{ asset('/assets/images/team/t-2.jpg') }}"
                            alt="Team">
                    </div>
                    <div class="team-content mt-30">
                        <h4 class="title mb-10"><a href="{{ url('#') }}">Patric Green</a></h4>
                        <span>Consultant</span>
                        <ul class="social mt-15">
                            <li><a href="{{ url('#') }}"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="{{ url('#') }}"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="{{ url('#') }}"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- single temp -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-temp text-center mt-30">
                    <div class="team-image">
                        <img src="{{ asset('/assets/images/team/t-3.jpg') }}"
                            alt="Team">
                    </div>
                    <div class="team-content mt-30">
                        <h4 class="title mb-10"><a href="{{ url('#') }}">Mark Parker</a></h4>
                        <span>Business Manager</span>
                        <ul class="social mt-15">
                            <li><a href="{{ url('#') }}"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="{{ url('#') }}"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="{{ url('#') }}"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- single temp -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-temp text-center mt-30">
                    <div class="team-image">
                        <img src="{{ asset('/assets/images/team/t-4.jpg') }}"
                            alt="Team">
                    </div>
                    <div class="team-content mt-30">
                        <h4 class="title mb-10"><a href="{{ url('#') }}">Daryl Dixon</a></h4>
                        <span>Marketing Manager</span>
                        <ul class="social mt-15">
                            <li><a href="{{ url('#') }}"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="{{ url('#') }}"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="{{ url('#') }}"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- single temp -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TEAM PART ENDS ======-->

<!--====== TESTIMONIAL PART START ======-->

<section id="testimonial" class="testimonial-area pt-200">
    <div class="testimonial-bg bg_cover" style="background-image: url(assets/images/testimonial/ts-bg.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <div class="testimonial-content">
                    <div class="testimonial-active">
                        <div class="single-testimonial">
                            <i class="lni-quotation"></i>
                            <p class="mb-30">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor inc ididunt ut labore et dolore magna aliqua.</p>
                            <h6 class="title">Roma De Suza</h6>
                            <span>- CEO, Tesla</span>
                        </div> <!-- single testimonial -->
                        <div class="single-testimonial">
                            <i class="lni-quotation"></i>
                            <p class="mb-30">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor inc ididunt ut labore et dolore magna aliqua.</p>
                            <h6 class="title">Lisa White</h6>
                            <span>- Designer, Walmart</span>
                        </div> <!-- single testimonial -->
                    </div> <!-- testimonial active -->
                </div> <!-- testimonial content -->
            </div>
            <div class="col-lg-7 col-md-4">
                <div class="testimonial-play text-right d-none d-md-block">
                    <a class="Video-popup" href="https://www.youtube.com/watch?v=l8ccw7BMrMA"><i class="lni-play"></i></a>
                </div> <!-- testimonial play -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TESTIMONIAL PART ENDS ======-->

<!--======  BLOG PART START ======-->

<section id="blog" class="blog-area pt-125">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-25">
                    <h3 class="title mb-15">From The Blog</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog mt-30">
                    <div class="blog-image">
                        <img src="{{ asset('/assets/images/blog/b-1.jpg') }}" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <div class="content">
                            <h4 class="title"><a href="{{ url('#') }}">Rowan an orangutan known  & loved</a></h4>
                            <span>25 JULY, 2022</span>
                        </div>
                        <div class="meta d-flex justify-content-between align-items-center">
                            <div class="meta-admin d-flex align-items-center">
                                <div class="image">
                                    <a href="{{ url('#') }}"><img src="{{ asset('/assets/images/blog/admin.jpg') }}" alt="Admin"></a>
                                </div>
                                <div class="admin-title">
                                    <h6 class="title"><a href="{{ url('#') }}">J. PARKER</a></h6>
                                </div>
                            </div>  <!-- meta admin -->
                            <div class="meta-icon">
                                <ul>
                                    <li><a href="{{ url('#') }}"><i class="lni-share"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="lni-heart"></i></a></li>
                                </ul>
                            </div> <!-- meta icon -->
                        </div> <!-- meta -->
                    </div>
                </div> <!-- single blog -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog mt-30">
                    <div class="blog-image">
                        <img src="{{ asset('/assets/images/blog/b-2.jpg') }}" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <div class="content">
                            <h4 class="title"><a href="{{ url('#') }}">Rowan an orangutan known  & loved</a></h4>
                            <span>25 JULY, 2022</span>
                        </div>
                        <div class="meta d-flex justify-content-between align-items-center">
                            <div class="meta-admin d-flex align-items-center">
                                <div class="image">
                                    <a href="{{ url('#') }}"><img src="{{ asset('/assets/images/blog/admin.jpg') }}" alt="Admin"></a>
                                </div>
                                <div class="admin-title">
                                    <h6 class="title"><a href="{{ url('#') }}">J. PARKER</a></h6>
                                </div>
                            </div>  <!-- meta admin -->
                            <div class="meta-icon">
                                <ul>
                                    <li><a href="{{ url('#') }}"><i class="lni-share"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="lni-heart"></i></a></li>
                                </ul>
                            </div> <!-- meta icon -->
                        </div> <!-- meta -->
                    </div>
                </div> <!-- single blog -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog mt-30">
                    <div class="blog-image">
                        <img src="{{ asset('/assets/images/blog/b-3.jpg') }}" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <div class="content">
                            <h4 class="title"><a href="{{ url('#') }}">Rowan an orangutan known  & loved</a></h4>
                            <span>25 JULY, 2022</span>
                        </div>
                        <div class="meta d-flex justify-content-between align-items-center">
                            <div class="meta-admin d-flex align-items-center">
                                <div class="image">
                                    <a href="{{ url('#') }}"><img src="{{ asset('/assets/images/blog/admin.jpg') }}" alt="Admin"></a>
                                </div>
                                <div class="admin-title">
                                    <h6 class="title"><a href="{{ url('#') }}">J. PARKER</a></h6>
                                </div>
                            </div>  <!-- meta admin -->
                            <div class="meta-icon">
                                <ul>
                                    <li><a href="{{ url('#') }}"><i class="lni-share"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="lni-heart"></i></a></li>
                                </ul>
                            </div> <!-- meta icon -->
                        </div> <!-- meta -->
                    </div>
                </div> <!-- single blog -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--======  BLOG PART ENDS ======-->

<!--====== CONTACT PART START ======-->

<section id="contact" class="contact-area pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="contact-title text-center">
                    <h2 class="title">Get In Touch</h2>
                </div> <!-- contact title -->
            </div>
        </div> <!-- row -->
        <div class="contact-box mt-70">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info pt-25">
                        <h4 class="info-title">Contact Info</h4>
                        <ul>
                            <li>
                                <div class="single-info mt-30">
                                    <div class="info-icon">
                                        <i class="lni-phone-handset"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>+88 1234 56789</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info mt-30">
                                    <div class="info-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>contact@yourmail.com</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info mt-30">
                                    <div class="info-icon">
                                        <i class="lni-home"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>203, Envato Labs, Behind Alis Steet,Australia</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                        </ul>
                    </div> <!-- contact info -->
                </div> 
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="contact-form" action="assets/contact.php" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="name" placeholder="Enter Your Name" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-form form-group">
                                        <input type="email" name="email" placeholder="Enter Your Email"  data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-form form-group">
                                        <textarea name="message" placeholder="Enter Your Message" data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-lg-12">
                                    <div class="single-form form-group">
                                        <button class="main-btn" type="submit">CONTACT NOW</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- row -->
                </div> 
            </div> <!-- row -->
        </div> <!-- contact box -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->

@endsection