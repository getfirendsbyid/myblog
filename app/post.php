<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class post extends Model
{

    use Notifiable;

    protected $fillable = [

        'user_id', 'title', 'body'

    ];

}
