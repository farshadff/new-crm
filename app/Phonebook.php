<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Phonebook extends Model
{
    protected $fillable = ['title','description','client_id','calldate','rememberdate'];
    public function client() {
        return $this->hasMany('App\Client','id' , 'client_id');
    }
}
