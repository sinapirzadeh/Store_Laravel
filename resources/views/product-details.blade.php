@extends('layouts.master')
@section('title', 'جزعیات محصول')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{ Storage::url($product->image) }}" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">
                                <div>
                                    <h1>{{ $product->name }}</h1>
                                    <span>
                                        <span>قیمت : {{ $product->price }} ريال</span>
                                    </span>
                                    <span>
                                        <form action="/buy/{{ $product->product_id }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                افـزودن به سبـد خریـد
                                            </button>
                                        </form>
                                    </span>
                                </div>
                                <div>
                                    <p><b>موجـودی :</b>
                                        @if ($product->stock)
                                            در انبار موجـود می باشد
                                        @else
                                            موجـودی تمام شده است
                                        @endif
                                    </p>
                                    <p><b>برنـد : {{ $product->brand }}</b>
                                    </p>
                                </div>

                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->

                    <div class="category-tab shop-details-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li><a href="#details" data-toggle="tab">جزئیات</a></li>
                                <li class="active"><a href="#companyprofile" data-toggle="tab">نظرات</a>
                                </li>
                                <li><a href="#reviews" data-toggle="tab">افزودن نظر</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="details">
                                <p>{{ $product->description }}</p>
                            </div>

                            <div class="tab-pane fade" id="companyprofile">
                                @foreach ($comments as $comment)
                                    <div class="response-area">
                                        <ul class="media-list" style="background-color: white">
                                            <li class="media">
                                                <div class="media-body">
                                                    <ul class="sinlge-post-meta"
                                                        style="display: flex;
                                                    justify-content: space-between;background-color: white">
                                                        <li><i class="fa fa-user"></i>{{ $comment->name }}</li>
                                                        <li><i class="fa fa-clock-o"></i>{{ $comment->subject }}</li>
                                                        <li><i class="fa fa-calendar"></i>{{ $comment->created_at }}</li>
                                                    </ul>
                                                    <p>{{ $comment->comment }}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>

                            <div class="tab-pane fade active in" id="reviews">
                                <div class="col-sm-12">

                                    @if ($errors->any())
                                        <section>
                                            <div class="box-body">
                                                <div class="alert alert-danger alert-dismissible">
                                                    <button type="button" class="close pull-left" data-dismiss="alert"
                                                        aria-hidden="true">×</button>
                                                    <h4><i class="icon fa fa-ban"></i>خطا برای پیام</h4>
                                                    <div class="alert alert-denger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    @endif

                                    <p><b>نظـر خود را بنویسیـد</b></p>
                                    <form action="/admin/products_comment" method="POST">
                                        @csrf
                                        <span>
                                            <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                            <input type="text" name="name" placeholder="نام و نام خانوادگـی" />
                                            <input type="subject" name="subject" placeholder="موضوع" />
                                        </span>
                                        <textarea name="comment"></textarea>
                                        <button type="submit" class="btn btn-default pull-left">
                                            ارسـال
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @section('sidebar')
                @include('layouts.sidebar')
            @show
        </div>
    </div>
</section>
@endsection
