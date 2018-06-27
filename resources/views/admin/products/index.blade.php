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
<div class="content-wrapper">

    <!-- Content area -->
    <div class="content">
        <!-- Horizontal borders -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">دفترچه تلفن</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">

            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr class="border-double">
                        <th>ردیف</th>
                        <th scope="col">نام محصول</th>
                        <th scope="col">توضیحات محصول</th>
                        <th scope="col">قیمت</th>
                        <th scope="col">ساخته شده در</th>
                        <th scope="col">دسته</th>
                        <th scope="col">عملیات ها</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $products)
                        <tr>
                            <th scope="row">{{$products->id}}</th>
                            <td><a href="/admin/products/{{$products->id}}">{{$products->name}}</a></td>
                            <td>{{$products->Description}}</td>
                            <td>{{$products->price}}</td>
                            <td>{{new Verta($products->created_at)}}</td>
                            <td>{{ $products->product_cat->first()->title }}</td>
                            <td>
                                <div class="btn-group inline-display" role="group" aria-label="Basic example">
                                    <a href="{{ URL::to('admin/products/' . $products->id . '/edit') }}">
                                        <button type="button" class="btn btn-primary">ویراییش</button>
                                    </a>&nbsp;
                                    <form class="inline-display" action="{{url('admin/products', [$products->id])}}" method="POST">
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
        </div>
    </div>
    @include('footer');
</div>


@include('footer');
