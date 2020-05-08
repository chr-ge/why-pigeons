<?php

namespace App\Providers;

use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('delete-restaurant', function ($pigeon) {
           return $pigeon->is_super
               ? Response::allow()
               : Response::deny('You must be a super admin.');
        });

        Gate::define('license-is-created', function ($driver) {
            return $driver->drivers_license
                ? Response::allow()
                : Response::deny('You must add your drivers license.');
        });

        Gate::define('driver-can-reserve', function ($driver) {
            return $driver->reserved_order->first()
                ? Response::deny('You must add your drivers license.')
                : Response::allow();
        });
    }
}
