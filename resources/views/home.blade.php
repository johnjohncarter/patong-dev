@extends('index')

@section('content')
    <!--welcome-hero start -->
    <section class="welcome-hero">
        <div class="container">
            <div class="welcome-hero-txt">
                <h2>best product to find and explore <br> that all you need </h2>
                <p>
                    Find Best Product, All Product and many more think in just One click
                </p>
            </div>

            <form action="{{ url('search') }}" method="post" enctype="multipart/form-data">
                <div class="welcome-hero-serch-box">
                    <div class="welcome-hero-form">
                        <div class="single-welcome-hero-form">
                            <h3>what?</h3>
                            {{ csrf_field() }}
                            <label style="width: 85%; padding-top: 6px;">
                                <input type="text"
                                       name="search"
                                       style="font-size: 16px; color: black!important;"
                                       placeholder="Ex: cosmetic jewelry watch ..."/>
                            </label>
                            <div class="welcome-hero-form-icon">
                                <i class="flaticon-list-with-dots"></i>
                            </div>
                        </div>
                    </div>
                    <div class="welcome-hero-serch">
                        <button class="welcome-hero-btn" type="submit">
                            search <i data-feather="search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </section><!--/.welcome-hero-->
    <!--welcome-hero end -->

    <!--list-topics start -->
    <section class="list-topics" style="background: #f8fafb;">
        <div class="container">
            <div class="list-topics-content">
                <ul>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-restaurant"></i>
                            </div>
                            <h2><a href="#">resturent</a></h2>
                            <p>150 listings</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-travel"></i>
                            </div>
                            <h2><a href="#">destination</a></h2>
                            <p>214 listings</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <h2><a href="#">hotels</a></h2>
                            <p>185 listings</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-pills"></i>
                            </div>
                            <h2><a href="#">healthcaree</a></h2>
                            <p>200 listings</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-transport"></i>
                            </div>
                            <h2><a href="#">automotion</a></h2>
                            <p>120 listings</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!--/.container-->

    </section><!--/.list-topics-->
    <!--list-topics end-->

    <!--explore start -->
    <section class="explore">
        <div class="container">
            <div class="section-header">
                <h2>explore</h2>
                <p>Explore New place, food, culture around the world and many more</p>
            </div><!--/.section-header-->
            <div class="explore-content">
                <div class="row">
                    @foreach($products as $index => $product)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-explore-item">
                                <div class="single-explore-img">
                                    <img src="{{ asset('/images/explore/e' . ($index + 1). '.jpg') }}" alt="explore image">
                                </div>
                                <div class="single-explore-txt bg-theme-2">
                                    <h2><a href="#">{{ $product['name_en'] }}</a></h2>
                                    <p class="explore-rating-price">
                                        <span>
											{{ $product['name_en'] }}
										</span>
                                        <span class="explore-price-box">
											{{ $product['name_ch'] }}
										</span>
                                        <span>
											{{ $product['name_th'] }}
										</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.explore-->
    <!--explore end -->

    <!--blog start -->
    <section class="blog">
        <div class="container">
            <div class="section-header">
                <h2>news and articles</h2>
                <p>Always upto date with our latest News and Articles </p>
            </div><!--/.section-header-->
            <div class="blog-content">
                <div class="row">
                    @for($index = 1; $index <= 3; $index++)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-blog-item">
                                <div class="single-blog-item-img">
                                    <img src="{{ asset('images/blog/b' . $index . '.jpg') }}" alt="blog image">
                                </div>
                                <div class="single-blog-item-txt">
                                    <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                                    <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod
                                        tempore
                                        incididunt ut labore et dolore magna.
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.blog-->
    <!--blog end -->

    <!--reviews start -->
    <section class="reviews" style="background: #f8fafb;">
        <div class="section-header">
            <h2>clients reviews</h2>
            <p>What our client say about us</p>
        </div><!--/.section-header-->
        <div class="reviews-content">
            <div class="testimonial-carousel">
                @for($index = 1; $index <= 8; $index++)
                    <div class="single-testimonial-box">
                        <div class="testimonial-description">
                            <div class="testimonial-info">
                                <div class="testimonial-img">
                                    <img src="{{ asset('images/clients/c1.png') }}" alt="clients">
                                </div><!--/.testimonial-img-->
                                <div class="testimonial-person">
                                    <h2>Tom Leakar</h2>
                                    <h4>london, UK</h4>
                                    <div class="testimonial-person-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div><!--/.testimonial-person-->
                            </div><!--/.testimonial-info-->
                            <div class="testimonial-comment">
                                <p>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit
                                    anim id est laborum. Sed ut perspiciatis eaque.
                                </p>
                            </div><!--/.testimonial-comment-->
                        </div><!--/.testimonial-description-->
                    </div><!--/.single-testimonial-box-->
                @endfor
            </div>
        </div>

    </section><!--/.reviews-->
    <!--reviews end -->

@endsection
