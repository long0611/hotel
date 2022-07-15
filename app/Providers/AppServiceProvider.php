<?php

namespace App\Providers;
use App\Models\Detail_hotel;
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
        view()->composer('header',function($view){
            $khachsan = Detail_hotel::all();
            $view->with('khachsan',$khachsan);
        });
    }
}
