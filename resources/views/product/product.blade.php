@extends('index')

@section('content')
    <!--reviews start -->
    <section class="reviews" style="background: #f8fafb; min-height: 84vh; padding-top: 100px; color: black!important;">
        <div class="container" style="padding-top: 50px">
            <h2>Product List</h2>
            <p>What our client say about us</p>
        </div>
        <div class="container" style="padding: 30px 15px">
            <div class="row">
                <div class="col-sm-3">
                    <div class="list-group category-menu">
                        <a href="{{ url('product') }}"
                           class="list-group-item {{ request()->is('product') ? 'active' : '' }}">
                            All Product
                        </a>
                        @foreach($categories as $category)
                            <a href="{{ url('product') . '/' . $category['id'] }}"
                               class="list-group-item {{ request()->is('product/' . $category['id']) ? 'active' : '' }}">
                                {{ $category['name_en'] }} ({{ $category['name_ch'] }})
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="table-responsive table-border">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th style="padding: 15px">Name En</th>
                                <th style="padding: 15px">Name Ch</th>
                                <th style="padding: 15px">Name Th</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td style="padding: 15px">{{ $product['name_en'] }}</td>
                                    <td style="padding: 15px">{{ $product['name_ch'] }}</td>
                                    <td style="padding: 15px">{{ $product['name_th'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--/.section-header-->
    </section><!--/.reviews-->
    <!--reviews end -->
@endsection
