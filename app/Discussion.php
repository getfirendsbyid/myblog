<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * App\Discussion
 *
 * @property integer $id
 * @property string $title
 * @property string $body
 * @property integer $user_id
 * @property integer $last_user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\User $user
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @method static \Illuminate\Database\Query\Builder|\App\Discussion whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Discussion whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Discussion whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Discussion whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Discussion whereLastUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Discussion whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Discussion whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Discussion extends Model
{
    use Notifiable;

    protected $fillable = [

        'title', 'body', 'user_id','last_user_id',

    ];

    public  function user(){

        return $this->belongsTo(User::class,'user_id'); //拿到一个用户的所有文章

    }


    public static function creatediscussion(array $discussion)
    {

        $res = static::create($discussion);

        return $res;

    }
}
