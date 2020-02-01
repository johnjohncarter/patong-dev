@extends('index')
@section('title', 'product')

@section('content')
    <!--reviews start -->
    <section class="reviews">
        <div class="container" style="padding-top: 50px">
            <h2>Contact List</h2>
            <p>What our client say about us</p>
        </div>
        <div class="container" style="padding: 30px 15px">
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive table-border">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th style="padding: 15px">ID</th>
                                <th style="padding: 15px">Name</th>
                                <th style="padding: 15px">Surname</th>
                                <th style="padding: 15px">Title</th>
                                <th style="padding: 15px">Detail</th>
                            </tr>
                            </thead>

                            <tbody>
                            @if (count($contacts))
                            @foreach($contacts as $contact)
                                <tr>
                                    <td style="padding: 15px">{{ $contact['id'] }}</td>
                                    <td style="padding: 15px">{{ $contact['name'] }}</td>
                                    <td style="padding: 15px">{{ $contact['surname'] }}</td>
                                    <td style="padding: 15px">{{ $contact['title'] }}</td>
                                    <td style="padding: 15px">{{ $contact['detail'] }}</td>
                                </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="5" style="padding: 15px">ไม่พบข้อมูล</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--/.section-header-->
    </section><!--/.reviews-->
    <!--reviews end -->
@endsection
