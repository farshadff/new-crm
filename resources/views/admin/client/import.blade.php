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
                <h5 class="panel-title">درون ریزی مشتریان</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                @if($message = Session::get('success'))
                    <div class="alert alert-info alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong>Success!</strong> {{ $message }}
                    </div>
                @endif
                {!! Session::forget('success') !!}
                <br/>
                {{--<a href="{{ URL::to('downloadExcel/xls') }}">--}}
                    {{--<button class="btn btn-success">Download Excel xls</button>--}}
                {{--</a>--}}
                {{--<a href="{{ URL::to('downloadExcel/xlsx') }}">--}}
                    {{--<button class="btn btn-success">Download Excel xlsx</button>--}}
                {{--</a>--}}
                {{--<a href="{{ URL::to('downloadExcel/csv') }}">--}}
                    {{--<button class="btn btn-success">Download CSV</button>--}}
                {{--</a>--}}
                <form
                      action="{{ URL::to('admin/client/importExcel') }}" class="form-horizontal" method="post"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-lg-2">ورود مشتریان از اکسل</label>
                        <div class="col-lg-10">
                            <div class="uploader"><input type="file"  name="import_file" class="file-styled"><span class="action btn btn-default legitRipple" style="user-select: none;">انتخاب فایل</span></div>
                        </div>
                    </div>
                    <button class="btn btn-primary">تایید</button>

                </form>

            </div>
        </div>
    </div>
    @include('footer');
</div>
@include('footer');
