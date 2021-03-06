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
<div class="content-wrapper">

    <!-- Content area -->
    <div class="content">
        <!-- Horizontal borders -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">مخاطبین</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <form action="/admin/client/agreement" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="client">مشتری</label>
                                <select class="select-search select2-hidden-accessible" tabindex="-1" aria-hidden="true"
                                        name="clientid">
                                    @foreach($client as $clients)
                                        <option value="{{$clients->id}}">{{$clients->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-4 text-center">
                            <i class="icon-thumbs-up3 mr-3 icon-3x" style="font-size: 130px"></i>
                            <h4>افزودن تصویر قرار داد</h4>
                        </div>
                        <div class="col-xs-4">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-12">تصویر قرار داد</label>
                                        <div class="col-lg-12" style="margin-top: 20px;">
                                            <input type="file" name="agreementedit" id="agreementedit" >
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
</div>
@include('footer')
