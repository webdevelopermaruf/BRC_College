<?php

namespace App\Providers;

use App\Models\SiteInfoModel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('site_settings', SiteInfoModel::where('site_no',1)->first());
    }
}
