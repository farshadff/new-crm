<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','price','cat_id','stock'];
    public  function product_cat() {
        return $this->hasMany('App\ProductCat','id' , 'cat_id');
    }
//    public function  invoices(){
//        return $this->belongsToMany('App\Invoice', 'invoice_product', 'product_id','invoice_id')
//            ->withPivot('product_quantity')
//            ->as('invoice_products_pivot');
//    }
    public function invoices()
    {
        return $this->belongsToMany(Invoice::class, 'invoice_products', 'product_id');
    }
}
