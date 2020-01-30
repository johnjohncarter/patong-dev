@extends('index')

@section('content')
    <section class="reviews" style="background: #f8fafb; height: 100%">
        <div class="container" style="padding-top: 50px">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Search List</h2>
                    <p> Find Best Product, All Product and many more think in just One click</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" style="margin: 15px 0">
                    <div class="search-input-group">
                        <form class="" action="{{ url('search') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <label class="">
                                <input type="text"
                                       class="subscription-input-form"
                                       value="{{ old('search') }}"
                                       name="search"
                                       placeholder="Ex: cosmetic jewelry watch ..."/>
                            </label>
                            <button class="search-result-btn" type="submit">
                                search
                            </button>
                        </form>
                    </div>

                </div>
            </div>
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
                                    #{{ $product['category']['name_en'] }}
                                    #{{ $product['category']['name_ch'] }}
                                    #{{ $product['category']['name_th'] }}
                                </p>
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
        </div><!--/.section-header-->
    </section><!--/.reviews-->
@endsection
