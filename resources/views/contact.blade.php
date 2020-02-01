@extends('index')
@section('title', 'contact')

@section('content')
    <!--reviews start -->
    <section class="reviews">
        <div class="container" style="padding-top: 50px">
            <h2>Contact</h2>
            <p>What our client say about us</p>
        </div>
        <!--/.section-header-->
        <div class="container">
            <div class="row" style="padding-top: 20px">
                <div class="col-sm-4 text-center">
                    <img class="image-feedback" src="{{ asset('img/feedback.png') }}" alt="">
                </div>
                <div class="col-sm-8">
                    @if(session()->has('success'))
                        <div class="row">
                            <div class="col-sm-12" style="padding-top: 15px">
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(session()->has('errors'))
                        <?php $errors = session()->get('errors') ?>
                        <div class="row">
                            <div class="col-sm-12" style="padding-top: 15px">
                                @if (!$errors->name && !$errors->surname && !$errors->title && !$errors->detail)
                                    <div class="alert alert-danger">
                                        {{ session()->get('errors') }}
                                    </div>
                                @endif
                                    <div class="alert alert-danger">
                                        {{ session()->get('errors') }}
                                    </div>
                            </div>
                        </div>
                    @endif
                    <form action="{{ url('new-contact') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6" style="padding-top: 15px">
                                <input type="text"
                                       class="subscription-input-form"
                                       value="{{ old('name') }}"
                                       name="name"
                                       placeholder="Name"/>
                                @error('name')
                                <span class="text-red" style="color: red">
                                    <i class="fa fa-times-circle-o"></i> The name field is required.
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-6" style="padding-top: 15px">
                                <input type="text"
                                       class="subscription-input-form"
                                       value="{{ old('surname') }}"
                                       name="surname"
                                       placeholder="Surname"/>
                                @error('surname')
                                <span class="text-red" style="color: red">
                                    <i class="fa fa-times-circle-o"></i> The surname field is required.
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12" style="padding-top: 15px">
                                <input type="text"
                                       class="subscription-input-form"
                                       value="{{ old('title') }}"
                                       name="title"
                                       placeholder="Title Contact"/>
                                @error('title')
                                <span class="text-red" style="color: red">
                                    <i class="fa fa-times-circle-o"></i> The title field is required.
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12" style="padding-top: 15px">
                                <textarea class="subscription-input-form"
                                          style="min-height: 150px"
                                          name="detail">
                                </textarea>
                                @error('detail')
                                <span class="text-red" style="color: red">
                                    <i class="fa fa-times-circle-o"></i> The detail field is required.
                                </span>
                                @enderror
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
            <div class="row" style="padding-top: 20px">
                <div class="col-sm-12 text-right">
                    <a class="contact-list" href="{{ url('contact-list') }}" target="_blank">view all contact</a>
                </div>
            </div>
        </div><!--/.section-header-->
    </section><!--/.reviews-->
    <!--reviews end -->
@endsection
