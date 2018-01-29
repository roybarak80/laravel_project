@extends('master')

@section('content')
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">{{$title}}

    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('./shop')}}">Shop</a>
        </li>
        <li class="breadcrumb-item active">{{$title}}</li>
    </ol>

    <!-- Image Header -->
    <!-- <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt=""> -->

    <!-- Marketing Icons Section -->

    <div class="row">
        {{--@if($products)--}}
            {{--@foreach($products as $row)--}}


                {{--<div class="col-lg-4 col-sm-6 portfolio-item">--}}
                    {{--<div class="card h-100">--}}
                        {{--<a href="#"><img class="card-img-top" src="{{ asset('images/' . $row['image'])}}" alt=""></a>--}}
                        {{--<div class="card-body">--}}
                            {{--<h4 class="card-title">--}}

                            {{--</h4>--}}
                            {{--<p class="card-text">{!!$row['article']!!}</p>--}}
                            {{--<p>Price on site: {{$row['price']}} $</p>--}}
                            {{--<input data-id="{{$row['id']}}" type="button" class="btn btn-success add-to-cart" value="Add to cart">--}}
                            {{--<a href="{{url('shop/'.$cat_url .'/'.$row['url'])}}" class="btn btn-primary add-to-cart">View Details</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--@endforeach--}}
        {{--@else--}}
            {{--<p><i>No products were found...</i></p>--}}
        {{--@endif--}}


    </div>
    <!-- /.row -->

@endsection