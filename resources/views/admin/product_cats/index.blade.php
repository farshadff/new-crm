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
                <h5 class="panel-title">دفترچه تلفن</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">

            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr class="border-double">
                        <th>ردیف</th>
                        <th scope="col">نام دسته</th>
                        <th scope="col">توضیحات توضیحات دسته</th>
                        <th scope="col">عملیات ها</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($product_cats as $product_cat)
                        <tr>
                            <th scope="row">{{$product_cat->id}}</th>
                            <td><a href="/admin/product_cats/{{$product_cat->id}}">{{$product_cat->title}}</a></td>
                            <td>{{$product_cat->description}}</td>
                            <td>
                                <div class="btn-group inline-display" role="group" aria-label="Basic example">
                                    <a href="{{ URL::to('admin/product_cats/' . $product_cat->id . '/edit') }}">
                                        <button type="button" class="btn btn-primary">ویراییش</button>
                                    </a>&nbsp;
                                    <form style="display:inline" action="{{url('admin/product_cats', [$product_cat->id])}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-danger" value="حذف"/>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@include('footer')
