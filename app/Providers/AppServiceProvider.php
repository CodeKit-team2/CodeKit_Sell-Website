<?php

namespace App\Providers;

use App\Actions\Profile\UpdateUserProfileInformation;
use App\Interface\Profile\UpdatesAdminProfileInformation;
use App\View\Admin\Layout\AppLayout;
use App\View\Admin\Layout\GuestLayout;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class  AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        app()->singleton(UpdatesAdminProfileInformation::class, UpdateUserProfileInformation::class);

        Builder::macro('search', function ($field, $string) {
            return $string ? $this->where($field, 'like', '%'.$string.'%') : $this;
        });

        Blade::component('guest-layout', GuestLayout::class);
        Blade::component('app-layout', AppLayout::class);

    }
}
