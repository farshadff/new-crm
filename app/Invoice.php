<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['title','description','client_id','product_id'];
    public function user() {
        return $this->hasOne('App\Client','id','client_id');
    }
    public function products()
    {
        return $this->belongsToMany('App\Product', 'invoice_product', 'invoice_id')
            ->as('quantity')
            ->withPivot('product_quantity')
            ;

    }
}
