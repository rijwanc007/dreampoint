<?php

namespace App\Providers;

use App\Hotdeal;
use App\Wishlist;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        view()->composer('frontend.include.footer', function($view) {
            $view->with('hotdeals', Hotdeal::orderBy('id', 'DESC')->skip(0)->take(6)->get());
        });
        view()->composer('frontend.include.header', function($view) {
            $view->with('wishlists', Wishlist::where('ip', $_SERVER['REMOTE_ADDR'])->orderBy('id', 'DESC')->get());
        });
    }
}
