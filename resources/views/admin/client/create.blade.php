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
                <h5 class="panel-title">ساخت دفتر تلفن</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <form action="/admin/client" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">نام</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">توضیحات</label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="fax">فکس</label>
                                <input type="text" class="form-control" id="fax" name="fax">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>انتخاب مشتری  (اگر گزینه بالقوه انتخاب شود در لیست مخاطبین نمایش داده میشود)</label>
                                <select class="select-search select2-hidden-accessible" tabindex="-1" aria-hidden="true"
                                        name="client_type">
                                    <option value="بالفعل">بالفعل</option>
                                    <option value="بالقوه">بالقوه</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 has-success">
                            <div class="form-group">
                                <label class="control-label" for="adrress1">آدرس اول</label>
                                <input type="text" class="form-control" id="adrress1" name="adrress1">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="adrress2">آدرس دوم</label>
                                <input type="text" class="form-control" id="adrress2" name="adrress2">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="adrress3">آدرس سوم</label>
                                <input type="text" class="form-control" id="adrress3" name="adrress3">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="adrress4">آدرس چهارم</label>
                                <input type="text" class="form-control" id="adrress4" name="adrress4">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="adrress5">آدرس پنجم</label>
                                <input type="text" class="form-control" id="adrress5" name="adrress5">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group has-success">
                                <label class="control-label" for="telephone1">تلفن اول</label>
                                <input type="text" class="form-control" id="telephone1" name="telephone1">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="telephone2">تلفن دوم</label>
                                <input type="text" class="form-control" id="telephone2" name="telephone2">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="telephone3">تلفن سوم</label>
                                <input type="text" class="form-control" id="telephone3" name="telephone3">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="telephone4">تلفن چهارم</label>
                                <input type="text" class="form-control" id="telephone4" name="telephone4">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="telephone5">تلفن پنجم</label>
                                <input type="text" class="form-control" id="telephone5" name="telephone5">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-raised legitRipple">ارسال</button>
                    <button type="clear" class="btn btn-danger btn-raised legitRipple">انصراف</button>
                </form>
            </div>
            @if ($errors->any())
                <div class="panel panel-flat bg-warning">
                    <div class="panel-heading">
                        <h5 class="panel-title">لطفا خطاهای زیر را بررسی کنید</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">

                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>
@include('footer');
