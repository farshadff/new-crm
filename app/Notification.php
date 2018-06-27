<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function phonebook() {
    return $this->belongsToMany('App/Phonebook');
}
    public function client() {
        return $this->hasMany('App\Client','id' , 'client_id');
    }
}
