<?php
/**
 * Created by PhpStorm.
 * User: farshad
 * Date: 5/23/2018
 * Time: 12:27 AM
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
                <h5 class="panel-title">ویراییش مخاطبین و مشتریان</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <form action="{{url('/admin/client', [$client->id])}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="title">نام مخاطب</label>
                                <input type="text" value="{{$client->title}}" class="form-control" id="taskTitle"
                                       name="title">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="fax">فکس</label>
                                <input type="text" value="{{$client->fax}}" class="form-control" id="fax"
                                       name="fax">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="description">توضیحات مخاطب</label>
                            <input type="text" value="{{$client->description}}" class="form-control"
                                   id="taskDescription"
                                   name="description">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="adrress1">ادرس اول</label>
                            <input type="text" value="{{$client->adrress1}}" class="form-control" id="adrress1"
                                   name="adrress1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="adrress2">ادرس دوم</label>
                                <input type="text" value="{{$client->adrress2}}" class="form-control" id="adrress2"
                                       name="adrress2">
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="adrress3">ادرس سوم</label>
                                <input type="text" value="{{$client->adrress3}}" class="form-control" id="adrress3"
                                       name="adrress3">
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="adrress4">ادرس چهارم</label>
                                <input type="text" value="{{$client->adrress4}}" class="form-control" id="adrress4"
                                       name="adrress4">
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="adrress5">ادرس پنجم</label>
                                <input type="text" value="{{$client->adrress5}}" class="form-control" id="adrress5"
                                       name="adrress5">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="telephone1">تلفن یکم</label>
                                <input type="text" value="{{$client->telephone1}}" class="form-control" id="telephone1"
                                       name="telephone1">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="telephone2">تلفن دوم</label>
                                <input type="text" value="{{$client->telephone2}}" class="form-control" id="telephone2"
                                       name="telephone2">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="telephone3">تلفن سوم</label>
                                <input type="text" value="{{$client->telephone3}}" class="form-control" id="telephone3"
                                       name="telephone3">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="telephone4">تلفن چهارم</label>
                                <input type="text" value="{{$client->telephone4}}" class="form-control" id="telephone4"
                                       name="telephone4">
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="telephone5">تلفن پنجم</label>
                                <input type="text" value="{{$client->telephone5}}" class="form-control" id="telephone5"
                                       name="telephone5">
                            </div>
                        </div>
                        <div class="col-xs-5">
                            <div class="form-group">
                                <label for="client_type">انتخاب مشتری (اگر گزینه بالقوه انتخاب شود در لیست مخاطبین نمایش داده
                                    میشود)</label>
                                <select class="select-search select2-hidden-accessible border-primary" tabindex="-1"
                                        aria-hidden="true"
                                        name="client_type" id="client_type">
                                    <option value="{{{$client->client_type}}}">{{{$client->client_type}}}</option>
                                    @if($client->client_type === 'بالفعل')
                                        <option value="بالقوه">بالقوه</option>
                                    @else
                                        <option value="بالفعل">بالفعل</option>
                                    @endif
                                </select>

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

