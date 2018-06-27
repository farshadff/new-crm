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
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ردیف</th>
        <th scope="col">نام وظیفه</th>
        <th scope="col">توضیحات وظیفه</th>
        <th scope="col">ساخته شده در</th>
        <th scope="col">عملیات ها</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
        <tr>
            <th scope="row">{{$task->id}}</th>
            <td><a href="/admin/tasks/{{$task->id}}">{{$task->title}}</a></td>
            <td>{{$task->description}}</td>
            <td>{{$task->created_at->toFormattedDateString()}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ URL::to('admin/tasks/' . $task->id . '/edit') }}">
                        <button type="button" class="btn btn-warning">ویراییش</button>
                    </a>&nbsp;
                    <form action="{{url('admin/tasks', [$task->id])}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger" value="حذف"/>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@include('footer');
