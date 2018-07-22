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
<div class="content-wrapper">

    <!-- Content area -->
    <div class="content">
        <!-- Horizontal borders -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">ارجاع نقش</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <form action="/admin/assignrole" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="client">کاربر</label>
                                <select class="select-search select2-hidden-accessible" tabindex="-1" aria-hidden="true"
                                        name="user">
                                    @foreach($user_list as $user_lists)
                                        <option value="{{$user_lists->id}}">{{$user_lists->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-4 text-center">
                            <i class="icon-user-tie mr-3 icon-3x" style="font-size: 130px"></i>
                            <h4>دادن نقش</h4>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">


                                <div class="form-group">
                                    <label for="sellman">نقش</label>
                                    <select class="select-search select2-hidden-accessible" tabindex="-1"
                                            aria-hidden="true" name="role">
                                        @foreach($roles as $roless)
                                            <option value="{{$roless->id}}">{{$roless->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>

                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">تایید</button>
                </form>

            </div>

        </div>
    </div>
    @include('footer');
</div>
@include('footer');
