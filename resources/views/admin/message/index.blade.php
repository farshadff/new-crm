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
                            <li class="active"><a href="#"><i class="icon-drawer-in"></i> Inbox <span class="badge badge-success">32</span></a></li>
                            <li><a href="#"><i class="icon-drawer3"></i> Drafts</a></li>
                            <li><a href="#"><i class="icon-drawer-out"></i> Sent mail</a></li>
                            <li><a href="#"><i class="icon-stars"></i> Starred</a></li>
                            <li class="navigation-divider"></li>
                            <li><a href="#"><i class="icon-spam"></i> Spam <span class="badge badge-danger">99+</span></a></li>
                            <li><a href="#"><i class="icon-bin"></i> Trash</a></li>
                            <li class="navigation-header">Labels</li>
                            <li><a href="#"><span class="status-mark border-primary position-left"></span> Facebook</a></li>
                            <li><a href="#"><span class="status-mark border-success position-left"></span> Spotify</a></li>
                            <li><a href="#"><span class="status-mark border-indigo position-left"></span> Twitter</a></li>
                            <li><a href="#"><span class="status-mark border-danger position-left"></span> Dribbble</a></li>
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
                                    <div class="media-left"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-md" alt=""></div>
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
                                    <div class="media-left"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-md" alt=""></div>
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
                                    <div class="media-left"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-heading"><span class="text-semibold">Jordana Mills</span></div>
                                        <span class="text-muted">Sales consultant</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark bg-grey-300"></span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-heading"><span class="text-semibold">William Miles</span></div>
                                        <span class="text-muted">SEO expert</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark bg-success"></span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-md" alt=""></div>
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
                                    <div class="media-left"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-md" alt=""></div>
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
                                    <div class="media-left"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-md" alt=""></div>
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
                                    <div class="media-left"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Will Samuel</span>
                                        <span class="text-muted">And he looked over at the alarm clock, ticking..</span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Margo Baker</span>
                                        <span class="text-muted">However hard he threw himself onto..</span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Monica Smith</span>
                                        <span class="text-muted">Yes, but was it spanossible to quietly sleep through..</span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Jordana Mills</span>
                                        <span class="text-muted">What should he do now? The next train went at..</span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-md" alt=""></div>
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
                                    <button type="button" class="btn btn-default"><i class="icon-pencil7"></i> <span class="hidden-xs position-right">ارسال</span></button>
                                    <button type="button" class="btn btn-default"><i class="icon-bin"></i> <span class="hidden-xs position-right">حذف</span></button>
                                    <button type="button" class="btn btn-default"><i class="icon-spam"></i> <span class="hidden-xs position-right">اسپم</span></button>
                                </div>

                                <div class="navbar-right">
                                    <p class="navbar-text"><span class="text-semibold">1-50</span> of <span class="text-semibold">528</span></p>

                                    <div class="btn-group navbar-left navbar-btn">
                                        <button type="button" class="btn btn-default btn-icon disabled"><i class="icon-arrow-right13"></i></button>
                                        <button type="button" class="btn btn-default btn-icon"><i class="icon-arrow-left12"></i></button>
                                    </div>

                                    <div class="btn-group navbar-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-cog3"></i>
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

