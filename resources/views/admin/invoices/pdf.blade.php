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
    <h4 style="background-color: #004D40; color:#fff; line-height: 30px;">
        شماره فاکتور {{$invoice_spec->id}}
    </h4>
</div>
<h4>مشخصات فروشنده:</h4>
<table>
    <thead>
    <tr>
        <th style="background-color: #004D40; color:#fff; line-height: 30px;"><h3> شركت توسعه فناوری سیمرغ سیالان </h3>
        </th>
        <th style="background-color: #004D40; color:#fff; line-height: 30px;"><h4>واحد : واحد فروش اینترنتی </h4></th>

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
<h3>مشخصات خریدار: </h3>
<table>
    <thead>
    <tr>
        @foreach($clients as $client)
            <th style="background-color: #004D40; color:#fff; ">
                <h4>{{ $client->user->title ?? 'بدون مشتری' }} </h4></th>


            <th style="background-color: #004D40; color:#fff; ">
                <h4> شماره تلفن
                    : {{$client->user->telephone1 ?? 'شماره تلفن موجود نمیباشد'}}</h4></th>
        @endforeach
    </tr>
    </thead>
</table>
<hr>


<br>
<h3></h3>
<h4>محصولات</h4>
<table>
    <table class="table bordered border-red">
        <thead>
        <tr>
            {{--@foreach($invoices->products as $product)--}}
            <th style="width: 10%;">ردیف</th>
            <th>نام</th>
            <th>قیمت</th>
            <th>تعداد</th>
            {{--@endforeach--}}
            <th>قیمت کل</th>
        </tr>
        </thead>
        <tbody>


        @foreach($invoices->products as $product)
            <tr>
                <td style="border: 1px solid #ccc; width: 10%;">1</td>


                <td style="border: 1px solid #ccc; margin-right:5px">
                    {{$product->name}}
                </td>
                <td style="border: 1px solid #ccc; margin-right:5px"> {{{number_format($product->price)}}} تومان</td>
                <td style="border: 1px solid #ccc; margin-right:5px">{{$product->quantity['product_quantity']}}</td>


                <td style="border: 1px solid #ccc; margin-right:5px; width: 30%;">
                    @php(
                    $sumprice = $product->price * $product->quantity['product_quantity']
                    )
                    {{{number_format($sumprice)}}} تومان
                </td>
            </tr>
        @endforeach
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

