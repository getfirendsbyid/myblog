<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * App\post
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $body
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @method static \Illuminate\Database\Query\Builder|\App\post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\post whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\post whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\post whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\post whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\post whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class post extends Model
{

    use Notifiable;

    protected $fillable = [

        'user_id', 'title', 'body'

    ];

}
