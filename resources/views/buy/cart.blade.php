@extends('layouts.master')
@section('title', 'سبد خرید')
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/">خانـه</a></li>
                    <li class="active">سبد خرید</li>
                </ol>
            </div><!--/breadcrums-->
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">تصویر</td>
                            <td class="image">نام</td>
                            <td class="price">قیمت</td>
                            <td class="total">قیمت کل</td>
                            <td class="quantity">تعـداد</td>
                            <td class="total">دستورات</td>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;">
{{--                    {{dd($items)}}--}}
                        @if ($items != null)
                            @foreach ($items as $item)
                                <tr>
                                    <td class="cart_product">
                                        <img width="300" src="{{ \Illuminate\Support\Facades\Storage::url($item['image']) }}">
                                    </td>
                                    <td class="cart_description">
                                        <h4>{{ $item['name'] }}</h4>
                                    </td>
                                    <td class="cart_price">
                                        <p>{{ $item['price'] }}</p>
                                    </td>
                                    <td class="cart_quantity">
                                        <p class="cart_total_price">{{ $item['count'] * (int)$item['price'] }}</p>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">{{ $item['price'] }}</p>
                                    </td>
                                    <td class="cart_delete">
                                        <form action="/buy/{{ $item['item_id'] }}/delete" method="post">
                                            @csrf
                                            <button type="submit" class="cart_quantity_delete"><i
                                                    class="fa fa-times"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                                <h3>{{ $msg }}</h3>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <style>
        footer {
            display: none;
        }
    </style>
@endsection
