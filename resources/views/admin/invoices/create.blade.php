<?php
/**
 * Created by PhpStorm.
 * User: farshad
 * Date: 5/23/2018
 * Time: 12:26 AM
 */
?>

@include('header')
@include('sidebar')
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">خانه</span> داشبورد
                </h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="#" class="btn btn-link btn-float text-size-small has-text"><i
                                class="icon-bars-alt text-primary"></i><span>آمار</span></a>
                    <a href="#" class="btn btn-link btn-float text-size-small has-text"><i
                                class="icon-calculator text-primary"></i> <span>فاکتور ها</span></a>
                    <a href="#" class="btn btn-link btn-float text-size-small has-text"><i
                                class="icon-calendar5 text-primary"></i> <span>قرار ها</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li class="active">داشبورد</li>
            </ul>

            <ul class="breadcrumb-elements">
                <li><a href="#"><i class="icon-comment-discussion position-left"></i> پشتیبانی</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-gear position-left"></i>
                        تنظیمات
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-lock"></i> تغییر رمز</a></li>
                        <li><a href="#"><i class="icon-statistics"></i> آنالیز فروش</a></li>
                        <li><a href="#"><i class="icon-accessibility"></i>سطح دسترسی من</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-gear"></i> تنظیمات سیستم</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">
        <!-- Horizontal borders -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">صدور پیش فاکتور</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">

                <form method="post" action="{{url('admin/invoices')}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group"> <!-- Street 1 -->
                                <label for="title" class="control-label">نام</label>
                                <input type="text" class="form-control" id="title" name="title"
                                       placeholder="نام فاکتور">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"> <!-- Full Name -->
                                <label for="description" class="control-label">توضیحات</label>
                                <input type="text" class="form-control" id="description" name="description"
                                       placeholder="توضیحات فاکتور را وارد کنید">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="display-block">انتخاب مشتری</label>
                                <select class="select-custom-colors select2-hidden-accessible" name="client_id" tabindex="-1"
                                        aria-hidden="true">
                                    @foreach($clients as $client)
                                        <option value="{{$client->id}}">{{$client->title}}</option>
                                    @endforeach
                                </select>


                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-8">
                            <label>انتخاب محصول</label>
                            <select class="select-menu2-color select2-hidden-accessible" name="product_id1"
                                    tabindex="-1"
                                    aria-hidden="true">

                                @foreach($produts as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group"> <!-- Street 1 -->
                                <label for="title" class="control-label">تعداد</label>
                                <input type="text" class="form-control" id="title" name="product_qa1"
                                       placeholder="تعداد محصول را به عدد وارد کنید">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <label>انتخاب محصول</label>
                            <select class="select-menu2-color select2-hidden-accessible" name="product_id2"
                                    tabindex="-1"
                                    aria-hidden="true">
                                <option value="">لطفا یک محصول انتخاب کنید</option>
                                @foreach($produts as $product)

                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-xs-4">
                            <div class="form-group"> <!-- Street 1 -->
                                <label for="title" class="control-label">تعداد</label>
                                <input type="text" class="form-control" id="title" name="product_qa2"
                                       placeholder="تعداد محصول را به عدد وارد کنید">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <label>انتخاب محصول</label>
                            <select class="select-menu2-color select2-hidden-accessible" name="product_id3"
                                    tabindex="-1"
                                    aria-hidden="true">
                                <option value="">لطفا یک محصول انتخاب کنید</option>
                                @foreach($produts as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"> <!-- Street 1 -->
                                <label for="title" class="control-label">تعداد</label>
                                <input type="text" class="form-control" id="title" name="product_qa3"
                                       placeholder="تعداد محصول را به عدد وارد کنید">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <label>انتخاب محصول</label>
                            <select class="select-menu2-color select2-hidden-accessible" name="product_id4"
                                    tabindex="-1"
                                    aria-hidden="true">
                                <option value="">لطفا یک محصول انتخاب کنید</option>
                                @foreach($produts as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"> <!-- Street 1 -->
                                <label for="title" class="control-label">تعداد</label>
                                <input type="text" class="form-control" id="title" name="product_qa4"
                                       placeholder="تعداد محصول را به عدد وارد کنید">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <label>انتخاب محصول</label>
                            <select class="select-menu2-color select2-hidden-accessible" name="product_id5"
                                    tabindex="-1"
                                    aria-hidden="true">
                                <option value="">لطفا یک محصول انتخاب کنید</option>
                                @foreach($produts as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"> <!-- Street 1 -->
                                <label for="title" class="control-label">تعداد</label>
                                <input type="text" class="form-control" id="title" name="product_qa5"
                                       placeholder="تعداد محصول را به عدد وارد کنید">
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary btn-raised legitRipple">ارسال</button>
                </form>
            </div>
            @if ($errors->any())
                <div class="panel panel-flat bg-warning">
                    <div class="panel-heading">
                        <h5 class="panel-title">لطفا خطاهای زیر را بررسی کنید</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">

                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif


        </div>
    </div>
</div>
{{-- adding field script--}}


@include('footer')
