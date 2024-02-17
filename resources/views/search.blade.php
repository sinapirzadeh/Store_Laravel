@extends('layouts.master')
@section('title', 'جست و جو')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">نتایج جست و جو</h2>
                        @foreach ($results as $product)
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
                                </div>
                            </div>
                        @endforeach
                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>
    <style>
        footer {
            display: none;
        }
    </style>
@endsection
