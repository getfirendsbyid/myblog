<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\Articles
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $article_img_url
 * @property string $published_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $intro
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @method static \Illuminate\Database\Query\Builder|\App\Articles whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Articles whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Articles whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Articles whereArticleImgUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Articles wherePublishedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Articles whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Articles whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Articles whereIntro($value)
 * @mixin \Eloquent
 */
class Articles extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'title', 'content', 'published_at','intro','created_at','updated_at'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

        'title', 'content',

    ];
}
