@extends('layouts.master')
@section('title', 'فروشگاه')
@section('content')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="#">خانـه</a></li>
              <li class="active">پرداخت</li>
            </ol>
        </div><!--/breadcrums-->

        <div class="step-one">
            <h2 class="heading">مرحلـه اول</h2>
        </div>
        <div class="checkout-options">
            <h3>کاربـر جدیـد</h3>
            <p>گزینـه های پرداخت</p>
            <ul class="nav">
                <li>
                    <label><input type="radio"> ثبت نام هنگام پرداخت</label>
                </li>
                <li>
                    <label><input type="radio"> پرداخت به عنوان مهمان</label>
                </li>
                <li>
                    <a href=""><i class="fa fa-times"></i>انصراف</a>
                </li>
            </ul>
        </div><!--/checkout-options-->

        <div class="register-req">
            <p>لطفـاً برای دسترسی آسان به تاریخچـه خریـد خود از گزینه " ثبت نام هنگام پرداخت " استفاده نمایید و در غیر اینصورت گزینه " خرید به عنوان مهمان " را انتخاب نمایید</p>
        </div><!--/register-req-->

        <div class="shopper-informations">
            <div class="row">
                <div class="col-sm-3">
                    <div class="shopper-info">
                        <p>اطلاعات خریدار</p>
                        <form>
                            <input type="text" placeholder="نام و نام خانوادگی">
                            <input type="text" placeholder="نام کاربری">
                            <input type="password" placeholder="رمز عبور">
                            <input type="password" placeholder="تأیید رمز عبور">
                        </form>
                        <a class="btn btn-primary" href="">ثبت نام و ادامـه</a>
                    </div>
                </div>
                <div class="col-sm-9 clearfix">
                    <div class="bill-to">
                        <p>اطلاعات حمل</p>
                        <div class="form-one">
                            <form>
                                <input type="text" placeholder="نام شرکت">
                                <input type="text" placeholder="* ایمیـل" class="important-field">
                                <input type="text" placeholder="عنـوان">
                                <input type="text" class="important-field" placeholder="* نـام">
                                <input type="text" class="important-field" placeholder="* نام خانوادگـی">
                                <input type="text" class="important-field" placeholder="* آدرس 1">
                                <input type="text" placeholder="آدرس 2">
                            </form>
                        </div>
                        <div class="form-two">
                            <form>
                                <input type="text" class="important-field" placeholder="* کد پستـی">
                                <select class="important-field">
                                    <option>-- استـان --</option>
                                    <option>تهـران</option>
                                    <option>تهـران</option>
                                    <option>تهـران</option>
                                    <option>تهـران</option>
                                    <option>تهـران</option>
                                    <option>تهـران</option>
                                </select>
                                <select class="important-field">
                                    <option>-- شهـر / منطقـه --</option>
                                    <option>تهـران</option>
                                    <option>تهـران</option>
                                    <option>تهـران</option>
                                    <option>تهـران</option>
                                    <option>تهـران</option>
                                    <option>تهـران</option>
                                </select>
                                <input type="text" class="important-field" placeholder="* شمـاره تماس">
                                <input type="text" placeholder="موبایـل">
                                <input type="text" placeholder="فکـس">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="order-message">
                        <p>توضیحات</p>
                        <textarea name="message" placeholder="توضیحات دیگر در مورد خریـد" rows="16"></textarea>
                        <label><input type="checkbox"> میخواهید سفارش خود را به آدرس دیگری ارسال نماییـد ؟!</label>
                    </div>	
                </div>					
            </div>
        </div>
        <div class="review-payment">
            <h2>مشاهـده و پرداخت</h2>
        </div>

        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">کـالا</td>
                        <td class="description">توضیحات</td>
                        <td class="price">قیمت</td>
                        <td class="quantity">تعـداد</td>
                        <td class="total">مجمـوع</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="images/cart/one.png" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">کالای شمـاره 1</a></h4>
                            <p>شناسـه : 01010101</p>
                        </td>
                        <td class="cart_price">
                            <p>590.000 ريال</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">590.000 ريال</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="images/cart/two.png" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">کالای شمـاره 2</a></h4>
                            <p>شناسـه : 02020202</p>
                        </td>
                        <td class="cart_price">
                            <p>690.000 ريال</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">690.000 ريال</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="images/cart/three.png" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">کالای شمـاره 3</a></h4>
                            <p>شناسـه : 03030303</p>
                        </td>
                        <td class="cart_price">
                            <p>750.000 ريال</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">750.000 ريال</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr style="border-top: 2px solid #FD9A15">
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result" style="font-size: 13pt">
                                <tbody><tr>
                                    <td>مجمـوع سبـد خریـد</td>
                                    <td>2.030.000 ريال</td>
                                </tr>
                                <tr>
                                    <td>مالیـات (9%)</td>
                                    <td>182.700 ريال</td>
                                </tr>
                                <tr class="shipping-cost">
                                    <td>هزینـه حمل و نقـل</td>
                                    <td>رایـگان</td>										
                                </tr>
                                <tr>
                                    <td>مجمـوع</td>
                                    <td><span>2.212.700 ريال</span></td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="payment-options">
                <span>
                    <label><input type="radio"> پرداخت مستقیـم بانکی</label>
                </span>
                <span>
                    <label><input type="radio"> پرداخت از طریـق زریـن پال</label>
                </span>
                <span>
                    <label><input type="radio"> پرداخت از طریـق زریـن پال</label>
                </span>
                <span>
                    <button type="button" class="btn-primary">ثبت و پرداخت نهایـی</button>
                </span>
            </div>
    </div>
</section>
@endsection