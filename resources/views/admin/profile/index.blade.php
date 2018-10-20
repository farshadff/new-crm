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

    <!-- Content area -->
    <div class="content">
        <!-- Horizontal borders -->
        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">ویراییش پروفایل</h5>

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
                        <table class="table table-framed table-xl">
                            <thead>
                            <tr class="border-double bg-blue">
                                <th>ردیف</th>
                                <th>نام</th>
                                <th>ایمیل</th>
                                <th>پرسنلی</th>
                                <th>شماره ملی</th>
                                <th>تاریخ ساخت حساب</th>
                                <th>عملیات ها</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    {{{  Auth::user()->id}}}
                                </td>
                                <td>
                                    {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
                                </td>
                                <td>
                                    {{{ Auth::user()->email }}}
                                </td>
                                <td>
                                    {{{ Auth::user()->personeli }}}
                                </td>
                                <td>
                                    {{{ Auth::user()->melicode }}}
                                </td>
                                <td>
                                  {{new Verta(Auth::user()->created_at)}}
                                </td>


                                <td>
                                    <div class="btn-group inline-display" role="group">
                                        {{--{{{url('admin/profile/'. Auth::user)}}}--}}

                                        <a href=" {{ URL::to('admin/profile/' . Auth::user()->id ) }}">
                                            <button type="button" class="btn btn-primary legitRipple">ویراییش</button>
                                        </a>

                                    </div>
                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">شماره همراه</h5>

                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">

                        <h4 class="text-center">   {{{ Auth::user()->mobile }}} <i class="icon-mobile
"></i></h4>

                    </div>
                </div>
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">تصویر کاربر</h5>

                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="sidebar-user-material-content">
                            <a href="#" class="legitRipple"><img src="http://localhost:8000/assets/images/user-image.jpg" class="img-circle img-responsive" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>

    </div>
</div>
@include('footer')

