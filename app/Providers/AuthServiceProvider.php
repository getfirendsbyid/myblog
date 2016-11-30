<?php

namespace App\Providers;

use App\Permissions;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Discussion' => 'App\Policies\DiscussionPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
        //你的代码


        foreach ($this->getPermissions() as $permission) {

            $gate->define($permission->name,function (User $user) use($permission){

                return  $user->hasRole($permission->roles);

            });

        }


    }

    public function getPermissions()
    {

        return Permissions::with('roles')->get();

    }


}
