<?php
?>
@include('header');
@include('sidebar');
<!-- Main content -->
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
        <!-- Main charts -->

        <div class="row">
            @if(Auth::user())
                @if (Auth::user()->isAn('admin'))
                    <div class="col-lg-7">
                        <!-- Traffic sources -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">مشخصات سیستم</h6>
                                <div class="heading-elements">
                                    <form class="heading-form" action="#">
                                        <div
                                                class="form-check form-check-right form-check-switchery form-check-switchery-sm">
                                            <label class="form-check-label">
                                                به روز رسانی لحظه ای :
                                                <input type="checkbox" class="form-input-switchery" checked data-fouc>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="list-inline text-center">
                                            <li>
                                                <a href="#"
                                                   class="btn border-teal text-teal btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                            class="icon-plus3"></i></a>
                                            </li>
                                            <li class="text-left">
                                                <div class="text-semibold">بازدید کننده جدید</div>
                                                <div class="text-muted">3 نفر میانگین</div>
                                            </li>
                                        </ul>

                                        <div class="col-lg-10 col-lg-offset-1">
                                            <div class="chart content-group" id="new-visitors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <ul class="list-inline text-center">
                                            <li>
                                                <a href="#"
                                                   class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                            class="icon-watch2"></i></a>
                                            </li>
                                            <li class="text-left">
                                                <div class="text-semibold">زمان استفاده</div>
                                                <div class="text-muted">10 دقیقه میانگین</div>
                                            </li>
                                        </ul>

                                        <div class="col-lg-10 col-lg-offset-1">
                                            <div class="chart content-group" id="new-sessions"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <ul class="list-inline text-center">
                                            <li>
                                                <a href="#"
                                                   class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                            class="icon-people"></i></a>
                                            </li>
                                            <li class="text-left">
                                                <div class="text-semibold">افراد آنلاین</div>
                                                <div class="text-muted"><span
                                                            class="status-mark border-success position-left"></span> 3
                                                    نفر
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="col-lg-10 col-lg-offset-1">
                                            <div class="chart content-group" id="total-online"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chart position-relative" id="traffic-sources"></div>
                        </div>
                        <!-- /traffic sources -->

                    </div>
                    <div class="col-lg-5">

                        <!-- Sales stats -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">آمار مشتریان</h6>
                                <div class="header-elements">
                                    <div class="multiselect-native-select"><select class="form-control" id="select_date"
                                                                                   data-fouc="">
                                            <option value="val1">22 تیر 97</option>
                                            <option value="val2">22 تیر</option>
                                            <option value="val3" selected="">22 تیر</option>
                                            <option value="val4">22 تیر</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div class="row text-center">
                                        <div class="col-md-4">
                                            <div class="content-group">
                                                <h5 class="text-semibold no-margin"><i
                                                            class="icon-calendar5 position-left text-slate"></i> 500
                                                </h5>
                                                <span class="text-muted text-size-small">قرارداد ها در هفته</span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="content-group">
                                                <h5 class="text-semibold no-margin"><i
                                                            class="icon-calendar52 position-left text-slate"></i> 568
                                                </h5>
                                                <span class="text-muted text-size-small">مشتریان در ماه</span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="content-group">
                                                <h5 class="text-semibold no-margin"><i
                                                            class="icon-cash3 position-left text-slate"></i> 2000 تومان
                                                </h5>
                                                <span class="text-muted text-size-small">میانگین فروش</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="chart content-group-sm" id="app_sales"></div>
                                <div class="chart" id="monthly-sales-stats"></div>
                            </div>
                            <!-- /sales stats -->

                        </div>
                    </div>
            @endif
        @else
            @php(
            dd('asd')
            )
        @endif
        <!-- /main charts -->


            <!-- Dashboard content -->
            <div class="row">
                <div class="col-lg-8">

                    <!-- Marketing campaigns -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">ارزش محصولات</h6>
                            <div class="heading-elements">
                                <span class="label bg-success heading-text">28 محصول</span>
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                    class="icon-menu7"></i> <span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                            <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
                                            <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-lg text-nowrap">
                                <tbody>
                                <tr>
                                    <td class="col-md-5">
                                        <div class="media-left">
                                            <div class="chart" id="campaigns-donut"></div>
                                        </div>

                                        <div class="media-left">
                                            <h5 class="text-semibold no-margin">38,289
                                                <small class="text-success text-size-base"><i
                                                            class="icon-arrow-up12"></i> (+16.2%)
                                                </small>
                                            </h5>
                                            <ul class="list-inline list-inline-condensed no-margin">
                                                <li>
                                                    <span class="status-mark border-success"></span>
                                                </li>
                                                <li>
                                                    <span class="text-muted">22 خرداد , 12:22 ب. ظ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>

                                    <td class="col-md-5">
                                        <div class="media-left">
                                            <div class="chart" id="campaign-status-pie"></div>
                                        </div>

                                        <div class="media-left">
                                            <h5 class="text-semibold no-margin">2,458
                                                <small class="text-danger text-size-base"><i
                                                            class="icon-arrow-down12"></i> (- 4.9%)
                                                </small>
                                            </h5>
                                            <ul class="list-inline list-inline-condensed no-margin">
                                                <li>
                                                    <span class="status-mark border-danger"></span>
                                                </li>
                                                <li>
                                                    <span class="text-muted">22 خرداد , 12:22 ب. ظ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>

                                    <td class="text-right col-md-2">
                                        <a href="#" class="btn bg-indigo-300"><i
                                                    class="icon-statistics position-left"></i> مشاهده گزارش</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th>نام محصول</th>
                                    <th class="col-md-2">فعالییت</th>
                                    <th class="col-md-2">تغییرات فروش</th>
                                    <th class="col-md-2">هزینه</th>
                                    <th class="col-md-2">وضعییت</th>
                                    <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="active border-double">
                                    <td colspan="5">امروز</td>
                                    <td class="text-right">
                                        <span class="progress-meter" id="today-progress" data-progress="30"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="{{{url('/')}}}/assets/images/brands/facebook.png"
                                                             class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">تبلیغات در فیس
                                                    بوک</a>
                                            </div>
                                            <div class="text-muted text-size-small">
                                                <span class="status-mark border-blue position-left"></span>
                                                تبلیغاتی
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">تبلیغات مجازی</span></td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.43%</span>
                                    </td>
                                    <td><h6 class="text-semibold"> 5,489ریال</h6></td>
                                    <td><span class="label bg-blue">فعال</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable
                                                            campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="{{{url('/')}}}/assets/images/brands/youtube.png"
                                                             class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">ساخت ویدیو
                                                    تبلیغاتی</a></div>
                                            <div class="text-muted text-size-small">
                                                <span class="status-mark border-danger position-left"></span>
                                                چند رسانه ای
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">تیزر تبلیغاتی</span></td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 3.12%</span>
                                    </td>
                                    <td><h6 class="text-semibold"> 664,489ریال</h6></td>
                                    <td><span class="label bg-danger">بسته شده</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable
                                                            campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="{{{url('/')}}}/assets/images/brands/spotify.png"
                                                             class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">محصول سوم</a>
                                            </div>
                                            <div class="text-muted text-size-small">
                                                <span class="status-mark border-grey-400 position-left"></span>
                                                فیزیکی
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">محصول فیزیکی</span></td>
                                    <td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> - 8.02%</span>
                                    </td>
                                    <td><h6 class="text-semibold"> 88,489ریال</h6></td>
                                    <td><span class="label bg-grey-400">منتظر تمدید</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable
                                                            campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="{{{url('/')}}}/assets/images/brands/twitter.png"
                                                             class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">تبلیغات</a>
                                            </div>
                                            <div class="text-muted text-size-small">
                                                <span class="status-mark border-grey-400 position-left"></span>
                                                04:00 - 05:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Deluxe</span></td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.78%</span>
                                    </td>
                                    <td><h6 class="text-semibold">$7,467</h6></td>
                                    <td><span class="label bg-grey-400">Hold</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable
                                                            campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr class="active border-double">
                                    <td colspan="5">Yesterday</td>
                                    <td class="text-right">
                                        <span class="progress-meter" id="yesterday-progress" data-progress="65"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="{{{url('/')}}}/assets/images/brands/bing.png"
                                                             class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">Bing
                                                    campaign</a></div>
                                            <div class="text-muted text-size-small">
                                                <span class="status-mark border-success position-left"></span>
                                                15:00 - 16:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Metrics</span></td>
                                    <td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> - 5.78%</span>
                                    </td>
                                    <td><h6 class="text-semibold">$970</h6></td>
                                    <td><span class="label bg-success-400">Pending</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable
                                                            campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="{{{url('/')}}}/assets/images/brands/amazon.png"
                                                             class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">Amazon ads</a>
                                            </div>
                                            <div class="text-muted text-size-small">
                                                <span class="status-mark border-danger position-left"></span>
                                                18:00 - 19:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Blueish</span></td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 6.79%</span>
                                    </td>
                                    <td><h6 class="text-semibold">$1,540</h6></td>
                                    <td><span class="label bg-blue">Active</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable
                                                            campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="{{{url('/')}}}/assets/images/brands/dribbble.png"
                                                             class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">Dribbble
                                                    ads</a></div>
                                            <div class="text-muted text-size-small">
                                                <span class="status-mark border-blue position-left"></span>
                                                20:00 - 21:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Teamable</span></td>
                                    <td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> 9.83%</span>
                                    </td>
                                    <td><h6 class="text-semibold">$8,350</h6></td>
                                    <td><span class="label bg-danger">Closed</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable
                                                            campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /marketing campaigns -->


                    <!-- Quick stats boxes -->
                    <div class="row">
                        <div class="col-lg-4">

                            <!-- Members online -->
                            <div class="panel bg-teal-400">
                                <div class="panel-body">
                                    <div class="heading-elements">
                                        <span class="heading-text badge bg-teal-800">+53,6%</span>
                                    </div>

                                    <h3 class="no-margin">3,450</h3>
                                    Members online
                                    <div class="text-muted text-size-small">489 avg</div>
                                </div>

                                <div class="container-fluid">
                                    <div class="chart" id="members-online"></div>
                                </div>
                            </div>
                            <!-- /members online -->

                        </div>

                        <div class="col-lg-4">

                            <!-- Current server load -->
                            <div class="panel bg-pink-400">
                                <div class="panel-body">
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-cog3"></i> <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                                    <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
                                                    <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3 class="no-margin">49.4%</h3>
                                    Current server load
                                    <div class="text-muted text-size-small">34.6% avg</div>
                                </div>

                                <div class="chart" id="server-load"></div>
                            </div>
                            <!-- /current server load -->

                        </div>

                        <div class="col-lg-4">

                            <!-- Today's revenue -->
                            <div class="panel bg-blue-400">
                                <div class="panel-body">
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="reload"></a></li>
                                        </ul>
                                    </div>

                                    <h3 class="no-margin">$18,390</h3>
                                    Today's revenue
                                    <div class="text-muted text-size-small">$37,578 avg</div>
                                </div>

                                <div class="chart" id="today-revenue"></div>
                            </div>
                            <!-- /today's revenue -->

                        </div>
                    </div>
                    <!-- /quick stats boxes -->


                    <!-- Support tickets -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">Support tickets</h6>
                            <div class="heading-elements">
                                <button type="button" class="btn btn-link daterange-ranges heading-btn text-semibold">
                                    <i class="icon-calendar3 position-left"></i> <span></span> <b class="caret"></b>
                                </button>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-xlg text-nowrap">
                                <tbody>
                                <tr>
                                    <td class="col-md-4">
                                        <div class="media-left media-middle">
                                            <div class="chart" id="tickets-status"></div>
                                        </div>

                                        <div class="media-left">
                                            <h5 class="text-semibold no-margin">14,327
                                                <small class="text-success text-size-base"><i
                                                            class="icon-arrow-up12"></i> (+2.9%)
                                                </small>
                                            </h5>
                                            <span class="text-muted"><span
                                                        class="status-mark border-success position-left"></span> Jun 16, 10:00 am</span>
                                        </div>
                                    </td>

                                    <td class="col-md-3">
                                        <div class="media-left media-middle">
                                            <a href="#"
                                               class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon"><i
                                                        class="icon-alarm-add"></i></a>
                                        </div>

                                        <div class="media-left">
                                            <h5 class="text-semibold no-margin">
                                                1,132
                                                <small class="display-block no-margin">total tickets</small>
                                            </h5>
                                        </div>
                                    </td>

                                    <td class="col-md-3">
                                        <div class="media-left media-middle">
                                            <a href="#"
                                               class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon"><i
                                                        class="icon-spinner11"></i></a>
                                        </div>

                                        <div class="media-left">
                                            <h5 class="text-semibold no-margin">
                                                06:25:00
                                                <small class="display-block no-margin">response time</small>
                                            </h5>
                                        </div>
                                    </td>

                                    <td class="text-right col-md-2">
                                        <a href="#" class="btn bg-teal-400"><i
                                                    class="icon-statistics position-left"></i> Report</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th style="width: 50px">Due</th>
                                    <th style="width: 300px;">User</th>
                                    <th>Description</th>
                                    <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="active border-double">
                                    <td colspan="3">Active tickets</td>
                                    <td class="text-right">
                                        <span class="badge bg-blue">24</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <h6 class="no-margin">12
                                            <small class="display-block text-size-small no-margin">hours</small>
                                        </h6>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-teal-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#"
                                               class="display-inline-block text-default text-semibold letter-icon-title">Annabelle
                                                Doney</a>
                                            <div class="text-muted text-size-small"><span
                                                        class="status-mark border-blue position-left"></span> Active
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            <span
                                                    class="text-semibold">[#1183] Workaround for OS X selects printing bug</span>
                                            <span class="display-block text-muted">Chrome fixed the bug several versions ago, thus rendering this...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-checkmark3 text-success"></i> Resolve
                                                            issue</a></li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <h6 class="no-margin">16
                                            <small class="display-block text-size-small no-margin">hours</small>
                                        </h6>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="assets/images/placeholder.jpg"
                                                             class="img-circle img-xs" alt=""></a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#"
                                               class="display-inline-block text-default text-semibold letter-icon-title">Chris
                                                Macintyre</a>
                                            <div class="text-muted text-size-small"><span
                                                        class="status-mark border-blue position-left"></span> Active
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            <span
                                                    class="text-semibold">[#1249] Vertically center carousel controls</span>
                                            <span class="display-block text-muted">Try any carousel control and reduce the screen width below...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-checkmark3 text-success"></i> Resolve
                                                            issue</a></li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <h6 class="no-margin">20
                                            <small class="display-block text-size-small no-margin">hours</small>
                                        </h6>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-blue btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#"
                                               class="display-inline-block text-default text-semibold letter-icon-title">Robert
                                                Hauber</a>
                                            <div class="text-muted text-size-small"><span
                                                        class="status-mark border-blue position-left"></span> Active
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            <span
                                                    class="text-semibold">[#1254] Inaccurate small pagination height</span>
                                            <span class="display-block text-muted">The height of pagination elements is not consistent with...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-checkmark3 text-success"></i> Resolve
                                                            issue</a></li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <h6 class="no-margin">40
                                            <small class="display-block text-size-small no-margin">hours</small>
                                        </h6>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-warning-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#"
                                               class="display-inline-block text-default text-semibold letter-icon-title">Dex
                                                Sponheim</a>
                                            <div class="text-muted text-size-small"><span
                                                        class="status-mark border-blue position-left"></span> Active
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            <span
                                                    class="text-semibold">[#1184] Round grid column gutter operations</span>
                                            <span class="display-block text-muted">Left rounds up, right rounds down. should keep everything...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-checkmark3 text-success"></i> Resolve
                                                            issue</a></li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr class="active border-double">
                                    <td colspan="3">Resolved tickets</td>
                                    <td class="text-right">
                                        <span class="badge bg-success">42</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <i class="icon-checkmark3 text-success"></i>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" class="display-inline-block text-default letter-icon-title">Alan
                                                Macedo</a>
                                            <div class="text-muted text-size-small"><span
                                                        class="status-mark border-success position-left"></span>
                                                Resolved
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            [#1046] Avoid some unnecessary HTML string
                                            <span class="display-block text-muted">Rather than building a string of HTML and then parsing it...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <i class="icon-checkmark3 text-success"></i>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-pink-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" class="display-inline-block text-default letter-icon-title">Brett
                                                Castellano</a>
                                            <div class="text-muted text-size-small"><span
                                                        class="status-mark border-success position-left"></span>
                                                Resolved
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            [#1038] Update json configuration
                                            <span class="display-block text-muted">The <code>files</code> property is necessary to override the files property...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <i class="icon-checkmark3 text-success"></i>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="assets/images/placeholder.jpg"
                                                             class="img-circle img-xs" alt=""></a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" class="display-inline-block text-default">Roxanne Forbes</a>
                                            <div class="text-muted text-size-small"><span
                                                        class="status-mark border-success position-left"></span>
                                                Resolved
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            [#1034] Tooltip multiple event
                                            <span class="display-block text-muted">Fix behavior when using tooltips and popovers that are...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr class="active border-double">
                                    <td colspan="3">Closed tickets</td>
                                    <td class="text-right">
                                        <span class="badge bg-danger">37</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <i class="icon-cross2 text-danger-400"></i>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="assets/images/placeholder.jpg"
                                                             class="img-circle img-xs" alt=""></a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" class="display-inline-block text-default">Mitchell Sitkin</a>
                                            <div class="text-muted text-size-small"><span
                                                        class="status-mark border-danger position-left"></span> Closed
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            [#1040] Account for static form controls in form group
                                            <span class="display-block text-muted">Resizes control label's font-size and account for the standard...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-reload-alt text-blue"></i> Reopen
                                                            issue</a></li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <i class="icon-cross2 text-danger"></i>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-brown-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" class="display-inline-block text-default letter-icon-title">Katleen
                                                Jensen</a>
                                            <div class="text-muted text-size-small"><span
                                                        class="status-mark border-danger position-left"></span> Closed
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            [#1038] Proper sizing of form control feedback
                                            <span class="display-block text-muted">Feedback icon sizing inside a larger/smaller form-group...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /support tickets -->


                    <!-- Latest posts -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">Latest posts</h6>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="media-list content-group">
                                        <li class="media stack-media-on-mobile">
                                            <div class="media-left">
                                                <div class="thumb">
                                                    <a href="#">
                                                        <img src="assets/images/placeholder.jpg"
                                                             class="img-responsive img-rounded media-preview" alt="">
                                                        <span class="zoom-image"><i class="icon-play3"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-heading"><a href="#">Up unpacked friendly</a></h6>
                                                <ul class="list-inline list-inline-separate text-muted mb-5">
                                                    <li><i class="icon-book-play position-left"></i> Video tutorials
                                                    </li>
                                                    <li>14 minutes ago</li>
                                                </ul>
                                                The him father parish looked has sooner. Attachment frequently gay
                                                terminated son...
                                            </div>
                                        </li>

                                        <li class="media stack-media-on-mobile">
                                            <div class="media-left">
                                                <div class="thumb">
                                                    <a href="#">
                                                        <img src="assets/images/placeholder.jpg"
                                                             class="img-responsive img-rounded media-preview" alt="">
                                                        <span class="zoom-image"><i class="icon-play3"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-heading"><a href="#">It allowance prevailed</a></h6>
                                                <ul class="list-inline list-inline-separate text-muted mb-5">
                                                    <li><i class="icon-book-play position-left"></i> Video tutorials
                                                    </li>
                                                    <li>12 days ago</li>
                                                </ul>
                                                Alteration literature to or an sympathize mr imprudence. Of is ferrars
                                                subject as enjoyed...
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-6">
                                    <ul class="media-list content-group">
                                        <li class="media stack-media-on-mobile">
                                            <div class="media-left">
                                                <div class="thumb">
                                                    <a href="#">
                                                        <img src="assets/images/placeholder.jpg"
                                                             class="img-responsive img-rounded media-preview" alt="">
                                                        <span class="zoom-image"><i class="icon-play3"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-heading"><a href="#">Case read they must</a></h6>
                                                <ul class="list-inline list-inline-separate text-muted mb-5">
                                                    <li><i class="icon-book-play position-left"></i> Video tutorials
                                                    </li>
                                                    <li>20 hours ago</li>
                                                </ul>
                                                On it differed repeated wandered required in. Then girl neat why yet
                                                knew rose spot...
                                            </div>
                                        </li>

                                        <li class="media stack-media-on-mobile">
                                            <div class="media-left">
                                                <div class="thumb">
                                                    <a href="#">
                                                        <img src="assets/images/placeholder.jpg"
                                                             class="img-responsive img-rounded media-preview" alt="">
                                                        <span class="zoom-image"><i class="icon-play3"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-heading"><a href="#">Too carriage attended</a></h6>
                                                <ul class="list-inline list-inline-separate text-muted mb-5">
                                                    <li><i class="icon-book-play position-left"></i> FAQ section</li>
                                                    <li>2 days ago</li>
                                                </ul>
                                                Marianne or husbands if at stronger ye. Considered is as middletons
                                                uncommonly...
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /latest posts -->

                </div>

                <div class="col-lg-4">

                    <!-- Progress counters -->
                    <div class="row">
                        <div class="col-md-6">

                            <!-- Available hours -->
                            <div class="panel text-center">
                                <div class="panel-body">
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li class="dropdown text-muted">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-cog3"></i> <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                                    <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
                                                    <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Progress counter -->
                                    <div class="chart content-group-sm svg-center position-relative"
                                         id="hours-available-progress"></div>
                                    <!-- /progress counter -->


                                    <!-- Bars -->
                                    <div class="chart" id="hours-available-bars"></div>
                                    <!-- /bars -->

                                </div>
                            </div>
                            <!-- /available hours -->

                        </div>

                        <div class="col-md-6">

                            <!-- Productivity goal -->
                            <div class="panel text-center">
                                <div class="panel-body">
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li class="dropdown text-muted">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="icon-cog3"></i> <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                                    <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
                                                    <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Progress counter -->
                                    <div class="chart content-group-sm svg-center position-relative"
                                         id="goal-progress"></div>
                                    <!-- /progress counter -->

                                    <!-- Bars -->
                                    <div class="chart" id="goal-bars"></div>
                                    <!-- /bars -->

                                </div>
                            </div>
                            <!-- /productivity goal -->

                        </div>
                    </div>
                    <!-- /progress counters -->


                    <!-- My messages -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">پیام های من</h6>
                            <div class="heading-elements">
                                <span class="heading-text"><i class="icon-history text-warning position-left"></i> 21 مرداد 12:45 ب ظ </span>
                                <span class="label bg-success heading-text">آنلاین</span>
                            </div>
                        </div>

                        <!-- Numbers -->
                        <div class="container-fluid">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="content-group">
                                        <h6 class="text-semibold no-margin"><i
                                                    class="icon-clipboard3 position-left text-slate"></i> 246</h6>
                                        <span class="text-muted text-size-small">این هفته</span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="content-group">
                                        <h6 class="text-semibold no-margin"><i
                                                    class="icon-calendar3 position-left text-slate"></i> 600</h6>
                                        <span class="text-muted text-size-small">در ماه</span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="content-group">
                                        <h6 class="text-semibold no-margin"><i
                                                    class="icon-comments position-left text-slate"></i> 32,693</h6>
                                        <span class="text-muted text-size-small">تمامی پیام ها</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /numbers -->


                        <!-- Area chart -->
                        <div class="chart" id="messages-stats"></div>
                        <!-- /area chart -->


                        <!-- Tabs -->
                        <ul class="nav nav-lg nav-tabs nav-justified no-margin no-border-radius bg-indigo-400 border-top border-top-indigo-300">
                            <li class="active">
                                <a href="#messages-tue" class="text-size-small text-uppercase" data-toggle="tab">
                                    Tuesday
                                </a>
                            </li>

                            <li>
                                <a href="#messages-mon" class="text-size-small text-uppercase" data-toggle="tab">
                                    Monday
                                </a>
                            </li>

                            <li>
                                <a href="#messages-fri" class="text-size-small text-uppercase" data-toggle="tab">
                                    Friday
                                </a>
                            </li>
                        </ul>
                        <!-- /tabs -->


                        <!-- Tabs content -->
                        <div class="tab-content">
                            <div class="tab-pane active fade in has-padding" id="messages-tue">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
                                            <span class="badge bg-danger-400 media-badge">8</span>
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                James Alexander
                                                <span class="media-annotation pull-right">14:58</span>
                                            </a>

                                            <span class="display-block text-muted">The constitutionally inventoried precariously...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
                                            <span class="badge bg-danger-400 media-badge">6</span>
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Margo Baker
                                                <span class="media-annotation pull-right">12:16</span>
                                            </a>

                                            <span class="display-block text-muted">Pinched a well more moral chose goodness...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Jeremy Victorino
                                                <span class="media-annotation pull-right">09:48</span>
                                            </a>

                                            <span class="display-block text-muted">Pert thickly mischievous clung frowned well...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Beatrix Diaz
                                                <span class="media-annotation pull-right">05:54</span>
                                            </a>

                                            <span class="display-block text-muted">Nightingale taped hello bucolic fussily cardinal...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Richard Vango
                                                <span class="media-annotation pull-right">01:43</span>
                                            </a>

                                            <span class="display-block text-muted">Amidst roadrunner distantly pompously where...</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-pane fade has-padding" id="messages-mon">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Isak Temes
                                                <span class="media-annotation pull-right">Tue, 19:58</span>
                                            </a>

                                            <span class="display-block text-muted">Reasonable palpably rankly expressly grimy...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Vittorio Cosgrove
                                                <span class="media-annotation pull-right">Tue, 16:35</span>
                                            </a>

                                            <span class="display-block text-muted">Arguably therefore more unexplainable fumed...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Hilary Talaugon
                                                <span class="media-annotation pull-right">Tue, 12:16</span>
                                            </a>

                                            <span class="display-block text-muted">Nicely unlike porpoise a kookaburra past more...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Bobbie Seber
                                                <span class="media-annotation pull-right">Tue, 09:20</span>
                                            </a>

                                            <span class="display-block text-muted">Before visual vigilantly fortuitous tortoise...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Walther Laws
                                                <span class="media-annotation pull-right">Tue, 03:29</span>
                                            </a>

                                            <span class="display-block text-muted">Far affecting more leered unerringly dishonest...</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-pane fade has-padding" id="messages-fri">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Owen Stretch
                                                <span class="media-annotation pull-right">Mon, 18:12</span>
                                            </a>

                                            <span class="display-block text-muted">Tardy rattlesnake seal raptly earthworm...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Jenilee Mcnair
                                                <span class="media-annotation pull-right">Mon, 14:03</span>
                                            </a>

                                            <span class="display-block text-muted">Since hello dear pushed amid darn trite...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Alaster Jain
                                                <span class="media-annotation pull-right">Mon, 13:59</span>
                                            </a>

                                            <span class="display-block text-muted">Dachshund cardinal dear next jeepers well...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Sigfrid Thisted
                                                <span class="media-annotation pull-right">Mon, 09:26</span>
                                            </a>

                                            <span class="display-block text-muted">Lighted wolf yikes less lemur crud grunted...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Sherilyn Mckee
                                                <span class="media-annotation pull-right">Mon, 06:38</span>
                                            </a>

                                            <span class="display-block text-muted">Less unicorn a however careless husky...</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /tabs content -->

                    </div>
                    <!-- /my messages -->


                    <!-- Daily financials -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">Daily financials</h6>
                            <div class="heading-elements">
                                <form class="heading-form" action="#">
                                    <div class="form-group">
                                        <label
                                                class="checkbox checkbox-inline checkbox-switchery checkbox-right switchery-xs">
                                            <input type="checkbox" class="switcher" id="realtime" checked="checked">
                                            Realtime
                                        </label>
                                    </div>
                                </form>
                                <span class="badge bg-danger-400 heading-text">+86</span>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="chart content-group-xs" id="bullets"></div>

                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-left">
                                        <a href="#"
                                           class="btn border-pink text-pink btn-flat btn-rounded btn-icon btn-xs"><i
                                                    class="icon-statistics"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Stats for July, 6: 1938 orders, $4220 revenue
                                        <div class="media-annotation">2 hours ago</div>
                                    </div>

                                    <div class="media-right media-middle">
                                        <ul class="icons-list">
                                            <li>
                                                <a href="#"><i class="icon-arrow-right13"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#"
                                           class="btn border-success text-success btn-flat btn-rounded btn-icon btn-xs"><i
                                                    class="icon-checkmark3"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Invoices <a href="#">#4732</a> and <a href="#">#4734</a> have been paid
                                        <div class="media-annotation">Dec 18, 18:36</div>
                                    </div>

                                    <div class="media-right media-middle">
                                        <ul class="icons-list">
                                            <li>
                                                <a href="#"><i class="icon-arrow-right13"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#"
                                           class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-xs"><i
                                                    class="icon-alignment-unalign"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Affiliate commission for June has been paid
                                        <div class="media-annotation">36 minutes ago</div>
                                    </div>

                                    <div class="media-right media-middle">
                                        <ul class="icons-list">
                                            <li>
                                                <a href="#"><i class="icon-arrow-right13"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#"
                                           class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs"><i
                                                    class="icon-spinner11"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Order <a href="#">#37745</a> from July, 1st has been refunded
                                        <div class="media-annotation">4 minutes ago</div>
                                    </div>

                                    <div class="media-right media-middle">
                                        <ul class="icons-list">
                                            <li>
                                                <a href="#"><i class="icon-arrow-right13"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#"
                                           class="btn border-teal-400 text-teal btn-flat btn-rounded btn-icon btn-xs"><i
                                                    class="icon-redo2"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Invoice <a href="#">#4769</a> has been sent to <a href="#">Robert Smith</a>
                                        <div class="media-annotation">Dec 12, 05:46</div>
                                    </div>

                                    <div class="media-right media-middle">
                                        <ul class="icons-list">
                                            <li>
                                                <a href="#"><i class="icon-arrow-right13"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /daily financials -->

                </div>
            </div>
            <!-- /dashboard content -->


            <!-- Footer -->
            <div class="footer text-muted">
                &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov"
                                                                         target="_blank">Eugene Kopyov</a>
            </div>
            <!-- /footer -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

    @include('footer');