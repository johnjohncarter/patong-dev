@extends('index')

@section('content')
    <!--reviews start -->
    <section class="reviews" style="background: #f8fafb; height: 800px">
        <div class="container" style="padding-top: 50px">
            <h2>Product List</h2>
            <p>What our client say about us</p>
        </div><!--/.section-header-->
        <div class="container" style="padding-top: 50px">
            <div class="row">
                <div class="col-sm-3">
                    @for($index = 0; $index <= 5; $index++)
                        <div>list menu {{ $index + 1 }}</div>
                    @endfor
                </div>
                <div class="col-sm-9">
                    <div class="row">

                        @for($index = 0; $index <= 5; $index++)
                        <div class="col-sm-3">product {{ $index + 1 }}</div>
                        @endfor
                    </div>
                </div>
            </div>
        </div><!--/.section-header-->
    </section><!--/.reviews-->
    <!--reviews end -->
@endsection
