@extends("layouts.master")

@section("title")
Packt | Home
@endsection

@section("content")

<!--======  DETAILS PART START ======-->

<section id="" class="blog-area pt-125">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center pb-25">
                    <h3 class="title mb-15">{{$productdetails['title']}}</h3>
                    <p>{{$productdetails['tagline']}}</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="single-blog mt-30">
                    <div class="blog-image">
                        <img src="{{ asset('/assets/images/product/1.png') }}" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <div class="content">
                            <h4 class="title">{{$productdetails['title']}}</h4>
                            <span class="mb-10 mr-10">Published Date: {{date('d M, Y', strtotime($productdetails['publication_date']))}}</span> | 
                            <span class="ml-10 mb-10  mr-10">Category: {{$productdetails['category']}}</span> |
                            <span class="ml-10 mb-20">Concept: {{$productdetails['concept']}}</span>
                            <div class="product-content">
                            {!!$productdetails['description']!!}
                            <h5 class="title">Learn</h5>
                            {!!$productdetails['learn']!!}
                            <h5 class="title">Features</h5>
                            {!!$productdetails['features']!!}

                            </div>
                        </div>
                        <div class="meta d-flex justify-content-between align-items-center">
                            <div class="meta-admin d-flex align-items-center">
                                <div class="image">
                                    <a href="{{ url('#') }}"><img src="{{ asset('/assets/images/blog/admin.jpg') }}" alt="Admin"></a>
                                </div>
                                <div class="admin-title">
                                    <h6 class="title">{{$productdetails['authors'][0]['name']}}</h6>
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

@endsection