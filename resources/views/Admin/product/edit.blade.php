@extends('Admin.master-admin')
@section('title_admin', 'ویرایش محصول')
@section('main')
    <section class="content-header">
        <h1>ویرایش محصول</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin/home') }}"><i class="fa fa-dashboard"></i>خانه</a></li>
            <li><a href="{{ url('admin/products') }}"><i class="fa fa-dashboard"></i>لیست محصولات</a></li>
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
                    <form role="form" action="/admin/products/{{ $product->slug }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="box-body">
                            <div class="form-group">
                                <label class="color_t" for="name">نام محصول
                                </label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="نام">
                            </div>
                            <div class="form-group">
                                <label class="color_t" for="price">قیمت محسول</label>
                                <input type="text" name="price" class="form-control" id="price" placeholder="قیمت">
                            </div>
                            <div class="form-group">
                                <label class="color_t" for="brand">برند محسول
                                </label>
                                <input type="text" name="brand" class="form-control" id="brand" placeholder="برند">
                            </div>
                            <div class="form-group">
                                <label class="color_t" for="description_category">توضیحات
                                    محصول</label>
                                <input type="text" name="description" class="form-control" id="description_category"
                                    placeholder="توضیحات">
                            </div>
                            <div class="form-group">
                                <label class="color_t">دسته بندی ها</label>
                                <select name="child_category" class="form-control select2 select2-hidden-accessible"
                                    style="height: 35px;" tabindex="-1" aria-hidden="true">
                                    @foreach ($categories as $parent)
                                        <option value="{{ $parent->category_id }}">
                                            {{ $parent->title }}
                                        </option><br>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label class="color_t">
                                        <input name="stock" value="1" type="checkbox">
                                        موجود است ؟
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image_category" class="btn btn-success">
                                    <input type="file" name="image" style="display:none" id="image_category">
                                    <span>انتخاب تصویر</span>
                                </label>
                                <p class="help-block">لطفا عکس مورد نظرتان 110 x 110 باشد و حتما به
                                    فرمت
                                    های jpg, png باشد.</p>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">ایجاد</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-8">
                <div class="box box-success direct-chat direct-chat-success">
                    <div class="box-body">
                        <h5>{{ $product->name }}</h5>
                        <span>{{ $product->slug }}</span>
                        <span>{{ $product->price }}</span>
                        <span>{{ $product->brand }}</span>
                        <span>{{ $product->stock }}</span>
                        <p>{{ $product->description }}</p>
                        <img class="img-responsive pad" src="{{ Storage::url($product->image) }}"
                            alt="{{ $product->name }}">
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
