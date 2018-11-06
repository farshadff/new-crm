<?php

namespace App;

use App\Events\MessageUpdated;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $dispatchesEvents = [
        "updated" => MessageUpdated::class
    ];
}
