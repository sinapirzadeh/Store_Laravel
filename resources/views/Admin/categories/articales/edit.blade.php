@extends('Admin.master-admin')
@section('title_admin', 'ویرایش دسته بندی محصولات')
@section('main')
    <section class="content-header">
        <h1>ویرایش دسته بندی مقالات</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin/home') }}"><i class="fa fa-dashboard"></i>خانه</a></li>
            <li><a href="{{ url('admin/articales_category') }}"><i class="fa fa-dashboard"></i>دسته بندی مقالات</a></li>
            <li class="active">ویرایش</li>
        </ol>
    </section>

    @if ($errors->any())
        <section>
            <div class="box-body">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i>خطا برای ویرایش دسته بندی</h4>
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

    <section class="content container-fluid">
        <div class="row">

            <div class="col-md-4">
                <div class="box box-primary">
                    <form role="form" action="/admin/articales_category/{{ $artical->slug }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="box-body">
                            <div class="form-group">
                                <label class="color_t" for="title_category">نام دسته
                                    بندی</label>
                                <input type="text" name="title" class="form-control" id="title_category"
                                    placeholder="نام">
                            </div>
                            <div class="form-group">
                                <label class="color_t" for="slug_category">نمایش
                                    url</label>
                                <input type="text" name="slug" class="form-control" id="slug_category"
                                    placeholder="url">
                            </div>
                            <div class="form-group">
                                <label class="color_t" for="slug_category">توضیحات
                                    دسته بندی</label>
                                <input type="text" name="description" rows="10" class="form-control"
                                    id="slug_category" placeholder="توضیحات">
                            </div>
                            <div class="form-group">
                                <label for="image_category" class="btn btn-success">
                                    <input type="file" name="image" style="display:none" id="image_category">
                                    <span>انتخاب تصویر</span>
                                </label>
                                <p class="help-block">لطفا عکس مورد نظرتان 200px باشد و حتما به فرمت
                                    های jpg, png باشد.</p>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">ویرایش</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-8">
                <div class="box box-success direct-chat direct-chat-success">
                    <div class="box-body">
                        <h5>{{ $artical->title }}</h5>
                        <span>{{ $artical->slug }}</span>
                        <p>{{ $artical->description }}</p>
                        <img class="img-responsive pad" src="{{ Storage::url($artical->image) }}" alt="{{ $artical->title }}">
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
