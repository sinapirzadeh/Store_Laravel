@extends('layouts.master')
@section('title', 'فروشگاه')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">محصولات</h2>
                        @foreach ($products as $product)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{ Storage::url($product->image) }}" alt="">
                                            <h2>{{ $product->price }}</h2>
                                            <p>{{ $product->name }}</p>
                                            <form action="/buy/{{ $product->product_id }}" method="post">
                                                @csrf
                                                <button class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>افزودن به سبـد خریـد
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href=""><i class="fa fa-plus-square"></i>لیست علاقه مندی ها</a>
                                            </li>
                                            <li><a href="/product/{{ $product->slug }}"><i
                                                        class="fa fa-plus-square"></i>جزئیات</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div><!--features_items-->
                </div>

            @section('sidebar')
                @include('layouts.sidebar')
            @show
        </div>
    </div>
</section>
@endsection
