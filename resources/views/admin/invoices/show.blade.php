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
                        <thead>
                        <tr class="border-double">
                            <th>ردیف</th>
                            <th>نام فاکتور</th>
                            <th>توضیحات</th>
                            <th>نام مشتری</th>
                            @foreach($invoices->products as $product)
                                <th>نام محصول</th>
                            @endforeach
                            <th>دانلود PDF</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>{{$invoice->id}}</td>
                            <td>{{$invoice->title}}</td>
                            <td><a href="/admin/invoices/{{$invoice->id}}">{{$invoice->description}}</a></td>
                            @foreach($invoices->products as $product)
                                <td>
                                    {{$product->name}}
                                </td>
                                {{--<td>--}}
                                {{--{{$product->pivot->product_quantity}}--}}
                                {{--</td>--}}
                            @endforeach
                            <td><a href="{{action('InvoiceController@downloadPDF', $invoice->id)}}">PDF</a></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

    </div>
</div>


@include('footer');


