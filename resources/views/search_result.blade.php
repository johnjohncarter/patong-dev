@extends('index')

@section('content')
    <section class="reviews" style="background: #f8fafb; height: 100%; padding-top: 150px">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Search List</h2>
                    <p> Find Best Product, All Product and many more think in just One click</p>
                </div>
            </div>
            <div class="row" style="padding-top: 45px">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="search-input-group">
                        <form class="" action="{{ url('search') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-9">
                                        <input type="text"
                                               class="subscription-input-form"
                                               value="{{ old('search') }}"
                                               name="search"
                                               placeholder="Ex: cosmetic jewelry watch ..."/>
                                </div>
                                <div class="col-sm-3">
                                    <button class="search-result-btn" type="submit">
                                        search
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row" style="padding: 25px 0">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
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
                <div class="col-sm-1"></div>
            </div>
        </div>

    </section><!--/.reviews-->
@endsection
