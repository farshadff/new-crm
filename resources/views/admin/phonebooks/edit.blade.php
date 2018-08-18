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
                <form action="{{url('/admin/phonebooks', [$phonebook->id])}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">نام وظیفه</label>
                        <input type="text" value="{{$phonebook->title}}" class="form-control" id="taskTitle"  name="title" >
                    </div>
                    <div class="form-group">
                        <label for="description">توضیحات</label>
                        <input type="text" value="{{$phonebook->description}}" class="form-control" id="taskDescription" name="description" >
                    </div>
                    <div class="form-group">
                        <label for="client_id">توضیحات</label>
                        <input type="text" value="{{$phonebook->client_id}}" class="form-control" id="client_id" name="client_id" >
                    </div>
                    <div class="form-group">
                        <label for="description">زمان تماس</label>
                        <fieldset class="form-group">
                            <input type="datetime-local" class="form-control" name="calldate" id="calldate" value="{{$phonebook->calldate}}">
                        </fieldset>
                    </div>
                    <div class="form-group">
                        <label for="description">زمان یادآوری</label>
                        <fieldset class="form-group">
                            <input type="datetime-local" class="form-control" name="rememberdate" id="rememberdate" value="{{$phonebook->rememberdate}}">
                        </fieldset>
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

