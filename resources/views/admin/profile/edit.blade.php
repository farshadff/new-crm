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



                    <form method="post" action="{{route('users.update', $user)}}">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="name">نام</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                            </div>
                        </div>
<div class="col-xs-6">
    <div class="form-group">
        <label for="email">ایمیل</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
    </div>
</div>

                      <div class="col-xs-6">
                          <div class="form-group">
                              <label for="password">رمز عبور</label>
                              <input type="password" class="form-control" id="password" name="password">
                          </div>
                      </div>
                       <div class="col-xs-6">
                           <div class="form-group">
                               <label for="password_confirmation">رمز عبور</label>
                               <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                           </div>
                       </div>
                    </div>
                        <button class="btn btn-success" type="submit">ثبت</button>
                        <a href="/admin/profile" class="btn btn-danger">لغو</a>
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">شماه همراه</h5>

                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <i class="icon-home4"></i>
                        <h4 class="text-center">{{{ Auth::user()->mobile }}}</h4>

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
</div>
@include('footer')

