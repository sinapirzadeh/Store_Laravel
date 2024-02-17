@extends('Admin.master-admin')
@section('title_admin', 'کاربران')
@section('main')
    <section class="content-header">
        <h1>مدیریت کاربران</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin/home') }}"><i class="fa fa-dashboard"></i>خانه</a></li>
            <li class="active">مدیریت کاربران</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">


                    <div class="box-body table-responsive ">
                        <table class="table textc">
                            <thead class="bg-green">
                                <tr>
                                    <th>نام</th>
                                    <th>ایمیل</th>
                                    <th>دستورات</th>
                                </tr>
                            </thead>
                            @foreach ($users as $user)
                                <tbody class="bg_body_co">
                                    <tr>
                                        <td class="td_to_center box-title">
                                            <h4 class="text-success">{{ $user->name }}</h4>
                                        </td>
                                        <td class="td_to_center box-title">
                                            <h4>{{ $user->email }}</h4>
                                        </td>
                                        <td class="td_to_center">
                                            <form class="form_delete_edit" action="users/{{ $user->id }}"
                                                method="get">
                                                <button class="btn btn-app bg-aqua">
                                                    <i class="fa fa-eye"></i>جزعیات
                                                </button>
                                            </form>

                                            <form class="form_delete_edit" action="users/{{ $user->id }}"
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
