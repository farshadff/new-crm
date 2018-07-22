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
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                        <tr class="border-double">
                            <th>ردیف</th>
                            <th>نام دسته</th>
                            <th>توضیحات</th>
                            <th>عملیات ها</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">{{$productCat->id}}</th>
                            <th scope="row">{{$productCat->title}}</th>
                            <td><a href="/admin/product_cats/{{$productCat->id}}">{{$productCat->description}}</a></td>
                            <td>
                                <div class="btn-group inline-display" role="group" aria-label="Basic example">
                                    <a href="{{ URL::to('admin/phonebooks/' . $productCat->id . '/edit') }}">
                                        <button type="button" class="btn btn-success legitRipple">ویراییش</button>
                                    </a>&nbsp;
                                    <form style="display:inline" action="{{url('admin/phonebooks', [$productCat->id])}}"
                                          method="POST">
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
@include('footer');


