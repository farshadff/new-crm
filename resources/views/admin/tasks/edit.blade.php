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
<div class="app-content content">

<h1 class="text-center">ویراییش وظیفه</h1>
<hr>
<form action="{{url('tasks', [$task->id])}}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">نام وظیفه</label>
        <input type="text" value="{{$task->title}}" class="form-control" id="taskTitle"  name="title" >
    </div>
    <div class="form-group">
        <label for="description">توضیحات</label>
        <input type="text" value="{{$task->description}}" class="form-control" id="taskDescription" name="description" >
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
@include('footer');
