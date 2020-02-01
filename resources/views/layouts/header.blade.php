<!-- top-area Start -->
<section class="top-area" style="position: absolute; z-index: 1000; width: 100%;">
    <div class="header-area">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy" data-minus-value-desktop="70"
             data-minus-value-mobile="55" data-speed="1000">

            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>

                    <a class="navbar-brand" href="{{ url('home') }}">
                        <img class="logo-image" src="{{ asset('logo/logo.png') }}">
                        Central<span>patong</span>
                    </a>
                </div><!--/.navbar-header-->
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="{{ request()->is('home') || request()->is('search') ? 'active' : '' }}">
                            <a href="{{ url('home') }}">home</a>
                        </li>
                        <li class="{{ request()->is('product*') ? 'active' : '' }}">
                            <a href="{{ url('product') }}">product</a>
                        </li>
                        <li class="{{ request()->is('contact') || request()->is('contact-list') ? 'active' : '' }}">
                            <a href="{{ url('contact') }}">contact</a>
                        </li>
                    </ul><!--/.nav -->
                </div><!-- /.navbar-collapse -->
            </div><!--/.container-->
        </nav><!--/nav-->
        <!-- End Navigation -->
    </div><!--/.header-area-->
    <div class="clearfix"></div>

</section><!-- /.top-area-->
<!-- top-area End -->
