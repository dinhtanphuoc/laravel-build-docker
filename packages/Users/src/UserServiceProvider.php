<?php

namespace PhpSoft\Users;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'phpsoft.users');

        // Publish migrations
        // $this->publishes([
        //   __DIR__.'/../database/migrations' => base_path('database/migrations'),
        // ], 'migrations');

        // Publish views
        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/vendor/phpsoft.users'),
        ], 'views');

        \Validator::resolver(function($translator, $data, $rules, $messages) {
            return new Validators\ValidateRequest($translator, $data, $rules, $messages);
        });
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
    }
}
