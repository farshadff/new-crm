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
<!-- Main content -->
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
        {{--members to call  STart--}}
        @if (Auth::user())
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h5 class="panel-title">فاکتور ها</h5>

                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    {{--{{{new Verta($current_time)}}}--}}

                    <div class="table-responsive">
                        <table class="table ">
                            <thead>

                            <tr class="border-double">
                                <th>ردیف</th>
                                <th>نام مخاطب</th>
                                <th>توضیحات</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($invoices as $invoice)
                                <tr>
                                    <td scope="row">{{$invoice->id}}</td>
                                    <td><a href="/admin/invoices/{{$invoice->id}}">{{$invoice->title}}</a></td>
                                    <td scope="row">{{$invoice->description}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
                {{--members to call end--}}

            </div>
        @endif
    </div>
    @include('footer')

</div>
