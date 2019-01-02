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
        <div class="container-detached">
            <div class="content-detached">

                <!-- Single mail -->
                <div class="panel panel-white">


                    <form action="/admin/message/store" method="POST">
                    {{ csrf_field() }}
                    <!-- Mail details -->
                    <div class="table-responsive mail-details-write">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td style="width: 150px">ارسال به</td>
                                <td class="no-padding">
                                    <div class="form-group">
                                        <select class="select select2-hidden-accessible" name="receiver_id" tabindex="-1" aria-hidden="true">
                                            <optgroup label="لطفا مخاطب مورد نظر خود را انتخاب کنید">
                                              @foreach($user as $users)
                                                <option value="{{{$users->id}}}">{{$users->name}}</option>
                                                  @endforeach
                                            </optgroup>
                                        </select>
                                    </div></td>
                                <td style="width: 250px" class="text-right">

                                    <div class="form-group">
                                        <select class="select" name="status" tabindex="-1" aria-hidden="true">

                                                <option value="0">انجام نشده</option>
                                                <option value="1">در حال انجام</option>
                                                <option value="2">تمام شده</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>موضوع</td>
                                <td class="no-padding"><input type="text" class="form-control" name="title" placeholder="موضوع پیام"></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <ul class="list-inline no-margin">
                                        <li><a href="#"><i class="icon-attachment position-left"></i>افزودن فایل</a></li>
                                        <li><a href="#"><i class="icon-google-drive position-left"></i> گوگل درایو</a></li>

                                    </ul>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /mail details -->

                    <!-- Mail container -->

                    <div class="mail-container-write">
                        <textarea name="summernoteInput" class="summernote"></textarea>
                        <br>
                                <button class="btn btn-success" type="submit">ارسال</button>
                        <a class="btn btn-danger" href="">لغو</a>
                    </div>
                    </form>
                    <!-- /mail container -->
                    <!-- Attachments -->
                    <div class="mail-attachments-container">
                        <h6 class="mail-attachments-heading">فایل های ضمیمه</h6>
                        <ul class="mail-attachments">
                            <li>
											<span class="mail-attachments-preview">
												<i class="icon-file-pdf icon-2x"></i>
											</span>

                                <div class="mail-attachments-content">
                                    <span class="text-semibold">dastor-jalase.pdf</span>
                                    <ul class="list-inline list-inline-condensed no-margin">
                                        <li class="text-muted">174 KB</li>
                                        <li><a href="#">مشاهده</a></li>
                                        <li><a href="#">حذف</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
											<span class="mail-attachments-preview">
												<i class="icon-file-pdf icon-2x"></i>
											</span>

                                <div class="mail-attachments-content">
                                    <span class="text-semibold">assignment_letter.pdf</span>
                                    <ul class="list-inline list-inline-condensed no-margin">
                                        <li class="text-muted">736 KB</li>
                                        <li><a href="#">مشاهده</a></li>
                                        <li><a href="#">حذف</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /attachments -->
                </div>
                <!-- /single mail -->
            </div>
        </div>
        <!-- /main content -->
    </div>
    <!-- /page content -->
</div>
<!-- /page container -->
<script>
    /* ------------------------------------------------------------------------------
*
*  # Inbox page - Writing
*
*  Demo JS code for mail_list_write.html page
*
* ---------------------------------------------------------------------------- */

    document.addEventListener('DOMContentLoaded', function() {


        // Plugins
        // ------------------------------

        // Summernote editor
        $('.summernote').summernote({
            height: 540,
            lang: 'fa-IR' // default: 'en-US'
        });


        // Related form components
        // ------------------------------

        // Styled checkboxes/radios
        $(".link-dialog input[type=checkbox], .note-modal-form input[type=radio]").uniform();

        // Styled file input
        $(".note-image-input").uniform({
            fileButtonClass: 'action btn bg-warning-400',

        });

    });
</script>
@include('footer')

