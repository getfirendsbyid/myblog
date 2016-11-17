<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Discussion extends Model
{
    use Notifiable;

    protected $fillable = [

        'title', 'body', 'user_id','last_user_id',

    ];

    public  function user(){

        return $this->belongsTo(User::class,'user_id'); //拿到一个用户的所有文章

    }


}
