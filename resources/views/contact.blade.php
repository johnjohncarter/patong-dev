@extends('index')
@section('title', 'contact')

@section('content')
    <!--reviews start -->
    <section class="reviews">
        <div class="container" style="padding-top: 50px">
            <h2>Contact List</h2>
            <p>What our client say about us</p>
        </div>
        <!--/.section-header-->
        <div class="container">
            <div class="row" style="padding-top: 20px">
                <div class="col-sm-4 text-center">
                    <img class="image-feedback" src="{{ asset('img/feedback.png') }}" alt="">
                </div>
                <div class="col-sm-8">
                    <form action="{{ url('contact') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6" style="padding-top: 15px">
                                <input type="text"
                                       class="subscription-input-form"
                                       value="{{ old('name') }}"
                                       name="name"
                                       placeholder="Name"/>
                            </div>
                            <div class="col-sm-6" style="padding-top: 15px">
                                <input type="text"
                                       class="subscription-input-form"
                                       value="{{ old('surname') }}"
                                       name="surname"
                                       placeholder="Surname"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12" style="padding-top: 15px">
                                <input type="text"
                                       class="subscription-input-form"
                                       value="{{ old('title') }}"
                                       name="title"
                                       placeholder="Title Contact"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12" style="padding-top: 15px">
                                <textarea class="subscription-input-form"
                                          style="min-height: 150px"
                                          name="detail">
                                </textarea>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 15px">
                            <div class="col-sm-9"></div>
                            <div class="col-sm-3">
                                <button class="search-result-btn" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--/.section-header-->
    </section><!--/.reviews-->
    <!--reviews end -->
@endsection
