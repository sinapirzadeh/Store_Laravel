@extends('Admin.master-admin')
@section('title_admin', 'دسته بندی محصولات')
@section('main')
    <section class="content-header">
        <h1>مدیریت دسته بندی محصولات</h1>
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
                                            <form role="form" action="/admin/products_category" method="POST"
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
                                                        <label class="color_t" for="description_category">توضیحات
                                                            دسته بندی</label>
                                                        <input type="text" name="description" class="form-control"
                                                            id="description_category" placeholder="توضیحات">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="color_t">دسته بندی اصلی</label>
                                                        <select name="parent_category"
                                                            class="form-control select2 select2-hidden-accessible"
                                                            style="height: 35px;" tabindex="-1" aria-hidden="true">
                                                            <option value="">به عنوان دسته بندی اصلی</option>
                                                            @foreach ($categories as $parent)
                                                                <option value="{{ $parent->category_id }}">
                                                                    {{ $parent->title }}
                                                                </option><br>
                                                            @endforeach
                                                        </select>
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
                            @foreach ($categories as $category)
                                <tbody class="bg_body_co">
                                    <tr>
                                        {{-- <td class="td_to_center"><span
                                                class="badge bg-green"></span></td> --}}
                                        <td class="td_to_center"><img width="" class="img-responsive img_redues"
                                                src="{{ Storage::url($category->image) }}" alt="{{ $category->title }}">
                                        </td>
                                        <td class="td_to_center box-title">
                                            <h4>{{ $category->title }}</h4>
                                        </td>
                                        <td class="td_to_center">
                                            <button onclick="show_category('{{ $category->category_id }}')"
                                                class="btn btn-app bg-aqua">
                                                <i class="fa fa-sort-amount-asc"></i> زیر دسته بندی ها
                                            </button>
                                            <form class="form_delete_edit"
                                                action="products_category/{{ $category->slug }}/edit"
                                                method="get">
                                                <button class="btn btn-app bg-yellow">
                                                    <i class="fa fa-edit"></i> ویرایش
                                                </button>
                                            </form>

                                            <form class="form_delete_edit"
                                                action="products_category/{{ $category->slug }}"
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

                                <tbody class="bg_body_co bg-wh" id="{{ $category->category_id }}">
                                    <tr class="bg-aqua">
                                        <th>تصویر</th>
                                        <th>نام</th>
                                        <th>دستورات</th>
                                    </tr>
                                    @foreach ($category->childCategory as $parent)
                                        <tr>
                                            {{-- <td class="td_to_center"><span
                                                        class="badge bg-green"></span></td> --}}
                                            <td class="td_to_center"><img class="img-responsive img_redues"
                                                    src="{{ Storage::url($parent->image) }}" alt="{{ $parent->title }}">
                                            </td>
                                            <td class="td_to_center box-title">
                                                <h4>{{ $parent->title }}</h4>
                                            </td>
                                            <td class="td_to_center">
                                                <form class="form_delete_edit"
                                                    action="products_category/{{ $parent->slug }}/edit"
                                                    method="get">
                                                    <button class="btn btn-app bg-yellow">
                                                        <i class="fa fa-edit"></i> ویرایش
                                                    </button>
                                                </form>

                                                <form class="form_delete_edit"
                                                    action="products_category/{{ $parent->slug }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-app bg-red">
                                                        <i class="fa fa-trash"></i> حذف
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function show_category(id) {
            if (document.getElementById(id).style.display == 'none') {
                document.getElementById(id).style.display = 'table-row-group';
            } else {
                document.getElementById(id).style.display = 'none';
            }
        }
    </script>
@endsection
