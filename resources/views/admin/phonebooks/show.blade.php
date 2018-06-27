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
        <div class="panel panel-flat border-left-info">
            <div class="panel-heading">
                <h5 class="panel-title">فرصت ها</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table ">
                        <thead >
                        <tr class="border-double">
                            <th>ردیف</th>
                            <th>نام مخاطب</th>
                            <th>توضیحات</th>
                            <th>تاریخ تماس</th>
                            <th>تاریخ یاد آوری پیگیری</th>

                            <th>نام مشتری</th>
                            <th>نوع مشتری</th>
                            <th >عملیات ها</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <th scope="row">{{$phonebook->id}}</th>
                            <th scope="row">{{$phonebook->title}}</th>
                            <td><a href="/admin/phonebooks/{{$phonebook->id}}">{{$phonebook->description}}</a></td>
                            <td>{{new Verta($phonebook->calldate)}}</td>
                            <td>{{new Verta($phonebook->remember_date)}}</td>

                            <td>{{ $phonebook->client->first()->title }}</td>
                            <td>{{ $phonebook->client->first()->client_type }}</td>
                            <td>
                                <div class="btn-group inline-display" role="group" aria-label="Basic example">
                                    <a href="{{ URL::to('admin/phonebooks/' . $phonebook->id . '/edit') }}">
                                        <button type="button" class="btn btn-success legitRipple">ویراییش</button>
                                    </a>&nbsp;
                                    <form class="inline-display"  action="{{url('admin/phonebooks', [$phonebook->id])}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-success legitRipple" value="حذف"/>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
        <div class="panel panel-info panel-bordered">
            <div class="panel-heading">
                <h6 class="panel-title">قرار داد های قبلی این مشتری(کار نمیکند)<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table ">
                        <thead >
                        <tr class="border-double">
                            <th>ردیف</th>
                            <th>نام مخاطب</th>
                            <th>توضیحات</th>
                            <th>تاریخ تماس</th>
                            <th>تاریخ یاد آوری پیگیری</th>

                            <th>نام مشتری</th>
                            <th>نوع مشتری</th>
                            <th >عملیات ها</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <th scope="row">{{$phonebook->id}}</th>
                            <th scope="row">{{$phonebook->title}}</th>
                            <td><a href="/admin/phonebooks/{{$phonebook->id}}">{{$phonebook->description}}</a></td>
                            <td>{{new Verta($phonebook->calldate)}}</td>
                            <td>{{new Verta($phonebook->remember_date)}}</td>

                            <td>{{ $phonebook->client->first()->title }}</td>
                            <td>{{ $phonebook->client->first()->client_type }}</td>
                            <td>
                                <div class="btn-group inline-display" role="group" aria-label="Basic example">
                                    <a href="{{ URL::to('admin/phonebooks/' . $phonebook->id . '/edit') }}">
                                        <button type="button" class="btn btn-success legitRipple">ویراییش</button>
                                    </a>&nbsp;
                                    <form class="inline-display"  action="{{url('admin/phonebooks', [$phonebook->id])}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-success legitRipple" value="حذف"/>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>








    <h1>Showing Task {{ $phonebook->title }}</h1>
    <div class="jumbotron text-center">
        <p>
            <strong>Task Title:</strong> {{ $phonebook->title }}<br>
            <strong>Description:</strong> {{ $phonebook->description }}<br>
            <strong>Description:</strong> {{ $phonebook->client_id }}<br>
            <strong>Description:</strong> {{ $phonebook->calldate }}<br>
            <strong>Description:</strong> {{ $phonebook->rememberdate }}
        </p>
    </div>


@include('footer');


