<?php

namespace App\Providers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
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
        // Prevent Lazy loading for the queries executed
        Model::preventLazyLoading();

        // Define the brute-force middleware
        RateLimiter::for('sing-in', function (Request $request){
           return Limit::perMinute(5)
               ->by($request->ip())
               ->response(function (){
               return response()->view('errors.429');
           });
        });
    }
}
