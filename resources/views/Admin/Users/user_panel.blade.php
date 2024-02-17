@extends('Admin.master-admin')
@section('title_admin',  $user->name)
@section('main')
    <section class="content-header">
        <h1>{{ $user->name }}</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin/home') }}"><i class="fa fa-dashboard"></i>خانه</a></li>
            <li class="active">{{ $user->name }}</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <h4>{{ $user->name }}</h4>
                    <h4>{{ $user->email }}</h4>
                    <h4>{{ $user->password }}</h4>
                </div>
            </div>
        </div>
    </section>
@endsection
