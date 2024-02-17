<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('images/ico/favicon.ico') }}" rel="shortcut icon">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-144-precomposed.png') }}" sizes="144x144">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-114-precomposed.png') }}" sizes="114x114">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-72-precomposed.png') }}" sizes="72x72">
    <link href="{{ asset('images/ico/apple-touch-icon-57-precomposed.png') }}" rel="apple-touch-icon-precomposed">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4" style="text-align: left;">
						<div class="logo">
							<a href="{{ route('home') }}"><img src="{{ asset('images/home/logo.png') }}" alt="Logo" style="text-align: center;" /></a>
						</div>
					</div>

					<div class="col-sm-8 header-middle-menu">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								@if (auth()->check())
								<li><a href="/admin/users/{{ auth()->user()->id }}"><i class="fa fa-user"></i>حساب کاربـری</a></li>
								<li><a href="/buy"><i class="fa fa-shopping-cart"></i> سبد خریـد</a></li>
								@else
								<li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> ورود</a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">

					<div class="col-sm-3">
						<div class="search_box pull-left">
							<form action="search-result" method="get">
								<input name="search" type="text" placeholder="جستـجو"/>
								<button type="submit" class="btn btn-primery">جستـجو</button>
							</form>
						</div>
					</div>

					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-right">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">خـانه</a></li>
								<li><a href="/store">فروشگـاه</a>
									<li><a href="/blogs">وبلاگ</a>
                                </li>
								<li class="dropdown"><a href="#">دسته بندی ها<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">آخریـن اخبـار</a></li>
										<li><a href="blog-single.html">صفحـه خبـر</a></li>
										<li class="dropdown"><a href="#">دسته بندی ها<i class="fa fa-angle-down"></i></a>
											<ul role="menu" class="sub-menu">
												<li><a href="blog.html">آخریـن اخبـار</a></li>
												<li><a href="blog-single.html">صفحـه خبـر</a></li>
											</ul>
										</li>
                                    </ul>
                                </li>
								<li><a href="/about">درباره مـا</a></li>
								<li><a href="/contact">تماس با مـا</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

    @yield('content')

	<footer id="footer">
		<div class="footer-Before">
			<div class="container">
				<div class="block-news">
					<div class="row">
						<h3>با عضویت در خبـرنامه ما از تخفیفات ویـژه ما با خبـر شوید ... </h3>
						<div class="searchform newslatter">
							<input type="text" placeholder="آدرس ایمیـل شما ..."/>
							<button type="submit" class="btn btn-default">
								<i class="fa fa-arrow-circle-o-left"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom  mt-5 mb-5 " style="direction: ltr !important;">
			<div class="container">
				<div class="row">
					<p style="text-aline: center;" class=" pull-left">Copyright © {{ date('Y') }}
						<a target="_blank" href="#"><b>sina pirzadeh</b></a>. All rights reserved.
					</p>
				</div>
			</div>
		</div>
	</footer>

    <script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('js/price-range.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('"js/main.js') }}"></script>
</body>
</html>
