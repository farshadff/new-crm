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
<div class="app-content content">

<h1 class="text-center">ویراییش محصول</h1>
<hr>
<form action="{{url('products', [$product->id])}}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">نام محصول</label>
        <input type="text" value="{{{$product->title}}}" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="description">توضیحات محصول</label>
        <input type="text" value="{{{$product->description}}}" class="form-control" id="description" name="description">
    </div>
    <div class="form-group">
        <label for="price">قیمت(به تومان)</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    <fieldset class="form-group">
        <label for="cat_id">دسته بندی محصول</label>
        <select class="custom-select" name="cat_id" id="cat_id">
            @foreach($product_cats as $product_cat)
                <option value="{{{$product_cat->id}}}">{{{$product_cat->title}}}</option>
            @endforeach
        </select>
    </fieldset>
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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <button type="submit" class="btn btn-primary">تایید</button>
</form>
</div>
@include('footer');
