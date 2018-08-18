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
                <h5 class="panel-title">ساخت فرصت</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <form action="/admin/phonebook" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">نام</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="title">توضیحات</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="description">تاریخ یادآوری</label>
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" autocomplete="off" name="rememberdate" id="rememberdate">
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="description">زمان تماس</label>
                                <input type="text" class="form-control" autocomplete="off" name="calldate" id="finish_time">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>انتخاب مشتری</label>
                                <select class="select-search select2-hidden-accessible" tabindex="-1" aria-hidden="true"
                                        name="client_id">
                                    @foreach($clients as $client)
                                        <option value="{{{$client->id}}}">{{{$client->title}}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="col-sm-12">

                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary btn-raised legitRipple">ارسال</button>
                    <button type="submit" class="btn btn-danger btn-raised legitRipple">انصراف</button>
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
<script type="text/javascript">
    $(function () {
        $("#finish_time").persianDatepicker({
            cellWidth: 48,
            cellHeight: 30,
            fontSize: 13,
        });
    });
    $(function () {
        $("#rememberdate").persianDatepicker({
            cellWidth: 48,
            cellHeight: 30,
            fontSize: 13,
        });
    });
</script>

@include('footer')
