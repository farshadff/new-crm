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
<div class="app-content content">

<h1>Add New Task</h1>
<hr>
<form action="/admin/tasks" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Task Title</label>
        <input type="text" class="form-control" id="taskTitle"  name="title">
    </div>
    <div class="form-group">
        <label for="description">Task Description</label>
        <input type="text" class="form-control" id="taskDescription" name="description">
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
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@include('footer');
