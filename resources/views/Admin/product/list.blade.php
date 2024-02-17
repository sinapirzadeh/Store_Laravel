@extends('Admin.master-admin')
@section('title_admin', 'محصولات')
@section('main')
    <section class="content-header">
        <h1>مدیریت محصولات</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin/home') }}"><i class="fa fa-dashboard"></i>خانه</a></li>
            <li class="active">مدیریت محصولات</li>
        </ol>
    </section>

    @if ($errors->any())
        <section>
            <div class="box-body">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i>خطا برای ساخت محصول</h4>
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
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right"
                                    placeholder="جستجو">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                                <h5>افزودن محصول جدید</h5>
                            </button>
                        </div>

                        <div class="modal modal-success fade in" id="modal-success"
                            style="display: none; padding-right: 17px;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">ایجاد محصول</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="box box-primary">
                                            <form role="form" action="/admin/products" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label class="color_t" for="name">نام محصول
                                                        </label>
                                                        <input type="text" name="name" class="form-control"
                                                            id="name" placeholder="نام">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="color_t" for="price">قیمت محسول</label>
                                                        <input type="text" name="price" class="form-control"
                                                            id="price" placeholder="قیمت">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="color_t" for="brand">برند محسول
                                                        </label>
                                                        <input type="text" name="brand" class="form-control"
                                                            id="brand" placeholder="برند">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="color_t" for="description_category">توضیحات
                                                            محصول</label>
                                                        <input type="text" name="description" class="form-control"
                                                            id="description_category" placeholder="توضیحات">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="color_t">دسته بندی ها</label>
                                                        <select name="child_category"
                                                            class="form-control select2 select2-hidden-accessible"
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
                                                            <input type="file" name="image" style="display:none"
                                                                id="image_category">
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
                                    <div class="modal-footer"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-body table-responsive ">
                        <table class="table textc">
                            <thead class="bg-green">
                                <tr>
                                    <th>تصویر</th>
                                    <th>نام</th>
                                    <th>برند</th>
                                    <th>قیمت</th>
                                    <th>دستورات</th>
                                </tr>
                            </thead>
                            @foreach ($products as $product)
                                <tbody class="bg_body_co">
                                    <tr>
                                        <td class="td_to_center"><img width="" class="img-responsive img_redues"
                                                src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                                        </td>
                                        <td class="td_to_center box-title">
                                            <h3>{{ $product->name }}</h3>
                                        </td>
                                        <td class="td_to_center box-title">
                                            <h4>{{ $product->brand }}</h4>
                                        </td>
                                        <td class="td_to_center box-title">
                                            <h4 class="text-success">تومان : {{ $product->price }}</h4>
                                        </td>
                                        <td class="td_to_center">
                                            <form class="form_delete_edit" action="/product/{{ $product->slug }}"
                                                method="get">
                                                <button class="btn btn-app bg-aqua">
                                                    <i class="fa fa-eye"></i>جزعیات محصول
                                                </button>
                                            </form>
                                            <form class="form_delete_edit" action="product/{{ $product->slug }}/edit"
                                                method="get">
                                                <button class="btn btn-app bg-yellow">
                                                    <i class="fa fa-edit"></i> ویرایش
                                                </button>
                                            </form>

                                            <form class="form_delete_edit" action="products/{{ $product->slug }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-app bg-red">
                                                    <i class="fa fa-trash"></i> حذف
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
