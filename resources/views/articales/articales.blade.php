@extends('layouts.master')
@section('title', 'فروشگاه')
@section('content')
    <section>
        <div class="container">
            <div class="row">

                <div class="col-sm-9">
                    <div class="blog-post-area">
                        <h2 class="title text-center">آخریـن اخبـار</h2>


                        <div class="single-blog-post">
                            <h3>خبـر شمـاره 3 - خبـر</h3>
                            <div class="post-meta">
                                <ul>
                                    <li><i class="fa fa-user"></i> کاربـر 1</li>
                                    <li><i class="fa fa-clock-o"></i> 17:20 ب.ظ</li>
                                    <li><i class="fa fa-calendar"></i> 28 تیـر 1397</li>
                                </ul>
                                <span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </span>
                            </div>
                            <a href="">
                                <img src="images/blog/blog-one.jpg" alt="">
                            </a>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده ازلورملورم ایپسوم متن
                                ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون
                                بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت</p>
                            <a class="btn btn-primary" href="">ادامـه مطلب</a>
                        </div>
                        <div class="pagination-area">
                            <ul class="pagination">
                                <li><a href="" class="active">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
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
