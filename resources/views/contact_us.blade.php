@extends('layouts.master')
@section('title', 'تماس با ما')
@section('content')
    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">با ما در ارتباط باشیـد</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required"
                                    placeholder="نام">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" required="required"
                                    placeholder="ایمیـل">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required"
                                    placeholder="موضـوع">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="" class="form-control" rows="8" placeholder="پیغـام شمـا"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="ارسـال">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">اطلاعات تماس</h2>
                        <address>
                            <p>گـروه تکنوگـرافی 1614</p>
                            <p>ایـران - آذربایجـان غربـی - خـوی</p>
                            <p>مجتـمع تجـاری تفریحـی شمس - طبـقه 2 - پلاک 54</p>
                            <p>تلفن تماس : 80 21 24 36 044</p>
                            <p>فکس : 80 21 24 36 044</p>
                            <p style="font-family: tahoma;">ایمیـل : info@1614GP.ir</p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
