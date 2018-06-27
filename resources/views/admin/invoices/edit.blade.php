<?php
/**
 * Created by PhpStorm.
 * User: farshad
 * Date: 5/23/2018
 * Time: 12:27 AM
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
                <h5 class="panel-title">ویراییش فرصت</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <form action="{{url('/admin/invoices', [$invoices->id])}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">نام وظیفه</label>
                        <input type="text" value="{{$invoices->title}}" class="form-control" id="taskTitle"  name="title" >
                    </div>
                    <div class="form-group">
                        <label for="description">توضیحات</label>
                        <input type="text" value="{{$invoices->description}}" class="form-control" id="taskDescription" name="description" >
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


@include('footer');

