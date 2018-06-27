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

    <h1 class="text-center">نمایش وظیفه {{ $task->title }}</h1>

    <div class=" text-center">
        <p>
            <strong>نام وظیفه</strong> {{ $task->title }}<br>
            <strong>توضیحات</strong> {{ $task->description }}
        </p>
    </div>
</div>
@include('footer');

