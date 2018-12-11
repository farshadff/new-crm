<?php
/**
 * Created by PhpStorm.
 * User: farshad
 * Date: 5/23/2018
 * Time: 12:26 AM
 */
?>

@include('header')
@include('sidebar')
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Horizontal borders -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">اضافه کردن محصول</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <form action="/admin/products" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">نام محصول</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="description">توضیحات محصول</label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="price">قیمت(به تومان)</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>انتخاب دسته</label>
                            <select class="select-search select2-hidden-accessible" tabindex="-1" aria-hidden="true"
                                    name="cat_id">
                                @foreach($product_cats as $product_cat)
                                    <option value="{{{$product_cat->id}}}">{{{$product_cat->title}}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <fieldset class="radio">
                            <label>
                                <input type="radio" name="stock" value="1"> موجود
                            </label>
                        </fieldset>
                        <fieldset class="radio">
                            <label>
                                <input type="radio" name="stock" value="0"> نا موجود
                            </label>
                        </fieldset>
                    </div>
            <button type="submit" class="btn btn-primary">ارسال</button>
            </form>
        </div>
            @if ($errors->any())
                <div class="panel panel-flat bg-warning">
                    <div class="panel-heading">
                        <h5 class="panel-title">لطفا خطاهای زیر را بررسی کنید</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">

                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif


    </div>
</div>
</div>
@include('footer')