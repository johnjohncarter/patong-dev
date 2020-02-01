@extends('index')
@section('title', 'home')

@section('content')
    <!--welcome-hero start -->
    <section class="welcome-hero" style="height: 100vh; padding-top: 100px">
        <div class="container">
            <div class="welcome-hero-txt">
                <h2>welcome to central online<br>  尚泰百货欢迎光临 </h2>
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
                        </div>
                    </div>
                    <div class="welcome-hero-serch">
                        <button class="welcome-hero-btn" type="submit">
                            search <i data-feather="search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <div class="welcome-hero-txt-description">
                <p style="color: white">
                    Find Best Product, All Product and many more think in just One click
                </p>
            </div>
        </div>

    </section><!--/.welcome-hero-->
    <!--welcome-hero end -->

@endsection
