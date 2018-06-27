<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','price','cat_id','stock'];
    public  function product_cat() {
        return $this->hasMany('App\ProductCat','id' , 'cat_id');
    }
}
