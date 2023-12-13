<?php
 
namespace App\Providers;

use App\Http\View\Composers\TourComposer;
use App\Http\View\Composers\DestinationComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
// use Illuminate\View\View;
 
class ViewServiceProvider extends ServiceProvider
{ 
    /**
     * Register any application services.
     */
    public function register()
    {
        // ...
    }
 
    public function boot()
    {
        View::composer('user.sidebar', TourComposer::class);  
        View::composer('user.sidebar', DestinationComposer::class);
    }
}