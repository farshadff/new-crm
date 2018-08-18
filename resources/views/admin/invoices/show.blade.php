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
        <div class="panel panel-flat border-left-info">
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
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                        <tr class="border-double">
                            <th>ردیف</th>
                            <th>نام فاکتور</th>
                            <th>توضیحات</th>
                            <th>نام مشتری</th>
                            @foreach($invoices->products as $product)
                                <th>نام محصول-تعداد-قیمت</th>
                            @endforeach
                            <th>عملیات ها</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>{{$invoice->id}}</td>
                            <td>{{$invoice->title}}</td>
                            <td><a href="/admin/invoices/{{$invoice->id}}">{{$invoice->description}}</a></td>
                            @foreach($clients as $client)
                                <td>{{ $client->user->title ?? 'کاربر وجود ندارد' }}</td>
                            @endforeach
                            @foreach($invoices->products as $product)
                                <td>
                                    {{$product->name}}
                                    <span class="btn btn-success">
                                    {{$product->quantity['product_quantity']}}
                                    عدد
                                        </span>
                                    <span class="btn btn-primary">
                                        به قیمت
                                         {{$product->price}}
                                    </span>
                                </td>
                                {{--<td>--}}
                                {{--{{$product->pivot->product_quantity}}--}}
                                {{--</td>--}}
                            @endforeach
                            <td><a class="btn btn-primary" href="{{action('InvoiceController@downloadPDF', $invoice->id)}}">صدور فاکتور</a></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

    </div>
</div>


@include('footer')

