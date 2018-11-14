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
<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">
        <!-- Secondary sidebar -->
        <div class="sidebar sidebar-secondary sidebar-default">
            <div class="sidebar-content">

                <!-- Actions -->
                <div class="sidebar-category">
                    <div class="category-title">
                        <span></span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content">
                        <a href="message/write" class="btn bg-indigo-400 btn-block">ارسال ایمیل</a>
                    </div>
                </div>
                <!-- /actions -->


                <!-- Sub navigation -->
                <div class="sidebar-category">
                    <div class="category-title">
                        <span></span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content no-padding">
                        <ul class="navigation navigation-alt navigation-accordion no-padding-bottom">
                            <li class="navigation-header">صندوق ها</li>
                            <li class="active"><a href="/admin/message/"><i class="icon-drawer-in"></i> صندوق دریافت <span class="badge badge-success">32</span></a></li>
                            <li><a href="#"><i class="icon-drawer-out"></i>ارسال شده ها</a></li>
                            <li><a href="#"><i class="icon-bin"></i>سطل زباله</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /sub navigation -->
            </div>
        </div>
        <!-- /secondary sidebar -->
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Page header -->
            <div class="page-header">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">بازگشت به خانه</span></h4>
                    </div>

                    <div class="heading-elements">
                        <form class="heading-form" action="#">
                            <div class="form-group">
                                <div class="has-feedback">
                                    <input type="search" class="form-control" placeholder="جستجو پیام">
                                    <div class="form-control-feedback">
                                        <i class="icon-search4 text-size-small text-muted"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-component">
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="icon-home2 position-left"></i> خانه</a></li>
                        <li><a href="mail_list.html">مرکز پیام</a></li>
                        <li class="active">صندوق دریافت</li>
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


            <!-- Content area -->
            <div class="content">

                <!-- Single line -->
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h6 class="panel-title">صندوق دریافت</h6>

                        <div class="heading-elements not-collapsible">
                            <span class="label bg-blue heading-text">19 پیام جدید امروز</span>
                        </div>
                    </div>

                    <div class="panel-toolbar panel-toolbar-inbox">
                        <div class="navbar navbar-default">
                            <ul class="nav navbar-nav visible-xs-block no-border">
                                <li>
                                    <a class="text-center collapsed" data-toggle="collapse" data-target="#inbox-toolbar-toggle-single">
                                        <i class="icon-circle-down2"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class="navbar-collapse collapse" id="inbox-toolbar-toggle-single">
                                <div class="btn-group navbar-btn">
                                    <button type="button" class="btn btn-default btn-icon btn-checkbox-all">
                                        <input type="checkbox" class="styled">
                                    </button>

                                    <button type="button" class="btn btn-default btn-icon dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li><a href="#">انتخاب همه</a></li>
                                        <li><a href="#">انتخاب خوانده شده ها</a></li>
                                        <li><a href="#">انتخاب خوانده نشده ها</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">پاک کردن انتخاب ها</a></li>
                                    </ul>
                                </div>

                                <div class="btn-group navbar-btn">
                                    <a href="{{{url('/')}}}/admin/message/write" class="btn btn-default"><i class="icon-pencil7"></i> <span class="hidden-xs position-right">ارسال</span></a>
                                    <a href="{{{url('/')}}}/admin/message/write" class="btn btn-default"><i class="icon-bin"></i> <span class="hidden-xs position-right">حذف</span></a>
                                    <a href="{{{url('/')}}}/admin/message/write" class="btn btn-default"><i class="icon-spam"></i> <span class="hidden-xs position-right">اسپم</span></a>
                                </div>

                                <div class="navbar-right">
                                    <p class="navbar-text"><span class="text-semibold">1-50</span> of <span class="text-semibold">528</span></p>

                                    <div class="btn-group navbar-left navbar-btn">
                                        <button type="button" class="btn btn-default btn-icon disabled"><i class="icon-arrow-right13"></i></button>
                                        <button type="button" class="btn btn-default btn-icon"><i class="icon-arrow-left12"></i></button>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-inbox">
                            <tbody data-link="row" class="rowlink">

                            @foreach($message as $messages)
                                @if($user_id === $messages->receiver_id)
                            <tr class="unread">
                                <td class="table-inbox-checkbox rowlink-skip">
                                    <input type="checkbox" class="styled">
                                </td>
                                <td class="table-inbox-image">
                                  @if($messages->status === 0)
                                        <span class="label bg-danger position-left">  انجام نشده</span>
                                      @elseif($messages->status === 1)
                                        <span class="label bg-warning position-left">  درحال انجام</span>
                                      @else
                                        <span class="label bg-success position-left">تمام شده</span>
                                    @endif
                                </td>
                                <td class="table-inbox-name">
                                    <a href="/admin/message/{{$messages->id}}">


                                        <div class="letter-icon-title text-default"> {!!html_entity_decode($messages->title)!!}</div>

                                    </a>
                                </td>
                                <td class="table-inbox-message">
                                    <span class="table-inbox-preview">
                                    {!!str_limit(html_entity_decode($messages->body),20)!!}
                                    </span>
                                </td>
                                <td class="table-inbox-attachment">
                                    <i class="icon-attachment text-muted"></i>
                                </td>
                                <td class="table-inbox-time">
                                    {{{$messages->created_at->format('h:m')}}}
                                </td>
                            </tr>
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /single line -->
                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->
@include('footer')

