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
    <link rel="stylesheet" href="style.css" media="all" />

</head>
<body>
<h4> پیش فاکتور آقای/خانوم :
    @foreach($clients as $client)
    {{ $client->user->title ?? 'بدون مشتری' }}</td>
    @endforeach
</h4>

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
                        <td style="border: 1px solid #ccc; margin-right:5px">
                            {{$product->name}}
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

