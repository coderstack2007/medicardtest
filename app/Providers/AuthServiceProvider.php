<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Http\Middleware\Patients;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Patients::class => UserPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
