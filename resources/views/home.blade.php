@extends('layouts.master')
@section('title', 'صفحه اصلی')
@section('content')

    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                        </ol>

                        <div class="carousel-inner">

                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>SHOP</span>CENTER</h1>
                                    <h2>Shop Center</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('images/home/girl2.jpg') }}" class="girl img-responsive"
                                        alt="" />
                                    <img src="{{ asset('images/home/pricing.png') }}" class="pricing" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>SHOP</span>CENTER</h1>
                                    <h2>Shop Center</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('images/home/girl2.jpg') }}" class="girl img-responsive"
                                        alt="" />
                                    <img src="{{ asset('images/home/pricing.png') }}" class="pricing" alt="" />
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->


    <section>
        <div class="container">
            <div class="row">

                <div class="recommended_items"><!--NewProduct_items-->
                    <h2 class="title text-center">پر فروش ترین محصولات</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/Gallery.jpg" alt="" />
                                                <h2>1.250.000 R</h2>
                                                <p>توضیحات کوتاه محصول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>افزودن به سبـد خرید</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/Gallery.jpg" alt="" />
                                                <h2>1.250.000 R</h2>
                                                <p>توضیحات کوتاه محصول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>افزودن به سبـد خرید</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/Gallery.jpg" alt="" />
                                                <h2>1.250.000 R</h2>
                                                <p>توضیحات کوتاه محصول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>افزودن به سبـد خرید</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/Gallery.jpg" alt="" />
                                                <h2>1.250.000 R</h2>
                                                <p>توضیحات کوتاه محصول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>افزودن به سبـد خرید</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/Gallery.jpg" alt="" />
                                                <h2>1.250.000 R</h2>
                                                <p>توضیحات کوتاه محصول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>افزودن به سبـد خرید</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/Gallery.jpg" alt="" />
                                                <h2>1.250.000 R</h2>
                                                <p>توضیحات کوتاه محصول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>افزودن به سبـد خرید</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/Gallery.jpg" alt="" />
                                                <h2>1.250.000 R</h2>
                                                <p>توضیحات کوتاه محصول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>افزودن به سبـد خرید</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/Gallery.jpg" alt="" />
                                                <h2>1.250.000 R</h2>
                                                <p>توضیحات کوتاه محصول</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>افزودن به سبـد خرید</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div><!--/NewProduct_items-->

            </div>

        </div>
        </div>
    </section>
@endsection
