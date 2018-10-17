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
                <h5 class="panel-title">ساخت دفتر تلفن</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
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
            <div class="panel-body">
                <form action="/admin/client" enctype='multipart/form-data' method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">نام</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">توضیحات</label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="fax">فکس</label>
                                <input type="text" class="form-control" id="fax" name="fax">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="sellpercent">درصد موفقییت فروش</label>
                                <select class="select-search select2-hidden-accessible" tabindex="-1" aria-hidden="true"
                                        name="sellpercent" id="sellpercent">
                                    <option value="10">%10</option>
                                    <option value="20">%20</option>
                                    <option value="30">%30</option>
                                    <option value="40">%40</option>
                                    <option value="50">%50</option>
                                    <option value="60">%60</option>
                                    <option value="70">%70</option>
                                    <option value="80">%80</option>
                                    <option value="90">%90</option>
                                    <option value="100">%100</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>انتخاب مشتری  (اگر گزینه بالقوه انتخاب شود در لیست مخاطبین نمایش داده میشود)</label>
                                <select class="select-search select2-hidden-accessible" tabindex="-1" aria-hidden="true"
                                        name="client_type">
                                    <option value="بالفعل">بالفعل</option>
                                    <option value="بالقوه">بالقوه</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 has-success">
                            <div class="form-group">
                                <label class="control-label" for="adrress1">آدرس اول</label>
                                <input type="text" class="form-control" id="adrress1" name="adrress1">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="adrress2">آدرس دوم</label>
                                <input type="text" class="form-control" id="adrress2" name="adrress2">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="adrress3">آدرس سوم</label>
                                <input type="text" class="form-control" id="adrress3" name="adrress3">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="adrress4">آدرس چهارم</label>
                                <input type="text" class="form-control" id="adrress4" name="adrress4">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="adrress5">آدرس پنجم</label>
                                <input type="text" class="form-control" id="adrress5" name="adrress5">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group has-success">
                                <label class="control-label" for="telephone1">تلفن همراه</label>
                                <input type="text" class="form-control" id="telephone1" name="telephone1">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="telephone2">تلفن دوم</label>
                                <input type="text" class="form-control" id="telephone2" name="telephone2">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="telephone3">تلفن سوم</label>
                                <input type="text" class="form-control" id="telephone3" name="telephone3">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="telephone4">تلفن چهارم</label>
                                <input type="text" class="form-control" id="telephone4" name="telephone4">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="telephone5">تلفن پنجم</label>
                                <input type="text" class="form-control" id="telephone5" name="telephone5">
                            </div>
                        </div>
                    </div>
                    {{--<div class="form-group row">--}}
                        {{--<label class="col-form-label col-lg-2">تصویر قرار داد</label>--}}
                        {{--<div class="col-lg-10">--}}
                            {{--<input type="file" name="agreement" id="agreement" >--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <button type="submit" class="btn btn-primary btn-raised legitRipple">ارسال</button>
                    <button type="clear" class="btn btn-danger btn-raised legitRipple">انصراف</button>
                </form>
            </div>


        </div>
    </div>
</div>
@include('footer')
