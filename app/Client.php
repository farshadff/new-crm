<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ClientAdded;

class Client extends Model
{
//    public function phonebook()
//    {
////        felan in realtion jaie estefade nemishe o taghiresh be ham nemizane chizo
//        return $this->belongsToMany('App\Phonebook','phonebooks','client_id');
//}
    protected $fillable =
        [
            'title',
            'description',
            'client_type',
            'sellman',
            'fax',
            'adrress1',
            'adrress2',
            'adrress3',
            'adrress4',
            'adrress5',
            'telephone1',
            'telephone2',
            'telephone3',
            'telephone4',
            'telephone5',
            'sellpercent',
            'agreement',
        ];
    public function sellmanlist(){
        return $this->belongsToMany('App\User' , 'client_user','client_id');
    }

}
