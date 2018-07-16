<?php
/**
 * Created by PhpStorm.
 * User: farshad
 * Date: 5/23/2018
 * Time: 12:26 AM
 */

?>


@include('header');
@include('sidebar');
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
                                <th>نام مدیر فروش</th>
                                <th>ایمیل</th>
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
                                    {{{ Auth::user()->created_at }}}
                                </td>


                                <td>
                                    <div class="btn-group inline-display" role="group">
                                        <a href="{{ URL::to('admin/phonebook/' . '/edit') }}">
                                            <button type="button" class="btn btn-primary legitRipple">ویراییش</button>
                                        </a>&nbsp;
                                        <form class="inline-display" action="{{url('admin/opportunities', [])}}"
                                              method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-warning legitRipple" value="حذف"/>
                                        </form>
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
                        <h5 class="panel-title">ویراییش عکس</h5>

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
                        <h4 class="text-center">
                            <button type="button" class="btn btn-success btn-labeled btn-labeled-left btn-sm legitRipple"><b><i class="icon-pencil4 mr-3"></i></b>ویراییش</button>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">ویراییش شماه همراه</h5>

                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <h4 class="text-center">{{{ Auth::user()->mobile }}}</h4>
                        <h4 class="text-center">
                            <button type="button" class="btn btn-success btn-labeled btn-labeled-left btn-sm legitRipple"><b><i class="icon-pencil4 mr-3"></i></b>ویراییش</button>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@include('footer');

