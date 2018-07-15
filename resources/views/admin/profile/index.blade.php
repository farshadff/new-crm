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
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">مامور فروش</h5>

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
</div>
@include('footer');

