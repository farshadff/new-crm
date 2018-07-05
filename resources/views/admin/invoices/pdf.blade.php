<?php
/**
 * Created by PhpStorm.
 * User: farshad
 * Date: 5/23/2018
 * Time: 12:27 AM
 */

?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="style.css" media="all"/>

</head>
<body>

<div class="row">
    <div class="col-sm-8" style="font-size: 12px;">
        پیش فاکتور آقای /خانوم :
        @foreach($clients as $client)
            {{ $client->user->title ?? 'بدون مشتری' }}
        @endforeach
    </div>
    <div class="col-sm-4" style="color: #ccc; margin-right: 200px;">
        تاریخ صدور : <span>{{{new Verta()}}}</span>
    </div>
</div>
<h4>مشخصات فروشنده:</h4>
<table>
    <thead>
    <tr>
        <th style="background-color: #303F9F; color:#fff; line-height: 30px;"><h3> شركت توسعه فناوری سیمرغ سیالان </h3></th>
        <th style="background-color: #303F9F; color:#fff; line-height: 30px;"><h4>واحد : واحد فروش اینترنتی </h4></th>
    </tr>
    </thead>
</table>
<hr>

<br>
<br>
<h4>سمت : مدیربازرگانی فرشاد بدیعی </h4>
<br>
<h4>نشانی : همون جا پلاک 5 </h4>
<br>
<h3>مشخصات خریدار:  </h3>
<table>
    <thead>
    <tr>
        <th style="background-color: #303F9F; color:#fff; line-height: 30px;"><h3> آقای یلی </h3></th>
        <th style="background-color: #303F9F; color:#fff; line-height: 30px;"><h4>واحد : واحد فروش اینترنتی </h4></th>
    </tr>
    </thead>
</table>
<hr>


<br>
<h3>شماره تلفن : </h3>
<h4>محصولات</h4>
<table>
    <table class="table bordered border-red">
        <thead>
        <tr>
            <th>ردیف</th>
            <th>نام</th>
            <th>توضیحات</th>
            <th>نام مشتری</th>
            @foreach($invoices->products as $product)
                <th>نام محصول</th>
            @endforeach
        </tr>
        </thead>
        <tbody>

        <tr>
            <td style="border: 1px solid #ccc; margin-right:5px">{{$invoice_spec->id}}</td>
            <td style="border: 1px solid #ccc; margin-right:5px">{{$invoice_spec->title}}</td>
            <td style="border: 1px solid #ccc; margin-right:5px">{{$invoice_spec->description}}</td>
            @foreach($clients as $client)
                <td style="border: 1px solid #ccc; margin-right:5px">{{ $client->user->title ?? 'بدون مشتری' }}</td>
            @endforeach
            @foreach($invoices->products as $product)
                {{--<td style="border: 1px solid #ccc; margin-right:5px">--}}
                    {{--{{$product->name}}--}}
                {{--</td>--}}
                <td  style="border: 1px solid #ccc; margin-right:5px">
                    {{$product->name}}
                    <span class="btn btn-success">
                                    (به تعداد)

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
        </tr>
        </tbody>
    </table>
</table>
</body>
</html>


{{--<td>{{$invoice_spec->id}}</td>--}}
{{--<td>{{$invoice_spec->title}}</td>--}}
{{--<td>{{$invoice_spec->description}}</td>--}}
{{--</tr>--}}

{{--</tbody>--}}
{{--</table>--}}

{{--</div>--}}

