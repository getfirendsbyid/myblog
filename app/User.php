<?php

namespace App;

use App\Events\UserRegistered;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

/**
 * App\User
 *
 * @property integer $id
 * @property string $name
 * @property string $avatar
 * @property string $confirm_code
 * @property integer $is_confirmed
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\User $discussions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Articles[] $favorites
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereAvatar($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereConfirmCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereIsConfirmed($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name', 'email', 'password','avatar','confirm_code'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

        'password', 'remember_token',

    ];

    public function setPasswordAttribute($password){

        $this->attributes['password']  =  Hash::make($password);

    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * 属于该讨论文章的用户
     */
    public  function discussions(){

        return $this->belongsTo(User::class);

    }

    /**
     * @param array $attributes
     * @return static
     * 用户祖册
     */
    public static function register(array  $attributes) //特性
    {


        $user = static::create($attributes);

        event(new UserRegistered($user));  //触发事件, 发送带有token短信

        return $user;

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     *
     * 查询带有最喜欢的文章
     */
    public function  favorites(){

        return $this->belongsToMany(Articles::class,'favorites');

    }

    /**
     * @param $disscussion
     * @return bool
     *
     * 文章所有者权限
     */
    public function owns($disscussion)
    {

       return $this->id == $disscussion->user_id;

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     *
     *
     */
    public function roles()
    {

        return $this->belongsToMany(Role::class);
        
    }

    public function hasRole($role)
    {

        dd($this->roles->contains('name',$role));

        if (is_string($role)){

            dd($this->roles->contains('name',$role));

//           return $this->roles->contains('name',$role);

        }

//        return !! $role->intersect($this->roles)->count();

    }




}
