<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /************************************************************
         * Création de l'accés administrateur                       *
         * Importation de la class user en "use App\Models\User;"   *
         * return de la variable $user a la colonne admin           *
         ************************************************************/
        Gate::define('access-admin', function (User $user) {
            return $user->admin;
        });
        //
    }
}
