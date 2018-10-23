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
                        <span>Actions</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content">
                        <a href="#" class="btn bg-indigo-400 btn-block">Compose mail</a>
                    </div>
                </div>
                <!-- /actions -->


                <!-- Sub navigation -->
                <div class="sidebar-category">
                    <div class="category-title">
                        <span>Navigation</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content no-padding">
                        <ul class="navigation navigation-alt navigation-accordion no-padding-bottom">
                            <li class="navigation-header">Folders</li>
                            <li class="active"><a href="#"><i class="icon-drawer-in"></i> Inbox <span
                                        class="badge badge-success">32</span></a></li>
                            <li><a href="#"><i class="icon-drawer3"></i> Drafts</a></li>
                            <li><a href="#"><i class="icon-drawer-out"></i> Sent mail</a></li>
                            <li><a href="#"><i class="icon-stars"></i> Starred</a></li>
                            <li class="navigation-divider"></li>
                            <li><a href="#"><i class="icon-spam"></i> Spam <span
                                        class="badge badge-danger">99+</span></a></li>
                            <li><a href="#"><i class="icon-bin"></i> Trash</a></li>
                            <li class="navigation-header">Labels</li>
                            <li><a href="#"><span class="status-mark border-primary position-left"></span> Facebook</a>
                            </li>
                            <li><a href="#"><span class="status-mark border-success position-left"></span> Spotify</a>
                            </li>
                            <li><a href="#"><span class="status-mark border-indigo position-left"></span> Twitter</a>
                            </li>
                            <li><a href="#"><span class="status-mark border-danger position-left"></span> Dribbble</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sub navigation -->


                <!-- Online users -->
                <div class="sidebar-category">
                    <div class="category-title">
                        <span>Chat</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content no-padding">
                        <ul class="media-list media-list-linked">
                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img
                                            src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">James Alexander</span>
                                        <span class="text-size-small text-muted display-block">UI/UX expert</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark bg-success"></span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img
                                            src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Jeremy Victorino</span>
                                        <span class="text-size-small text-muted display-block">Senior designer</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark bg-danger"></span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img
                                            src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-heading"><span class="text-semibold">Jordana Mills</span>
                                        </div>
                                        <span class="text-muted">Sales consultant</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark bg-grey-300"></span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img
                                            src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-heading"><span class="text-semibold">William Miles</span>
                                        </div>
                                        <span class="text-muted">SEO expert</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark bg-success"></span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img
                                            src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Margo Baker</span>
                                        <span class="text-size-small text-muted display-block">Google</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark bg-success"></span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img
                                            src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Beatrix Diaz</span>
                                        <span class="text-size-small text-muted display-block">Facebook</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark bg-warning-400"></span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img
                                            src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Richard Vango</span>
                                        <span class="text-size-small text-muted display-block">Microsoft</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark bg-grey-300"></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /online users -->


                <!-- Latest messages -->
                <div class="sidebar-category">
                    <div class="category-title">
                        <span>Latest messages</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content no-padding">
                        <ul class="media-list media-list-linked">
                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img
                                            src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Will Samuel</span>
                                        <span class="text-muted">And he looked over at the alarm clock, ticking..</span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img
                                            src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Margo Baker</span>
                                        <span class="text-muted">However hard he threw himself onto..</span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img
                                            src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Monica Smith</span>
                                        <span
                                            class="text-muted">Yes, but was it spanossible to quietly sleep through..</span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img
                                            src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Jordana Mills</span>
                                        <span class="text-muted">What should he do now? The next train went at..</span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img
                                            src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                            class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">John Craving</span>
                                        <span class="text-muted">Gregor then turned to look out the window..</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /latest messages -->

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
                                    <button type="button" class="btn bg-blue"><i class="icon-checkmark3 position-left"></i> Send mail</button>
                                </div>

                                <div class="btn-group navbar-btn">
                                    <button type="button" class="btn btn-default"><i class="icon-plus2"></i> <span class="hidden-xs position-right">Save</span></button>
                                    <button type="button" class="btn btn-default"><i class="icon-cross2"></i> <span class="hidden-xs position-right">Cancel</span></button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu7"></i>
                                            <span class="caret"></span>
                                        </button>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li><a href="#">One more line</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="pull-right-lg">
                                    <div class="btn-group navbar-btn">
                                        <button type="button" class="btn btn-default"><i class="icon-printer"></i> <span class="hidden-xs position-right">Print</span></button>
                                        <button type="button" class="btn btn-default"><i class="icon-new-tab2"></i> <span class="hidden-xs position-right">Share</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /mail toolbar -->
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
                                        <li><a href="#"><i class="icon-attachment position-left"></i> Attach files</a></li>
                                        <li><a href="#"><i class="icon-google-drive position-left"></i> Google Drive</a></li>
                                        <li><a href="#"><i class="icon-dropbox position-left"></i> Dropbox</a></li>
                                    </ul>
                                </td>
                                <td class="text-right">
                                    <a href="#"><i class="icon-cloud-upload2 position-left"></i> Cloud drive</a>
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
                        <h6 class="mail-attachments-heading">2 Attachments</h6>
                        <ul class="mail-attachments">
                            <li>
											<span class="mail-attachments-preview">
												<i class="icon-file-pdf icon-2x"></i>
											</span>

                                <div class="mail-attachments-content">
                                    <span class="text-semibold">new_december_offers.pdf</span>
                                    <ul class="list-inline list-inline-condensed no-margin">
                                        <li class="text-muted">174 KB</li>
                                        <li><a href="#">View</a></li>
                                        <li><a href="#">Remove</a></li>
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
                                        <li><a href="#">View</a></li>
                                        <li><a href="#">Remove</a></li>
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
            height: 1240,
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

