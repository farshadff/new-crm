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
<!-- Main content -->
<div class="content-wrapper">

    <!-- Content area -->
    <div class="content">
        {{--members to call  STart--}}
        @if (Auth::user())
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h5 class="panel-title">فاکتور ها</h5>

                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    {{--{{{new Verta($current_time)}}}--}}

                    <div class="table-responsive">
                        <table class="table ">
                            <thead>

                            <tr class="border-double">
                                <th>ردیف</th>
                                <th>نام مخاطب</th>
                                <th>توضیحات</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($invoices as $invoice)
                                <tr>
                                    <td scope="row">{{$invoice->id}}</td>
                                    <td><a href="/admin/invoices/{{$invoice->id}}">{{$invoice->title}}</a></td>
                                    <td scope="row">{{$invoice->description}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
                {{--members to call end--}}

            </div>
        @endif
    </div>
    @include('footer');

</div>
