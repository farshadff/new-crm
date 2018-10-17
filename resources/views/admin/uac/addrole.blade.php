<?php
?>
@include('header')
@include('sidebar')
<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Dashboard
                </h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="#" class="btn btn-link btn-float text-size-small has-text"><i
                            class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float text-size-small has-text"><i
                            class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                    <a href="#" class="btn btn-link btn-float text-size-small has-text"><i
                            class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ul>

            <ul class="breadcrumb-elements">
                <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-gear position-left"></i>
                        Settings
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                        <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                        <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <div class="content">
        <!-- Horizontal borders -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">اضافه کردن نقش</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">

                    <form action="/admin/addrole" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">نام نقش</label>
                                <input type="text" class="form-control" id="rolename" name="rolename">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="description">نام نمایشی نقش</label>
                                <input type="text" class="form-control" id="roletitle" name="roletitle">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">ارسال</button>
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

    @include('footer')


