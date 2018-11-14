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
                            <li class="active"><a href="message"><i class="icon-drawer-in"></i> صندوق دریافت <span class="badge badge-success">32</span></a></li>
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
        <div class="container-detached">
            <div class="content-detached">

                <!-- Single mail -->
                <div class="panel panel-white">

                    <!-- Mail toolbar -->
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
                                    <a href="mail_write.html" class="btn btn-default"><i class="icon-reply"></i> <span class="hidden-xs position-right">پاسخ</span></a>
                                    <a href="mail_write.html" class="btn btn-default"><i class="icon-reply-all"></i> <span class="hidden-xs position-right">پاسخ به همه</span></a>
                                    <a href="mail_write.html" class="btn btn-default"><i class="icon-forward"></i> <span class="hidden-xs position-right"></span>ارسال به دیگری</a>
                                    <a href="#" class="btn btn-default"><i class="icon-bin"></i> <span class="hidden-xs position-right">حذف</span></a>


                                </div>

                                <div class="pull-right-lg">
                                    <p class="navbar-text">12:50 ب . ظ</p>
                                    <div class="btn-group navbar-btn">
                                        <a href="#" class="btn btn-default"><i class="icon-printer"></i> <span class="hidden-xs position-right">چاپ</span></a>
                                        <a href="#" class="btn btn-default"><i class="icon-new-tab2"></i> <span class="hidden-xs position-right">اشتراک گذاری</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /mail toolbar -->


                    <!-- Mail details -->
                    <div class="media stack-media-on-mobile mail-details-read">
                        <a href="#" class="media-left">
										<span class="btn bg-teal-400 btn-rounded btn-icon btn-xlg">
                                           <i class=" icon-mailbox"></i>
										</span>
                        </a>

                        <div class="media-body">
                            <h6 class="media-heading">{{$message->title}}</h6>

                            <div class="letter-icon-title text-semibold">
                                    {{$sender_name->users->name}}
                                </div>
                        </div>

                        <div class="media-right media-middle text-nowrap">
                            <ul class="list-inline list-inline-condensed no-margin">
                                <li><a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-xs" alt=""></a></li>
                                <li><a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-xs" alt=""></a></li>
                                <li><a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-xs" alt=""></a></li>
                                <li><span class="btn bg-teal-400 btn-xs">+26</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /mail details -->


                    <!-- Mail container -->
                    <div class="mail-container-read">

                        <!-- Email sample (demo) -->
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                            <tr>
                                <td>

                                    <!-- Hero -->
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                        <tr>
                                            <td align="center" bgcolor="#f67b7c" style="background-image: url('http://demo.interface.club/limitless/assets/images/bg.png'); background-repeat: repeat;">
                                                <table width="640" border="0" cellpadding="0" cellspacing="0" align="center">
                                                    <tr>
                                                        <td width="100%" height="15"></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">

                                                            <!-- Nav -->
                                                            <table width="600" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td width="100%" valign="middle">

                                                                        <!-- Logo -->
                                                                        <table width="280" border="0" cellpadding="0" cellspacing="0" align="left">
                                                                            <tr>
                                                                                <td height="60" valign="middle" width="100%" align="left">
                                                                                    <a href="#"><img width="125" src="../../../../global_assets/images/logo_light.png" alt=""></a>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <!-- /logo -->



                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="30"></td>
                                                                </tr>
                                                            </table>
                                                            <!-- /nav -->


                                                            <!-- Title -->
                                                            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                <tr>
                                                                    <td valign="middle" align="center" style="font-size: 40px; color: #ffffff; line-height: 50px; font-weight: 300;">

                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- /title -->


                                                            <!-- Subtitle -->
                                                            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                <tr>
                                                                    <td width="100%" height="30"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" width="100%">
                                                                        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                            <tr>
                                                                                <td width="30"></td>
                                                                                <td width="540" align="center" style="font-size: 14px; color: #ffffff; line-height: 24px;">
                                                                                    {!!html_entity_decode($message->body)!!}
                                                                                </td>
                                                                                <td width="30"></td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- /subtitle -->




                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="100%" height="50"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- /hero -->





                                    <!-- Footer -->
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                        <tr>
                                            <td align="center" width="100%" valign="top" bgcolor="#344b61">

                                                <!-- Wrapper -->
                                                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                                    <tr>
                                                        <td width="100%" height="40" align="center" valign="middle" style="font-size: 12px; color: #aebecd;">



                                                            <a href="{{ URL::to('admin/message/' . $message->id . '/edit') }}" style="color: #ffffff;">تغییر وضعییت</a>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- /wrapper -->

                                            </td>
                                        </tr>
                                    </table>
                                    <!-- /footer -->

                                </td>
                            </tr>
                        </table>
                        <!-- /email sample (demo) -->

                    </div>
                    <!-- /mail container -->


                    {{--<!-- Attachments -->--}}
                    {{--<div class="mail-attachments-container">--}}
                        {{--<h6 class="mail-attachments-heading">2 Attachments</h6>--}}

                        {{--<ul class="mail-attachments">--}}
                            {{--<li>--}}
											{{--<span class="mail-attachments-preview">--}}
												{{--<i class="icon-file-pdf icon-2x"></i>--}}
											{{--</span>--}}

                                {{--<div class="mail-attachments-content">--}}
                                    {{--<span class="text-semibold">new_december_offers.pdf</span>--}}

                                    {{--<ul class="list-inline list-inline-condensed no-margin">--}}
                                        {{--<li class="text-muted">174 KB</li>--}}
                                        {{--<li><a href="#">View</a></li>--}}
                                        {{--<li><a href="#">Download</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</li>--}}

                            {{--<li>--}}
											{{--<span class="mail-attachments-preview">--}}
												{{--<i class="icon-file-pdf icon-2x"></i>--}}
											{{--</span>--}}

                                {{--<div class="mail-attachments-content">--}}
                                    {{--<span class="text-semibold">assignment_letter.pdf</span>--}}

                                    {{--<ul class="list-inline list-inline-condensed no-margin">--}}
                                        {{--<li class="text-muted">736 KB</li>--}}
                                        {{--<li><a href="#">View</a></li>--}}
                                        {{--<li><a href="#">Download</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<!-- /attachments -->--}}

                </div>
                <!-- /single mail -->

            </div>
        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->
@include('footer')

