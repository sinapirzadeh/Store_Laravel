@extends('Admin.master-admin')
@section('title_admin', 'دسته بندی مقالات')
@section('main')
    <section class="content-header">
        <h1>مدیریت دسته بندی مقالات</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin/home') }}"><i class="fa fa-dashboard"></i>خانه</a></li>
            <li class="active">دسته بندی محصولات</li>
        </ol>
    </section>

    @if ($errors->any())
        <section>
            <div class="box-body">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i>خطا برای ساخت دسته بندی</h4>
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
                        <div class="box-body">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                                <h5>افزودن دسته بندی جدید</h5>
                            </button>
                        </div>

                        <div class="modal modal-success fade in" id="modal-success"
                            style="display: none; padding-right: 17px;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">ایجاد دسته بندی</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="box box-primary">
                                            <form role="form" action="/admin/articales_category" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label class="color_t" for="title_category">نام دسته
                                                            بندی</label>
                                                        <input type="text" name="title" class="form-control"
                                                            id="title_category" placeholder="نام">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="color_t" for="slug_category">نمایش
                                                            url</label>
                                                        <input type="text" name="slug" class="form-control"
                                                            id="slug_category" placeholder="url">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="color_t" for="description_category">توضیحات
                                                            دسته بندی</label>
                                                        <input type="text" name="description" class="form-control"
                                                            id="description_category" placeholder="توضیحات">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="image_category" class="btn btn-success">
                                                            <input type="file" name="image" style="display:none"
                                                                id="image_category">
                                                            <span>انتخاب تصویر</span>
                                                        </label>
                                                        <p class="help-block">لطفا عکس مورد نظرتان 200px باشد و حتما به فرمت
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
                                    <th>دستورات</th>
                                </tr>
                            </thead>
                            @foreach ($articales as $artical)
                                <tbody class="bg_body_co">
                                    <tr>
                                        <td class="td_to_center"><img width="" class="img-responsive img_redues"
                                                src="{{ Storage::url($artical->image) }}" alt="{{ $artical->title }}">
                                        </td>
                                        <td class="td_to_center box-title">
                                            <h4>{{ $artical->title }}</h4>
                                        </td>
                                        <td class="td_to_center">
                                            <form class="form_delete_edit"
                                                action="articales_category/{{ $artical->slug }}/edit"
                                                method="get">
                                                <button class="btn btn-app bg-yellow">
                                                    <i class="fa fa-edit"></i> ویرایش
                                                </button>
                                            </form>

                                            <form class="form_delete_edit"
                                                action="articales_category/{{ $artical->slug }}"
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
