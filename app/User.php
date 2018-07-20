<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Silber\Bouncer\Database\HasRolesAndAbilities;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ClientAdded;

class User extends Authenticatable
{
    use HasRolesAndAbilities;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','image','mobile','melicode','personeli'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function clients(){
        return $this->belongsToMany('App\Client','client_user');
    }
    public function sendClientAddedNotification($clientId ,$userId)
    {
        $this->notify(new ClientAdded($clientId, $userId));
    }

}
